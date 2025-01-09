
# 📧 Email Contact Form

A simple, responsive contact form built with PHP and Bootstrap 5.3, enabling users to send messages directly to your email.

## ✨ Features

- **Responsive Design**: Seamless user experience across devices.
- **Email Integration**: Messages sent directly to your specified email address.
- **Validation**: Ensures all form inputs are correctly filled before submission.

## 🛠️ Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Spiatron/Email_Contact_Form-PHP.git
   ```

2. **Configure PHP Settings**:
   - Replace the existing `php.ini` file in `C:\xampp\php` with the one provided in the `configurationFiles` folder.
   - Replace the existing `sendmail.ini` file in `C:\xampp\sendmail` with the one provided in the `configurationFiles` folder.

3. **Start Apache Server**:
   - Open XAMPP Control Panel.
   - Start the Apache server.

4. **Access the Application**:
   - Navigate to `http://localhost/EmailContactForm` in your web browser.

## 📂 File Structure

```plaintext
EmailContactForm/
├── configurationFiles/
│   ├── php.ini
│   └── sendmail.ini
├── public/
│   ├── index.php
│   └── assets/
├── src/
│   ├── contact_form.php
│   └── email_handler.php
├── EmailContactForm_Documentation.pdf
├── EmailContactForm_Readme.txt
└── EmailContactForm_demo.mp4
```

## 📋 Usage

- Navigate to the contact form page.
- Fill in the required fields: Name, Email, Subject, and Message.
- Click 'Submit' to send the message.
