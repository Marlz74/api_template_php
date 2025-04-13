# API Backend Setup Guide

This guide explains how to set up the API backend on a server, including the required folder structure, database configuration, and cron jobs.

## Prerequisites

1. A web server (e.g., Apache or Nginx).
2. PHP 7.4 or higher.
3. Composer (for dependency management).
4. MySQL or MariaDB for the database.
5. Access to set up cron jobs on the server.

## Folder Structure

Ensure the following folder structure is in place:

```
composer.json
composer.lock
config/
controller/
cron.php
daily-cron.php
doc/
img/
index.php
libraries/
model/
readme.md
test.jpg
test2.jpg
vendor/
vission-api.json
```

## Setup Instructions

### Step 1: Clone the Repository

Clone the project repository to your server:
```bash
git clone https://github.com/CodeRigi/transmitex-backend.git
```

### Step 2: Install Dependencies

Run Composer to install the required dependencies:
```bash
composer install
```

### Step 3: Database Setup

1. Locate the database file stored in the `config` directory (e.g., `config/transmitex.sql`).
2. Import the database file into your MySQL database:
   ```bash
   mysql -u <username> -p <database_name> < config/database.sql
   ```
3. Update the configuration in `.env`:
   ```
APP=Pharste
DB_HOST=localhost
DB_USER=root
DB_PASS=1
DB_NAME=transmitex
JWTKEY=xfxfxfxfxfxfxfxfxfxf
EN_KEY=xfxfxfxfxfxfxfxfxfxf
JWTEXP=24
JWTEXP_REFRESH=48
MAIL_SENDER=xxxxxxxxx
CODE_LENGTH=6
EXCHANGE_RATE_KEY=xxxxxxxxxxxx
SMILEID_PARTNER_ID=xxxxxxxxxx
SMILEID_KEY=xxxxxxxxxxxxxxxxxxxxxxx
SMILEID_SERVER=0
SMILEID_CALLBACK=xxxxxxxxxxxxxxx
PAGA_PUBLIC_KEY=xxxxxxxxxxxxxx
PAGA_BASE_URL=xxxxxxxxx
PAGA_BUSINESS_BASE_URL=xxxxxxxxxx
PAGA_HMAC=xxxxxxxx
PAGA_CURRENCY=NGN
PAGA_CALLBACK_URL=xxxxxxxxxxxxxx
PAYMENT_DURATION=6
DB_TIMEZONE=Africa/Lagos
TRANSMITEX_EMAIL_HOST={imap.gmail.com:993/imap/ssl}
TRANSMITEX_EMAIL_USERNAME=xxxxxxxxxxxxxx
TRANSMITEX_EMAIL_PASSWORD=xxxxxxxxxxxxxx
APAYLO_KEY=xxxxxxxxxxxxxxxxxx
ADMIN_TIMEZONE=Africa/Lagos
FACEBOOK=xxxxxxxxxxx
x=xxxxxxxxxxx
INSTAGRAM=xxxxxxxx
SUPPORT_EMAIL=xxxxxxxx
MAX_FAILED_LOGIN=5
RESTRICTED_HOURS=5
FLAT_RATE=1.5
PROFIT=3
NAIRA_FEE=0.5
   ```


### Step 4: Set Up Cron Jobs

Add the following cron jobs to automate backend tasks. Open the crontab editor:
```bash
crontab -e
```
Add the following lines:
```bash
# Run auto-savings.php every hour
10 * * * * php -q /home/zahajqsw/api.coderigi.co/auto-savings.php

# Run cron.php every 5 minutes
*/5 * * * * php -q /home/zahajqsw/api.coderigi.co/cron.php

# Run daily-cron.php at midnight
0 0 * * * php -q /home/zahajqsw/api.coderigi.co/daily-cron.php
```
Save and exit.

### Step 5: Test the Setup

1. Verify that the API responds by accessing the base URL (e.g., `http://api.example.com`).
2. Ensure that cron jobs are running as expected by checking the server logs or debugging the script outputs.

## Notes

- Ensure sensitive data (e.g., API keys and database credentials) are not exposed publicly.
- Use HTTPS for secure communication.
- Periodically check and update dependencies with Composer:
  ```bash
  composer update
  ```

## Troubleshooting

- **500 Internal Server Error**: Check the server logs for detailed error messages.
- **Database Connection Issues**: Verify credentials in `config/config.php` and ensure the database service is running.

---
Your API backend is now ready and running!