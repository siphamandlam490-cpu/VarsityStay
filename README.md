# VarsityStay

VarsityStay is a Web Development 3.2 group project for a student accommodation website. It helps students browse accommodation, compare room options, submit booking enquiries, and contact VarsityStay for assistance.

## Main Features

- Home page with featured accommodation
- About page
- Accommodation listings
- Single-room and sharing-room filtering
- Booking enquiry form
- Contact form
- Responsive navigation
- Shared header and footer
- PHP form processing
- JavaScript functionality
- Responsive layout for desktop, tablet, and mobile

## Technologies Used

- HTML5
- CSS3
- JavaScript
- PHP
- XAMPP / Apache
- Git and GitHub

## Project Structure

```text
VarsityStay/
│
├── css/
│   └── style.css
│
├── images/
│
├── includes/
│   ├── header.php
│   └── footer.php
│
├── js/
│   └── script.js
│
├── about.php
├── accommodation.php
├── booking.php
├── contact.php
└── index.php
```

## Setup Instructions

### 1. Install XAMPP

Install XAMPP in:

```text
C:\xampp
```

### 2. Install Git

Check Git with:

```powershell
git --version
```

### 3. Clone the Project

Open a terminal inside:

```text
C:\xampp\htdocs
```

Run:

```powershell
git clone https://github.com/siphamandlam490-cpu/VarsityStay.git
cd VarsityStay
```

### 4. Start Apache

Open XAMPP Control Panel and start Apache.

### 5. Open VarsityStay

Open:

```text
http://localhost/VarsityStay/
```

## GitHub Group Workflow

Before working:

```powershell
git checkout main
git pull origin main
```

Create a branch for your task:

```powershell
git checkout -b your-branch-name
```

After completing your work:

```powershell
git add .
git commit -m "Describe the changes"
git push -u origin your-branch-name
```

Create a Pull Request on GitHub and merge it into `main` after review.

After a teammate's work is merged:

```powershell
git checkout main
git pull origin main
```

## Important Group Rules

- Pull the latest `main` before starting work.
- Use separate branches for larger changes.
- Use clear commit messages.
- Test changes before pushing.
- Avoid editing the same file at the same time where possible.
- Do not upload the entire XAMPP folder.

## Useful Local URLs

```text
http://localhost/VarsityStay/index.php
http://localhost/VarsityStay/about.php
http://localhost/VarsityStay/accommodation.php
http://localhost/VarsityStay/contact.php
http://localhost/VarsityStay/booking.php
```

If CSS or JavaScript changes do not appear, refresh with:

```text
Ctrl + F5
```

## Responsive Testing

Test with browser Developer Tools at:

```text
Desktop: 1440px and 1024px
Tablet: 768px
Mobile: 430px, 390px and 360px
```

Check navigation, headings, images, cards, forms, tables, buttons, footer, text readability, and horizontal scrolling.

## Optional Database Expansion

If the project is expanded later, MySQL/MariaDB can be used through XAMPP to store:

- Accommodation listings
- Booking enquiries
- Contact enquiries
- Availability information

A database is optional and should only be added after the required Web Development 3.2 functionality is stable.

## Contributors

Add the names and student numbers of all VarsityStay group members here before final submission.

## Academic Project

Developed for Web Development 3.2.
