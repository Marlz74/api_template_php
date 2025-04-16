<?php
namespace App\Libraries;
use DateTime;
use DateTimeZone;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


use Kreait\Firebase\Factory;


class Helpers
{


    public static function sanitize($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;

    }

    public static function isValidEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function isMethod($method)
    {

        return strtoupper($_SERVER['REQUEST_METHOD']) === strtoupper(trim($method));
    }
    public static function getMethod()
    {

        return $_SERVER['REQUEST_METHOD'] ?? 'POST';
    }

    public static function encryptPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    public static function decryptPassword($password, $hash)
    {

        return password_verify($password, $hash);
    }
    public static function generateJWT($payload)
    {
        $setAt = time();
        $expiresAt = $setAt + (3600 * getenv('JWTEXP'));
        $payload['iat'] = $setAt;
        $payload['exp'] = $expiresAt;

        $jwt = JWT::encode($payload, getenv('JWTKEY'), 'HS256');

        return $jwt;
    }
    public static function generateJWTRefresh($payload)
    {
        $setAt = time();
        $expiresAt = $setAt + (3600 * getenv('JWTEXP_REFRESH'));
        $payload['iat'] = $setAt;
        $payload['exp'] = $expiresAt;

        $jwt = JWT::encode($payload, getenv('JWTKEY'), 'HS256');

        return $jwt;
    }

    public static function validateJWT($token)
    {
        try {
            // Retrieve JWT key from environment variables
            $key = getenv("JWTKEY");

            // Decode JWT token
            $decoded = JWT::decode($token, new Key($key, 'HS256'));

            // Return success response with decoded data
            return [
                'state' => true,
                'data' => $decoded
            ];
        } catch (Exception $e) {
            // Return failure response with error message
            return [
                'state' => false,
                'data' => $e->getMessage()
            ];
        }
    }

    public static function refreshJWT($token)
    {

        $validation = self::validateJWT($token);

        if (!$validation['state']) {

            return [
                'status' => false,
                'code' => 401,
                'message' => 'Invalid token. Unable to refresh.'
            ];
        }

        $decodedData = (array) $validation['data'];
        unset($decodedData['iat'], $decodedData['exp']);

        return [
            'status' => true,
            'code' => 200,
            "message" => "Token refreshed successfully",
            'accessToken' => self::generateJWT($decodedData),
            'refreshToken' => self::generateJWTRefresh($decodedData)
        ];
    }


    public static function createResponse($statusCode, $message, $status)
    {
        // Prepare response array
        return [
            "statusCode" => $statusCode,
            "message" => $message,
            "status" => $status
        ];
    }

    /**
     * Retrieve the JWT token from the Authorization header.
     *
     * @return string|null JWT token if found, null otherwise.
     */
    public static function getBearerToken()
    {
        // Retrieve all HTTP request headers
        $headers = apache_request_headers();

        // Check if the Authorization header exists
        if (!empty($headers['Authorization'])) {
            $authHeader = $headers['Authorization'];

            // Extract the token part of the Authorization header
            if (preg_match('/Bearer\s+(\S+)/', $authHeader, $matches)) {
                return $matches[1]; // Return the token if found
            }
        }

        return null; // Return null if no token is found
    }



    public static function generateCode($len)
    {

        $code = '';
        while (strlen($code) != $len) {
            $code .= rand(0, 9);
        }
        return $code;
    }

    public static function encryptData($data)
    {
        $ivLength = openssl_cipher_iv_length('aes-256-cbc');
        $iv = openssl_random_pseudo_bytes($ivLength);
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', getenv('EN_KEY'), 0, $iv);
        // Encode the encrypted data and IV to be easily stored or transferred
        return base64_encode($encrypted . '::' . $iv);
    }

    public static function decryptData($data)
    {
        list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);

        // Ensure IV is exactly 16 bytes
        $iv = substr($iv, 0, 16);

        return openssl_decrypt($encrypted_data, 'aes-256-cbc', getenv('EN_KEY'), 0, $iv);
    }


  

    public static function differenceInMinute($dateTime, $minutes)
    {
        return (new DateTime())->diff(new DateTime($dateTime))->days * 1440 +
            (new DateTime())->diff(new DateTime($dateTime))->h * 60 +
            (new DateTime())->diff(new DateTime($dateTime))->i < $minutes;
    }



    public static function saveBase64Image($base64String, $filePath)
    {
        $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64String));

        // Check if base64_decode failed
        if ($imageData === false) {
            return false;
        }

        // Verify that the data represents a valid image
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_buffer($finfo, $imageData);
        finfo_close($finfo);

        // Only proceed if the data is a valid image
        if (strpos($mimeType, 'image/') !== 0) {
            return false; // Not a valid image
        }

        // Save the image data to the file
        return file_put_contents($filePath, $imageData) !== false;
    }

    public static function verifyBase64Image($base64String)
    {
        // Remove the base64 prefix if present
        $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64String));


        // Check if base64_decode failed
        if ($imageData === false) {
            return false;
        }

        // Verify that the data represents a valid image
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_buffer($finfo, $imageData);
        finfo_close($finfo);

        // Check if the MIME type is an image
        return (strpos($mimeType, 'image/') === 0);
    }




    public static function isValidTimezone($timezone)
    {
        return in_array($timezone, DateTimeZone::listIdentifiers());
    }


    /**
     * Convert a date and time to the user's timezone.
     *
     * @param string $dateTime The date and time in 'Y-m-d H:i:s' format.
     * @param string $userTimezone The user's timezone.
     * @param string $sourceTimezone The source timezone of the date and time.
     * @return string The converted date and time in 'Y-m-d H:i:s' format.
     */
    public static function convertToUserTimezone($dateTime, $userTimezone, $sourceTimezone = 'UTC')
    {
        try {
            $dt = new DateTime($dateTime, new DateTimeZone($sourceTimezone));
            $dt->setTimezone(new DateTimeZone($userTimezone));
        } catch (Exception $e) {
            $dt = new DateTime($dateTime, new DateTimeZone('UTC'));
        }
        return $dt->format('Y-m-d H:i:s');
    }


    public static function access()
    {
        try {

            @$token = self::getBearerToken();
            if (!$token) {
                return [
                    "code" => 400,
                    "data" => json_encode([
                        'statusCode' => 400,
                        'message' => 'Invalid or JWT token  not found'
                    ])
                ];
                // No JWT token found
            }

            @$jwtData = self::validateJWT($token); // Validate JWT token
            if ($jwtData['state'] === false) {
                return [
                    "code" => 401,
                    "data" => json_encode(([
                        'statusCode' => 401,
                        'message' => $jwtData['data']
                    ]))
                ];

            }
            $jwtData['data']->iat = (new DateTime())->setTimestamp($jwtData['data']->iat)->format('Y-m-d H:i:s');
            $jwtData['data']->exp = (new DateTime())->setTimestamp($jwtData['data']->exp)->format('Y-m-d H:i:s');

            return ["code" => 200, "data" => $jwtData['data'], "role" => @$jwtData['data']->role];

            //code...
        } catch (\Throwable $th) {
            //throw $th;
            return [
                "code" => 400,
                "data" => json_encode([
                    'statusCode' => 400,
                    'message' => 'Invalid or JWT token not found'
                ])
            ];
        }
        // No JWT token found Deny access

    }

    public static function ipAddress()
    {
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
        } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) ? $ip : null;
    }






  



    /**
     * Send a push notification using Firebase Cloud Messaging (FCM).
     *
     * @param string $deviceToken The device token to send the notification to.
     * @param string $title The title of the notification.
     * @param string $body The body of the notification.
     * @return array An array containing the response status and message.
     */
    public static function sendPushNotification($deviceToken, $title, $body)
    {
        $firebase = (new Factory)
            ->withServiceAccount('service-account.json')
            ->createMessaging();

        $message = [
            'token' => $deviceToken,
            'notification' => [
                'title' => $title,
                'body' => $body
            ]
        ];

        try {
            $response = $firebase->send($message);
            print_r($response);
            return ["code" => 200, "status" => true, "message" => 'Notification sent successfully!'];
        } catch (\Kreait\Firebase\Exception\MessagingException $e) {
            return [
                "code" => 500,
                "status" => false,
                "message" => $e->getMessage()
            ];
        }

    }


























}