# Company Projects

## Description

This Is My Project For Hsoub Academy

## Table of Contents

1. [Operating Requirements](#operating-requirements)
2. [Visitor Information](#visitor-information)
3. [Manager Information](#manager-information)
4. [Control Panel](#control-panel)

## Operating Requirements

### Editing Environment Variables

- Edit the app name and the URL values in the `.env` file:
    ```plaintext
    APP_NAME=YourProjectName
    APP_URL=WebsiteURL
    ```
- If working locally, modify these values:
    ```plaintext
    APP_ENV=local
    APP_DEBUG=true
    ```
- Set the URL to localhost:
    ```plaintext
    APP_URL=http://localhost:8000
    ```

### Database Configuration

- Create a database with the desired name (e.g., `company_projects`) and update the following values in the `.env` file:
    ```plaintext
    DB_CONNECTION=your_connection
    DB_HOST=your_database_host
    DB_PORT=your_database_port
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```
- If on localhost, use default values:
    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=company_projects
    DB_USERNAME=root
    DB_PASSWORD=
    ```

### Mail Configuration

- Update mail values in the `.env` file:
    ```plaintext
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=YOUR_USER_NAME
    MAIL_PASSWORD=YOUR_PASSWORD
    ```
- If on localhost, use these values:
    ```plaintext
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=YOUR_USER_NAME
    MAIL_PASSWORD=YOUR_PASSWORD
    ```

## Necessary Commands

Run the following commands to set up the project:

```
composer install # Install vendor and other important folders
php artisan migrate # Create tables in the database
php artisan db:seed # Seed testing data
npm install # Install JavaScript dependencies
npm run build # Build assets
php artisan serve # Start the project
```

## Visitor Information

- All the company's projects are displayed on the main page. You can enter any project to see its own page.
- Each project has an image, title, and text of the project.
- The site language can be changed to English or Arabic.
- Users can register on the site with the ability to view or change account information.

## The Admin Information

- Create an account using (register) link ,
  then if you want to make this account the admin of website
  be sure to set (admin) column value to (1) direct from database
- Manager's data (email/password) can be changed from the account page and dont set it direct from database.

### Control Panel

The manager can access the control panel, which contains the following sections:

1. **General Information**
   
2. **Projects**
   - The manager can see all the projects and enter one of them to be able to modify or delete the project.

3. **Subscribers**
   - The manager can send a message and specify the subject, title, and text of the message, in addition to the language and specify the recipient.
