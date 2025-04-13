<?php

namespace App\Libraries;

class Email_Templates
{


    public static function verifyCodeEmail($code)
    {
        return "
            <!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8' />
                    <title>Verify Email</title>
                    <link rel='preconnect' href='https://fonts.googleapis.com'>
                    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                    <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
                </head>
                <body
                    style='
                    font-family: Plus Jakarta Sans, sans-serif;
                    background-color: #f6f6f6;
                    margin: 0;
                    padding: 0;
                    '
                    >
                    <table
                    width='100%'
                    bgcolor='#f6f6f6'
                    cellpadding='0'
                    cellspacing='0'
                    border='0'
                    style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'
                    >
                    <tr>
                        <td>
                        <table
                            align='center'
                            cellpadding='0'
                            cellspacing='0'
                            border='0'
                            width='100%'
                            style='
                            max-width: 600px;
                            background-color: #ffffff;
                            margin: 20px auto;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                            '
                        >
                            <tr>
                            <td
                                align='left'
                                style='padding: 10px 20px; background-color: #fff;'
                            >
                                <img
                                src='" . BASEURL . "/img/icons/icon.png'
                                alt='[Your Website] Logo'
                                />
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <img
                                    src='" . BASEURL . "/img/icons/emailframe.png'
                                    alt='[Your Website] Logo'
                                    style='width: 100%;'
                                    />
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 2px 20px; color: #333333'>
                                    <h1 style='color: #333333; text-align: center; font-size: 24px; font-family:'Plus Jakarta Sans' ; '>
                                    Verify your email
                                    </h1>

                                    <p style='text-align: center;  ' >
                                        Thank you for registering with us! To complete your registration and activate your account, we need to verify your email address.
                                    </p>
                                    <p style='text-align: center;font-weight: 700;margin-bottom: 0;' >Use the code below to verify your account</p>
                                </td>
                            </tr>
                            <tr>
                                <td align='center' style='height: 95px;' >
                                    <a
                                    style='
                                        text-decoration: none;
                                        padding: 12px 36px;
                                        background-color: #2D35E9;
                                        color: white;
                                        border-radius: 28px;
                                        letter-spacing: 5px;
                                    '
                                    >" . $code . "</a
                                    >
                                </td>
                            </tr>
                            
                            <tr style='background-color: #F8F8F8; ' >
                                <td align='center' style='padding: 20px;text-align: center; font-size: 12px; '>

                                    <p>
                                        Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                        You are receiving this email because you registered on our mobile app.
                                    </p>

                                    <p>
                                        Our mailing address is: <br>
                                        " . getenv('APP') . " <br>
                                        123 Maple Street <br>
                                        Toronto, OT M5A 1A1, Canada
                                    </p>
                                    

                                    <table
                                    align='center'
                                    cellpadding='0'
                                    cellspacing='0'
                                    border='0'
                                    style='margin: 0 auto'
                                    >
                                    <tr>
                                        <td style='padding: 5px'>
                                            <a
                                                href='instagram link'
                                                style='text-decoration: none'
                                            >
                                                <img
                                                src='" . BASEURL . "/img/icons/linkedin.png'
                                                alt='linkedin'
                                                style='width: 20px; height: 20px'
                                                />
                                            </a>
                                            </td>
                                        <td style='padding: 5px'>
                                        <a
                                            href='Facebook link'
                                            style='text-decoration: none'
                                        >
                                            <img
                                            src='" . BASEURL . "/img/icons/x.png'
                                            alt='Facebook'
                                            style='width: 20px; height: 20px'
                                            />
                                        </a>
                                        </td>
                                        <td style='padding: 5px'>
                                        <a
                                            href='twitter'
                                            style='text-decoration: none'
                                        >
                                            <img
                                            src='" . BASEURL . "/img/icons/linkedin.png'
                                            alt='Twitter'
                                            style='width: 20px; height: 20px'
                                            />
                                        </a>
                                        </td>
                                    </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </body>
                </html>

              
        ";
    }
    public static function resetPasswordEmail($code)
    {
        return "
                 <!DOCTYPE html>
                    <html lang='en'>
                        <head>
                            <meta charset='UTF-8' />
                            <title>Verify Email</title>
                            <link rel='preconnect' href='https://fonts.googleapis.com'>
                            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                            <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
                        </head>
                        <body
                            style='
                            font-family: Plus Jakarta Sans, sans-serif;
                            background-color: #f6f6f6;
                            margin: 0;
                            padding: 0;
                            '
                            >
                            <table
                            width='100%'
                            bgcolor='#f6f6f6'
                            cellpadding='0'
                            cellspacing='0'
                            border='0'
                            style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'
                            >
                            <tr>
                                <td>
                                <table
                                    align='center'
                                    cellpadding='0'
                                    cellspacing='0'
                                    border='0'
                                    width='100%'
                                    style='
                                    max-width: 600px;
                                    background-color: #ffffff;
                                    margin: 20px auto;
                                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                    '
                                >
                                    <tr>
                                        <td
                                            align='left'
                                            style='padding: 10px 30px; background-color: #fff;'
                                        >
                                            <img
                                            src='" . BASEURL . "/img/icons/icon.png'
                                            alt='[Your Website] Logo'
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 2px 30px; color: #333333'>
                                            <p style='margin-bottom: 14px;' >Hi</p>

                                            <p >
                                                We received a request to change the password to your Pharste account. 
                                            </p>
                                            <p style='font-weight: 700;margin-bottom: 0;' >Use the code below to proceed with your password reset, This code will expire 10 minutes.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align='center' style='height: 95px;' >
                                            <a
                                            style='
                                                text-decoration: none;
                                                padding: 12px 36px;
                                                background-color: #2D35E9;
                                                color: white;
                                                border-radius: 28px;
                                                letter-spacing: 5px;
                                            '
                                            >" . $code . "</a
                                            >
                                        </td>
                                    </tr>
                                    
                                    <tr style='background-color: #F8F8F8; ' >
                                        <td align='center' style='padding: 20px;text-align: center; font-size: 12px; '>

                                            <p>
                                                Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                                You are receiving this email because you registered on our mobile app.
                                            </p>

                                            <p>
                                                Our mailing address is: <br>
                                                " . getenv('APP') . " <br>
                                                123 Maple Street <br>
                                                Toronto, OT M5A 1A1, Canada
                                            </p>
                                            

                                            <table
                                            align='center'
                                            cellpadding='0'
                                            cellspacing='0'
                                            border='0'
                                            style='margin: 0 auto'
                                            >
                                            <tr>
                                                <td style='padding: 5px'>
                                                    <a
                                                        href='" . getenv('FACEBOOK') . "'
                                                        style='text-decoration: none'
                                                    >
                                                        <img
                                                        src='" . BASEURL . "/img/icons/linkedin.png'
                                                        alt='linkedin'
                                                        style='width: 20px; height: 20px'
                                                        />
                                                    </a>
                                                    </td>
                                                <td style='padding: 5px'>
                                                <a
                                                    href='" . getenv('X') . "'
                                                    style='text-decoration: none'
                                                >
                                                    <img
                                                    src='" . BASEURL . "/img/icons/x.png'
                                                    alt='Facebook'
                                                    style='width: 20px; height: 20px'
                                                    />
                                                </a>
                                                </td>
                                                <td style='padding: 5px'>
                                                <a
                                                    href='" . getenv('INSTAGRAM') . "'
                                                    style='text-decoration: none'
                                                >
                                                    <img
                                                    src='" . BASEURL . "/img/icons/linkedin.png'
                                                    alt='Twitter'
                                                    style='width: 20px; height: 20px'
                                                    />
                                                </a>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                            </table>
                        </body>
                    </html>
        ";
    }

    public static function notifyAdminEnquiry($userName, $userEmail, $title, $userMessage)
    {
        return "
                <!DOCTYPE html>
                    <html lang='en'>
                        <head>
                            <meta charset='UTF-8' />
                            <title>User Enquiry</title>
                            <link rel='preconnect' href='https://fonts.googleapis.com'>
                            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                            <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
                        </head>
                        <body
                            style='
                            font-family: Plus Jakarta Sans, sans-serif;
                            background-color: #f6f6f6;
                            margin: 0;
                            padding: 0;
                            '
                            >
                            <table
                            width='100%'
                            bgcolor='#f6f6f6'
                            cellpadding='0'
                            cellspacing='0'
                            border='0'
                            style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'
                            >
                            <tr>
                                <td>
                                <table
                                    align='center'
                                    cellpadding='0'
                                    cellspacing='0'
                                    border='0'
                                    width='100%'
                                    style='
                                    max-width: 600px;
                                    background-color: #ffffff;
                                    margin: 20px auto;
                                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                    '
                                >
                                    <tr>
                                        <td
                                            align='left'
                                            style='padding: 10px 30px; background-color: #fff;'
                                        >
                                            <img
                                            src='" . BASEURL . "/img/icons/icon.png'
                                            alt='[Your Website] Logo'
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 2px 30px; color: #333333'>
                                            <p style='margin-bottom: 14px;' >Hi Admin,</p>

                                            <p >
                                                You have received a new inquiry from a user. Below are the details:
                                            </p>
                                            <p style='font-weight: 700;margin-bottom: 0;'>
                                                Name: " . $userName . "<br>
                                                Email: " . $userEmail . "<br>
                                                Title: " . $title . "<br>
                                                Message:
                                            </p>
                                            <p style='padding: 10px; background-color: #f8f8f8; border-radius: 4px;'>
                                                " . nl2br(htmlspecialchars($userMessage)) . "
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style='background-color: #F8F8F8; ' >
                                        <td align='center' style='padding: 20px;text-align: center; font-size: 12px; '>

                                            <p>
                                                Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                                You are receiving this email because you registered on our mobile app.
                                            </p>

                                            <p>
                                                Our mailing address is: <br>
                                                " . getenv('APP') . " <br>
                                                123 Maple Street <br>
                                                Toronto, OT M5A 1A1, Canada
                                            </p>

                                            <table
                                            align='center'
                                            cellpadding='0'
                                            cellspacing='0'
                                            border='0'
                                            style='margin: 0 auto'
                                            >
                                            <tr>
                                                <td style='padding: 5px'>
                                                    <a
                                                        href='" . getenv('FACEBOOK') . "'
                                                        style='text-decoration: none'
                                                    >
                                                        <img
                                                        src='" . BASEURL . "/img/icons/linkedin.png'
                                                        alt='linkedin'
                                                        style='width: 20px; height: 20px'
                                                        />
                                                    </a>
                                                    </td>
                                                <td style='padding: 5px'>
                                                <a
                                                    href='" . getenv('X') . "'
                                                    style='text-decoration: none'
                                                >
                                                    <img
                                                    src='" . BASEURL . "/img/icons/x.png'
                                                    alt='Facebook'
                                                    style='width: 20px; height: 20px'
                                                    />
                                                </a>
                                                </td>
                                                <td style='padding: 5px'>
                                                <a
                                                    href='" . getenv('INSTAGRAM') . "'
                                                    style='text-decoration: none'
                                                >
                                                    <img
                                                    src='" . BASEURL . "/img/icons/linkedin.png'
                                                    alt='Twitter'
                                                    style='width: 20px; height: 20px'
                                                    />
                                                </a>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                            </table>
                        </body>
                    </html>
        ";
    }

    public static function welcomeEmail()
    {
        return "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8' />
                <title>Welcome!</title>
                <link rel='preconnect' href='https://fonts.googleapis.com'>
                <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
            </head>
            <body style='font-family: Plus Jakarta Sans, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0;'>
                <table width='100%' bgcolor='#f6f6f6' cellpadding='0' cellspacing='0' border='0' style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'>
                    <tr>
                        <td>
                            <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; background-color: #ffffff; margin: 20px auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                                <tr>
                                    <td align='left' style='padding: 10px 20px; background-color: #fff;'>
                                        <img src='" . BASEURL . "/img/icons/icon.png' alt='[Your Website] Logo' />
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 20px; color: #333333;'>
                                        <h1 style='color: #333333; text-align: center; font-size: 24px;'>Welcome to " . getenv('APP') . "!</h1>
                                        <p style='text-align: center;'>We're thrilled to have you on board. Explore our features and enjoy the best experience we offer!</p>
                                    </td>
                                </tr>
                    <tr style='background-color: #F8F8F8; ' >
                        <td align='center' style='padding: 20px;text-align: center; font-size: 12px; '>

                            <p>
                                Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                You are receiving this email because you registered on our mobile app.
                            </p>

                            <p>
                                Our mailing address is: <br>
                                " . getenv('APP') . " <br>
                                123 Maple Street <br>
                                Toronto, OT M5A 1A1, Canada
                            </p>

                            <table
                            align='center'
                            cellpadding='0'
                            cellspacing='0'
                            border='0'
                            style='margin: 0 auto'
                            >
                            <tr>
                                <td style='padding: 5px'>
                                    <a
                                        href='" . getenv('FACEBOOK') . "'
                                        style='text-decoration: none'
                                    >
                                        <img
                                        src='" . BASEURL . "/img/icons/linkedin.png'
                                        alt='linkedin'
                                        style='width: 20px; height: 20px'
                                        />
                                    </a>
                                    </td>
                                <td style='padding: 5px'>
                                <a
                                    href='" . getenv('X') . "'
                                    style='text-decoration: none'
                                >
                                    <img
                                    src='" . BASEURL . "/img/icons/x.png'
                                    alt='Facebook'
                                    style='width: 20px; height: 20px'
                                    />
                                </a>
                                </td>
                                <td style='padding: 5px'>
                                <a
                                    href='" . getenv('INSTAGRAM') . "'
                                    style='text-decoration: none'
                                >
                                    <img
                                    src='" . BASEURL . "/img/icons/linkedin.png'
                                    alt='Twitter'
                                    style='width: 20px; height: 20px'
                                    />
                                </a>
                                </td>
                            </tr>
                            </table>
                        </td>
                    </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </body>
            </html>
        ";
    }

    public static function accountRestrictionEmail()
    {
        $restrictedHours = getenv('RESTRICTED_HOURS');
        $maxFailedAttempts = getenv('MAX_FAILED_LOGIN');
        return "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8' />
                <title>Account Restricted</title>
                <link rel='preconnect' href='https://fonts.googleapis.com'>
                <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
            </head>
            <body style='font-family: Plus Jakarta Sans, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0;'>
                <table width='100%' bgcolor='#f6f6f6' cellpadding='0' cellspacing='0' border='0' style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'>
                    <tr>
                        <td>
                            <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; background-color: #ffffff; margin: 20px auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                                <tr>
                                    <td align='left' style='padding: 10px 20px; background-color: #fff;'>
                                        <img src='" . BASEURL . "/img/icons/icon.png' alt='[Your Website] Logo' />
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 20px; color: #333333;'>
                                        <h1 style='color: #333333; text-align: center; font-size: 24px;'>Account Restricted</h1>
                                        <p style='text-align: center;'>Your account has been temporarily restricted due to $maxFailedAttempts failed login attempts. You can try again in $restrictedHours hour(s).</p>
                                        <p style='text-align: center;'>If you need assistance, please contact our support team.</p>
                                    </td>
                                </tr>
                    <tr style='background-color: #F8F8F8; ' >
                            <td align='center' style='padding: 20px;text-align: center; font-size: 12px; '>

                                <p>
                                    Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                    You are receiving this email because you registered on our mobile app.
                                </p>

                                <p>
                                    Our mailing address is: <br>
                                    " . getenv('APP') . " <br>
                                    123 Maple Street <br>
                                    Toronto, OT M5A 1A1, Canada
                                </p>

                                <table
                                align='center'
                                cellpadding='0'
                                cellspacing='0'
                                border='0'
                                style='margin: 0 auto'
                                >
                                <tr>
                                    <td style='padding: 5px'>
                                        <a
                                            href='" . getenv('FACEBOOK') . "'
                                            style='text-decoration: none'
                                        >
                                            <img
                                            src='" . BASEURL . "/img/icons/linkedin.png'
                                            alt='linkedin'
                                            style='width: 20px; height: 20px'
                                            />
                                        </a>
                                        </td>
                                    <td style='padding: 5px'>
                                    <a
                                        href='" . getenv('X') . "'
                                        style='text-decoration: none'
                                    >
                                        <img
                                        src='" . BASEURL . "/img/icons/x.png'
                                        alt='Facebook'
                                        style='width: 20px; height: 20px'
                                        />
                                    </a>
                                    </td>
                                    <td style='padding: 5px'>
                                    <a
                                        href='" . getenv('INSTAGRAM') . "'
                                        style='text-decoration: none'
                                    >
                                        <img
                                        src='" . BASEURL . "/img/icons/linkedin.png'
                                        alt='Twitter'
                                        style='width: 20px; height: 20px'
                                        />
                                    </a>
                                    </td>
                                </tr>
                                </table>
                            </td>
                        </tr>
                            </table>
                        </td>
                    </tr>
                   
                </table>
            </body>
            </html>
        ";
    }

    public static function notifyPasswordChange()
    {
        return "
                <!DOCTYPE html>
                    <html lang='en'>
                        <head>
                            <meta charset='UTF-8' />
                            <title>Password Changed Successfully</title>
                            <link rel='preconnect' href='https://fonts.googleapis.com'>
                            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                            <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
                        </head>
                        <body
                            style='
                            font-family: Plus Jakarta Sans, sans-serif;
                            background-color: #f6f6f6;
                            margin: 0;
                            padding: 0;
                            '
                            >
                            <table
                            width='100%'
                            bgcolor='#f6f6f6'
                            cellpadding='0'
                            cellspacing='0'
                            border='0'
                            style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'
                            >
                            <tr>
                                <td>
                                <table
                                    align='center'
                                    cellpadding='0'
                                    cellspacing='0'
                                    border='0'
                                    width='100%'
                                    style='
                                    max-width: 600px;
                                    background-color: #ffffff;
                                    margin: 20px auto;
                                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                    '
                                >
                                    <tr>
                                        <td
                                            align='left'
                                            style='padding: 10px 30px; background-color: #fff;'
                                        >
                                            <img
                                            src='" . BASEURL . "/img/icons/icon.png'
                                            alt='[Your Website] Logo'
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 2px 30px; color: #333333'>
                                            <p style='margin-bottom: 14px;' >Hi,</p>

                                            <p >
                                                This is to confirm that your password has been successfully changed.
                                            </p>
                                            <p style='font-weight: 700;margin-bottom: 0;'>
                                                If you did not request a password change, please contact our support team immediately to secure your account.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr style='background-color: #F8F8F8; ' >
                                        <td align='center' style='padding: 20px;text-align: center; font-size: 12px; '>

                                            <p>
                                                Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                                You are receiving this email because you registered on our mobile app.
                                            </p>

                                            <p>
                                                Our mailing address is: <br>
                                                " . getenv('APP') . " <br>
                                                123 Maple Street <br>
                                                Toronto, OT M5A 1A1, Canada
                                            </p>

                                            <table
                                            align='center'
                                            cellpadding='0'
                                            cellspacing='0'
                                            border='0'
                                            style='margin: 0 auto'
                                            >
                                            <tr>
                                                <td style='padding: 5px'>
                                                    <a
                                                        href='" . getenv('FACEBOOK') . "'
                                                        style='text-decoration: none'
                                                    >
                                                        <img
                                                        src='" . BASEURL . "/img/icons/linkedin.png'
                                                        alt='linkedin'
                                                        style='width: 20px; height: 20px'
                                                        />
                                                    </a>
                                                    </td>
                                                <td style='padding: 5px'>
                                                <a
                                                    href='" . getenv('X') . "'
                                                    style='text-decoration: none'
                                                >
                                                    <img
                                                    src='" . BASEURL . "/img/icons/x.png'
                                                    alt='Facebook'
                                                    style='width: 20px; height: 20px'
                                                    />
                                                </a>
                                                </td>
                                                <td style='padding: 5px'>
                                                <a
                                                    href='" . getenv('INSTAGRAM') . "'
                                                    style='text-decoration: none'
                                                >
                                                    <img
                                                    src='" . BASEURL . "/img/icons/linkedin.png'
                                                    alt='Twitter'
                                                    style='width: 20px; height: 20px'
                                                    />
                                                </a>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                            </table>
                        </body>
                    </html>
        ";
    }



    public static function kycVerifiedEmail()
    {
        return "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8' />
                <title>KYC Verified!</title>
                <link rel='preconnect' href='https://fonts.googleapis.com'>
                <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
            </head>
            <body style='font-family: Plus Jakarta Sans, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0;'>
                <table width='100%' bgcolor='#f6f6f6' cellpadding='0' cellspacing='0' border='0' style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'>
                    <tr>
                        <td>
                            <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; background-color: #ffffff; margin: 20px auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                                <tr>
                                    <td align='left' style='padding: 10px 20px; background-color: #fff;'>
                                        <img src='" . BASEURL . "/img/icons/icon.png' alt='[Your Website] Logo' />
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 20px; color: #333333;'>
                                        <h1 style='color: #333333; text-align: center; font-size: 24px;'>KYC Verified!</h1>
                                        <p style='text-align: center;'>Congratulations! Your KYC verification has been successfully completed. You can now enjoy full access to our services.</p>
                                    </td>
                                </tr>
                    <tr style='background-color: #F8F8F8; ' >
                        <td align='center' style='padding: 20px;text-align: center; font-size: 12px; '>

                            <p>
                                Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                You are receiving this email because you registered on our mobile app.
                            </p>

                            <p>
                                Our mailing address is: <br>
                                " . getenv('APP') . " <br>
                                123 Maple Street <br>
                                Toronto, OT M5A 1A1, Canada
                            </p>

                            <table
                            align='center'
                            cellpadding='0'
                            cellspacing='0'
                            border='0'
                            style='margin: 0 auto'
                            >
                            <tr>
                                <td style='padding: 5px'>
                                    <a
                                        href='" . getenv('FACEBOOK') . "'
                                        style='text-decoration: none'
                                    >
                                        <img
                                        src='" . BASEURL . "/img/icons/linkedin.png'
                                        alt='linkedin'
                                        style='width: 20px; height: 20px'
                                        />
                                    </a>
                                    </td>
                                <td style='padding: 5px'>
                                <a
                                    href='" . getenv('X') . "'
                                    style='text-decoration: none'
                                >
                                    <img
                                    src='" . BASEURL . "/img/icons/x.png'
                                    alt='Facebook'
                                    style='width: 20px; height: 20px'
                                    />
                                </a>
                                </td>
                                <td style='padding: 5px'>
                                <a
                                    href='" . getenv('INSTAGRAM') . "'
                                    style='text-decoration: none'
                                >
                                    <img
                                    src='" . BASEURL . "/img/icons/linkedin.png'
                                    alt='Twitter'
                                    style='width: 20px; height: 20px'
                                    />
                                </a>
                                </td>
                            </tr>
                            </table>
                        </td>
                    </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </body>
            </html>
        ";
    }

    public static function kycReminderEmail()
    {
        return "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8' />
                <title>KYC Reminder</title>
                <link rel='preconnect' href='https://fonts.googleapis.com'>
                <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
            </head>
            <body style='font-family: Plus Jakarta Sans, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0;'>
                <table width='100%' bgcolor='#f6f6f6' cellpadding='0' cellspacing='0' border='0' style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'>
                    <tr>
                        <td>
                            <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; background-color: #ffffff; margin: 20px auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                                <tr>
                                    <td align='left' style='padding: 10px 20px; background-color: #fff;'>
                                        <img src='" . BASEURL . "/img/icons/icon.png' alt='[Your Website] Logo' />
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 20px; color: #333333;'>
                                        <h1 style='color: #333333; text-align: center; font-size: 24px;'>KYC Reminder</h1>
                                        <p style='text-align: center;'>Dear User,</p>
                                        <p style='text-align: center;'>This is a friendly reminder to complete your KYC verification to enjoy full access to our services.</p>
                                        <p style='text-align: center;'>Please log in to your account and complete the KYC process at your earliest convenience.</p>
                                    </td>
                                </tr>
                    <tr style='background-color: #F8F8F8; ' >
                        <td align='center' style='padding: 20px;text-align: center; font-size: 12px; '>

                            <p>
                                Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                You are receiving this email because you registered on our mobile app.
                            </p>

                            <p>
                                Our mailing address is: <br>
                                " . getenv('APP') . " <br>
                                123 Maple Street <br>
                                Toronto, OT M5A 1A1, Canada
                            </p>

                            <table
                            align='center'
                            cellpadding='0'
                            cellspacing='0'
                            border='0'
                            style='margin: 0 auto'
                            >
                            <tr>
                                <td style='padding: 5px'>
                                    <a
                                        href='" . getenv('FACEBOOK') . "'
                                        style='text-decoration: none'
                                    >
                                        <img
                                        src='" . BASEURL . "/img/icons/linkedin.png'
                                        alt='linkedin'
                                        style='width: 20px; height: 20px'
                                        />
                                    </a>
                                    </td>
                                <td style='padding: 5px'>
                                <a
                                    href='" . getenv('X') . "'
                                    style='text-decoration: none'
                                >
                                    <img
                                    src='" . BASEURL . "/img/icons/x.png'
                                    alt='Facebook'
                                    style='width: 20px; height: 20px'
                                    />
                                </a>
                                </td>
                                <td style='padding: 5px'>
                                <a
                                    href='" . getenv('INSTAGRAM') . "'
                                    style='text-decoration: none'
                                >
                                    <img
                                    src='" . BASEURL . "/img/icons/linkedin.png'
                                    alt='Twitter'
                                    style='width: 20px; height: 20px'
                                    />
                                </a>
                                </td>
                            </tr>
                            </table>
                        </td>
                    </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </body>
            </html>
        ";
    }

    public static function resetPinEmail($code)
    {
        return "
                 <!DOCTYPE html>
                    <html lang='en'>
                        <head>
                            <meta charset='UTF-8' />
                            <title>Verify Email</title>
                            <link rel='preconnect' href='https://fonts.googleapis.com'>
                            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                            <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
                        </head>
                        <body
                            style='
                            font-family: Plus Jakarta Sans, sans-serif;
                            background-color: #f6f6f6;
                            margin: 0;
                            padding: 0;
                            '
                            >
                            <table
                            width='100%'
                            bgcolor='#f6f6f6'
                            cellpadding='0'
                            cellspacing='0'
                            border='0'
                            style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'
                            >
                            <tr>
                                <td>
                                <table
                                    align='center'
                                    cellpadding='0'
                                    cellspacing='0'
                                    border='0'
                                    width='100%'
                                    style='
                                    max-width: 600px;
                                    background-color: #ffffff;
                                    margin: 20px auto;
                                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                    '
                                >
                                    <tr>
                                        <td
                                            align='left'
                                            style='padding: 10px 30px; background-color: #fff;'
                                        >
                                            <img
                                            src='" . BASEURL . "/img/icons/icon.png'
                                            alt='[Your Website] Logo'
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 2px 30px; color: #333333'>
                                            <p style='margin-bottom: 14px;' >Hi</p>

                                            <p >
                                                We received a request to change the pin to your Pharste account.
                                            </p>
                                            <p style='font-weight: 700;margin-bottom: 0;' >Use the code below to proceed with your pin reset, This code will expire 10 minutes.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align='center' style='height: 95px;' >
                                            <a
                                            style='
                                                text-decoration: none;
                                                padding: 12px 36px;
                                                background-color: #2D35E9;
                                                color: white;
                                                border-radius: 28px;
                                                letter-spacing: 5px;
                                            '
                                            >" . $code . "</a
                                            >
                                        </td>
                                    </tr>
                                    
                                    <tr style='background-color: #F8F8F8; ' >
                                        <td align='center' style='padding: 20px;text-align: center; font-size: 12px; '>

                                            <p>
                                                Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                                You are receiving this email because you registered on our mobile app.
                                            </p>

                                            <p>
                                                Our mailing address is: <br>
                                                " . getenv('APP') . " <br>
                                                123 Maple Street <br>
                                                Toronto, OT M5A 1A1, Canada
                                            </p>
                                            

                                            <table
                                            align='center'
                                            cellpadding='0'
                                            cellspacing='0'
                                            border='0'
                                            style='margin: 0 auto'
                                            >
                                            <tr>
                                                <td style='padding: 5px'>
                                                    <a
                                                        href='" . getenv('FACEBOOK') . "'
                                                        style='text-decoration: none'
                                                    >
                                                        <img
                                                        src='" . BASEURL . "/img/icons/linkedin.png'
                                                        alt='linkedin'
                                                        style='width: 20px; height: 20px'
                                                        />
                                                    </a>
                                                    </td>
                                                <td style='padding: 5px'>
                                                <a
                                                    href='" . getenv('X') . "'
                                                    style='text-decoration: none'
                                                >
                                                    <img
                                                    src='" . BASEURL . "/img/icons/x.png'
                                                    alt='Facebook'
                                                    style='width: 20px; height: 20px'
                                                    />
                                                </a>
                                                </td>
                                                <td style='padding: 5px'>
                                                <a
                                                    href='" . getenv('INSTAGRAM') . "'
                                                    style='text-decoration: none'
                                                >
                                                    <img
                                                    src='" . BASEURL . "/img/icons/linkedin.png'
                                                    alt='Twitter'
                                                    style='width: 20px; height: 20px'
                                                    />
                                                </a>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                            </table>
                        </body>
                    </html>
        ";

    }

    public static function pinResetSuccessEmail()
    {
        return "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8' />
            <title>Pin Reset Successful</title>
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
        </head>
        <body style='font-family: Plus Jakarta Sans, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0;'>
            <table width='100%' bgcolor='#f6f6f6' cellpadding='0' cellspacing='0' border='0' style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'>
                <tr>
                    <td>
                        <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; background-color: #ffffff; margin: 20px auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                            <tr>
                                <td align='left' style='padding: 10px 30px; background-color: #fff;'>
                                    <img src='" . BASEURL . "/img/icons/icon.png' alt='[Your Website] Logo' />
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 20px; color: #333333;'>
                                    <p style='margin-bottom: 14px;'>Hi,</p>
                                    <p>Your transaction pin has been reset successfully.</p>
                                    <p>If you did not request this change, please contact our support team immediately to secure your account.</p>
                                </td>
                            </tr>
                            <tr style='background-color: #F8F8F8;'>
                                <td align='center' style='padding: 20px; text-align: center; font-size: 12px;'>
                                    <p>
                                        Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                        You are receiving this email because you registered on our mobile app.
                                    </p>
                                    <p>
                                        Our mailing address is: <br>
                                        " . getenv('APP') . " <br>
                                        123 Maple Street <br>
                                        Toronto, OT M5A 1A1, Canada
                                    </p>
                                    <table align='center' cellpadding='0' cellspacing='0' border='0' style='margin: 0 auto'>
                                        <tr>
                                            <td style='padding: 5px'>
                                                <a href='" . getenv('FACEBOOK') . "' style='text-decoration: none'>
                                                    <img src='" . BASEURL . "/img/icons/linkedin.png' alt='linkedin' style='width: 20px; height: 20px' />
                                                </a>
                                            </td>
                                            <td style='padding: 5px'>
                                                <a href='" . getenv('X') . "' style='text-decoration: none'>
                                                    <img src='" . BASEURL . "/img/icons/x.png' alt='Facebook' style='width: 20px; height: 20px' />
                                                </a>
                                            </td>
                                            <td style='padding: 5px'>
                                                <a href='" . getenv('INSTAGRAM') . "' style='text-decoration: none'>
                                                    <img src='" . BASEURL . "/img/icons/linkedin.png' alt='Twitter' style='width: 20px; height: 20px' />
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>
    ";
    }


    public static function walletDebitedEmail($amount, $currency)
    {
        return "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8' />
            <title>Wallet Debited</title>
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
        </head>
        <body style='font-family: Plus Jakarta Sans, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0;'>
            <table width='100%' bgcolor='#f6f6f6' cellpadding='0' cellspacing='0' border='0' style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'>
                <tr>
                    <td>
                        <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; background-color: #ffffff; margin: 20px auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                            <tr>
                                <td align='left' style='padding: 10px 30px; background-color: #fff;'>
                                    <img src='" . BASEURL . "/img/icons/icon.png' alt='[Your Website] Logo' />
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 20px; color: #333333;'>
                                    <p style='margin-bottom: 14px;'>Hi,</p>
                                    <p>Your wallet has been debited with <strong>$amount $currency</strong>.</p>
                                    <p>If you did not authorize this transaction, please contact our support team immediately.</p>
                                </td>
                            </tr>
                            <tr style='background-color: #F8F8F8;'>
                                <td align='center' style='padding: 20px; text-align: center; font-size: 12px;'>
                                    <p>
                                        Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                        You are receiving this email because you registered on our mobile app.
                                    </p>
                                    <p>
                                        Our mailing address is: <br>
                                        " . getenv('APP') . " <br>
                                        123 Maple Street <br>
                                        Toronto, OT M5A 1A1, Canada
                                    </p>
                                    <table align='center' cellpadding='0' cellspacing='0' border='0' style='margin: 0 auto'>
                                        <tr>
                                            <td style='padding: 5px'>
                                                <a href='" . getenv('FACEBOOK') . "' style='text-decoration: none'>
                                                    <img src='" . BASEURL . "/img/icons/linkedin.png' alt='linkedin' style='width: 20px; height: 20px' />
                                                </a>
                                            </td>
                                            <td style='padding: 5px'>
                                                <a href='" . getenv('X') . "' style='text-decoration: none'>
                                                    <img src='" . BASEURL . "/img/icons/x.png' alt='Facebook' style='width: 20px; height: 20px' />
                                                </a>
                                            </td>
                                            <td style='padding: 5px'>
                                                <a href='" . getenv('INSTAGRAM') . "' style='text-decoration: none'>
                                                    <img src='" . BASEURL . "/img/icons/linkedin.png' alt='Twitter' style='width: 20px; height: 20px' />
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>
    ";
    }


    public static function walletCreditedEmail($amount, $currency)
    {
        return "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8' />
                <title>Wallet Credited</title>
                <link rel='preconnect' href='https://fonts.googleapis.com'>
                <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
            </head>
            <body style='font-family: Plus Jakarta Sans, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0;'>
                <table width='100%' bgcolor='#f6f6f6' cellpadding='0' cellspacing='0' border='0' style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'>
                    <tr>
                        <td>
                            <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; background-color: #ffffff; margin: 20px auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                                <tr>
                                    <td align='left' style='padding: 10px 30px; background-color: #fff;'>
                                        <img src='" . BASEURL . "/img/icons/icon.png' alt='[Your Website] Logo' />
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 20px; color: #333333;'>
                                        <p style='margin-bottom: 14px;'>Hi,</p>
                                        <p>Your wallet has been credited with <strong>$amount $currency</strong>.</p>
                                        <p>Thank you for using our services.</p>
                                    </td>
                                </tr>
                                <tr style='background-color: #F8F8F8;'>
                                    <td align='center' style='padding: 20px; text-align: center; font-size: 12px;'>
                                        <p>
                                            Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                            You are receiving this email because you registered on our mobile app.
                                        </p>
                                        <p>
                                            Our mailing address is: <br>
                                            " . getenv('APP') . " <br>
                                            123 Maple Street <br>
                                            Toronto, OT M5A 1A1, Canada
                                        </p>
                                        <table align='center' cellpadding='0' cellspacing='0' border='0' style='margin: 0 auto'>
                                            <tr>
                                                <td style='padding: 5px'>
                                                    <a href='" . getenv('FACEBOOK') . "' style='text-decoration: none'>
                                                        <img src='" . BASEURL . "/img/icons/linkedin.png' alt='linkedin' style='width: 20px; height: 20px' />
                                                    </a>
                                                </td>
                                                <td style='padding: 5px'>
                                                    <a href='" . getenv('X') . "' style='text-decoration: none'>
                                                        <img src='" . BASEURL . "/img/icons/x.png' alt='Facebook' style='width: 20px; height: 20px' />
                                                    </a>
                                                </td>
                                                <td style='padding: 5px'>
                                                    <a href='" . getenv('INSTAGRAM') . "' style='text-decoration: none'>
                                                        <img src='" . BASEURL . "/img/icons/linkedin.png' alt='Twitter' style='width: 20px; height: 20px' />
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </body>
            </html>
        ";
    }


    public static function adminResetPasswordEmail($code)
    {
        return "
        <!DOCTYPE html>
        <html lang='en'>
            <head>
                <meta charset='UTF-8' />
                <title>Admin Password Reset</title>
                <link rel='preconnect' href='https://fonts.googleapis.com'>
                <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap' rel='stylesheet'>
            </head>
            <body
                style='
                font-family: Plus Jakarta Sans, sans-serif;
                background-color: #f6f6f6;
                margin: 0;
                padding: 0;
                '
            >
                <table
                    width='100%'
                    bgcolor='#f6f6f6'
                    cellpadding='0'
                    cellspacing='0'
                    border='0'
                    style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'
                >
                    <tr>
                        <td>
                            <table
                                align='center'
                                cellpadding='0'
                                cellspacing='0'
                                border='0'
                                width='100%'
                                style='
                                max-width: 600px;
                                background-color: #ffffff;
                                margin: 20px auto;
                                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                '
                            >
                                <tr>
                                    <td
                                        align='left'
                                        style='padding: 10px 30px; background-color: #fff;'
                                    >
                                        <img
                                            src='" . BASEURL . "/img/icons/icon.png'
                                            alt='[Your Website] Logo'
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 2px 30px; color: #333333'>
                                        <p style='margin-bottom: 14px;'>Hello Admin,</p>

                                        <p>
                                            We received a request to reset the password for your admin account on Pharste. 
                                        </p>
                                        <p style='font-weight: 700; margin-bottom: 0;'>
                                            Use the code below to proceed with your password reset. This code will expire in 10 minutes.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align='center' style='height: 95px;'>
                                        <a
                                            style='
                                                text-decoration: none;
                                                padding: 12px 36px;
                                                background-color: #2D35E9;
                                                color: white;
                                                border-radius: 28px;
                                                letter-spacing: 5px;
                                            '
                                        >" . $code . "</a>
                                    </td>
                                </tr>
                                <tr style='background-color: #F8F8F8;'>
                                    <td align='center' style='padding: 20px; text-align: center; font-size: 12px;'>
                                        <p>
                                            Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved. <br>
                                            You are receiving this email because you are registered as an admin on our platform.
                                        </p>

                                        <p>
                                            Our mailing address is: <br>
                                            " . getenv('APP') . " <br>
                                            123 Maple Street <br>
                                            Toronto, OT M5A 1A1, Canada
                                        </p>

                                        <table
                                            align='center'
                                            cellpadding='0'
                                            cellspacing='0'
                                            border='0'
                                            style='margin: 0 auto'
                                        >
                                            <tr>
                                                <td style='padding: 5px'>
                                                    <a
                                                        href='" . getenv('FACEBOOK') . "'
                                                        style='text-decoration: none'
                                                    >
                                                        <img
                                                            src='" . BASEURL . "/img/icons/linkedin.png'
                                                            alt='linkedin'
                                                            style='width: 20px; height: 20px'
                                                        />
                                                    </a>
                                                </td>
                                                <td style='padding: 5px'>
                                                    <a
                                                        href='" . getenv('X') . "'
                                                        style='text-decoration: none'
                                                    >
                                                        <img
                                                            src='" . BASEURL . "/img/icons/x.png'
                                                            alt='Facebook'
                                                            style='width: 20px; height: 20px'
                                                        />
                                                    </a>
                                                </td>
                                                <td style='padding: 5px'>
                                                    <a
                                                        href='" . getenv('INSTAGRAM') . "'
                                                        style='text-decoration: none'
                                                    >
                                                        <img
                                                            src='" . BASEURL . "/img/icons/linkedin.png'
                                                            alt='Twitter'
                                                            style='width: 20px; height: 20px'
                                                        />
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </body>
        </html>
    ";
    }

    public static function buyerPaymentInitiatedEmail($amount, $currency)
    {
        return "
    <!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset='UTF-8' />
            <title>Payment Initiated</title>
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap' rel='stylesheet'>
        </head>
        <body style='font-family: Plus Jakarta Sans, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0;'>
            <table width='100%' bgcolor='#f6f6f6' cellpadding='0' cellspacing='0' border='0' style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'>
                <tr>
                    <td>
                        <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; background-color: #ffffff; margin: 20px auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                            <tr>
                                <td align='left' style='padding: 10px 30px; background-color: #fff;'>
                                    <img src='" . BASEURL . "/img/icons/icon.png' alt='[Your Website] Logo' />
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 2px 30px; color: #333333'>
                                    <p>Hello,</p>
                                    <p>Your payment of <strong>$amount $currency</strong> has been initiated successfully.</p>
                                </td>
                            </tr>
                            <tr style='background-color: #F8F8F8;'>
                                <td align='center' style='padding: 20px; text-align: center; font-size: 12px;'>
                                    <p>Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
    </html>
    ";
    }

    public static function buyerPaymentConfirmedEmail($amount, $currency)
    {
        return str_replace('initiated', 'confirmed', self::buyerPaymentInitiatedEmail($amount, $currency));
    }

    public static function buyerFundsReleasedEmail($amount, $currency)
    {
        return str_replace('initiated successfully', 'released and deposited into your wallet', self::buyerPaymentInitiatedEmail($amount, $currency));
    }

    public static function sellerAdCompletedEmail($amount, $currency)
    {
        return "
    <!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset='UTF-8' />
            <title>P2P Ad Completed</title>
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            <link href='https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap' rel='stylesheet'>
        </head>
        <body style='font-family: Plus Jakarta Sans, sans-serif; background-color: #f6f6f6; margin: 0; padding: 0;'>
            <table width='100%' bgcolor='#f6f6f6' cellpadding='0' cellspacing='0' border='0' style='width: 100%; background-color: #f6f6f6; margin: 0; padding: 0'>
                <tr>
                    <td>
                        <table align='center' cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; background-color: #ffffff; margin: 20px auto; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                            <tr>
                                <td align='left' style='padding: 10px 30px; background-color: #fff;'>
                                    <img src='" . BASEURL . "/img/icons/icon.png' alt='[Your Website] Logo' />
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 2px 30px; color: #333333'>
                                    <p>Hello,</p>
                                    <p>Your P2P ad for <strong>$amount $currency</strong> has been successfully completed. Your ad is now closed.</p>
                                </td>
                            </tr>
                            <tr style='background-color: #F8F8F8;'>
                                <td align='center' style='padding: 20px; text-align: center; font-size: 12px;'>
                                    <p>Copyright &copy; " . date('Y') . ' ' . getenv('APP') . ", All rights reserved.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
    </html>
    ";
    }







}