# Dynamic Form Management System

## Overview
This project is a **Dynamic Form Management System** built using **Laravel**. It allows administrators to create and manage dynamic forms, while users can fill and submit them via a public link.

## Features

### Admin Side
- **User Authentication:** Laravel Breeze for secure login.
- **Manage Forms:** Create, edit, update, and delete dynamic forms.
- **Form Fields:** Supports text, textarea, radio buttons, checkboxes, dropdowns, and images.
- **Preview & Share:** Admins can preview and share form links.
- **View Submissions:** Admins can view submitted responses, filter them by users, and analyze the data.

### User Side
- **Fill Dynamic Forms:** Users can access and submit forms via a link.
- **Thank You Page:** A success message is displayed after submission.

## Project Structure
```
- resources/views
  ├── layouts
  │   ├── app.blade.php  # Main layout file
  ├── admin
  │   ├── forms
  │   │   ├── index.blade.php  # List of dynamic forms
  │   │   ├── create.blade.php # Create form page
  │   │   ├── edit.blade.php   # Edit form page
  ├── user
  │   ├── form.blade.php  # User form submission page
  │   ├── thankyou.blade.php  # Thank you page after form submission
  ├── welcome.blade.php  # Landing page
- routes/web.php  # Web routes
```

## How to Use

### 1. Admin Login
Visit:
```
http://127.0.0.1:8000/login
```
Use admin credentials:
- Email: `admin@benzatine.com`
- Password: `password`

### 2. Create a Dynamic Form
Navigate to:
```
http://127.0.0.1:8000/forms
```
Click on `Create New Form` and select field types (text, radio, checkbox, etc.).

### 3. Preview & Share Form
After creating a form, you can preview it and share the user submission link:
```
http://127.0.0.1:8000/user-form
```

### 4. User Submission
Users can fill in the form and submit responses.

### 5. View Responses
Admins can view all submitted responses under the **Form Answer Menu**.

## UI Design
- **Tailwind CSS** is used for a clean and modern interface.
- **Responsive Design** ensures a seamless experience on all devices.
- **Minimalistic Dashboard** for ease of form management.

## Demo Screenshots
(Add screenshots here if necessary)

## Future Enhancements
- Add **export functionality** for submissions.
- Enable **file uploads** in dynamic forms.
- Implement **form analytics** for better insights.

---
This project provides a **flexible and user-friendly** way to manage dynamic forms with **customizable fields** and an **intuitive UI**.

