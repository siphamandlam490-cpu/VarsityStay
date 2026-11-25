# VarsityStay

VarsityStay is a Web Development group project for a student accommodation website. It helps students browse accommodation, compare room options, submit booking enquiries, and contact VarsityStay for assistance.

Landlords can create an account, publish accommodation, update or remove their listings, and review booking requests submitted by students.

## Main Features

- Home page with featured accommodation
- About page
- Accommodation listings
- Single-room and sharing-room filtering
- Booking enquiry form
- Landlord account and dashboard for accommodation listings
- SQLite storage for listings and student booking requests
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
│   ├── footer.php
│   └── database.php
├── data/
│   ├── .htaccess
│   └── .gitignore
│
├── js/
│   └── script.js
│
├── about.php
├── accommodation.php
├── booking.php
├── landlord.php
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

Make sure the PHP `pdo_sqlite` extension is enabled in `php.ini`, then restart Apache. The application creates `data/varsitystay.sqlite` automatically when a page first connects to the database. The `data` folder must be writable by Apache. The database is ignored by Git and blocked from direct web access by `data/.htaccess`.

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
http://localhost/VarsityStay/landlord.php
```

## Landlord Dashboard

1. Open `landlord.php` and create a landlord account with a valid email and a password of at least eight characters.
2. Add an accommodation with its name, location, room type, monthly rent, and description.
3. The listing will appear on the accommodation page and in the student booking form.
4. When a student submits a booking request for that listing, sign in to view the student's contact details and move-in date. Accept or decline the request from the dashboard.

Listings belong to the landlord account that created them. Passwords are stored as password hashes. Requests for the original sample accommodation cards are enquiry-only; requests for landlord-created listings are saved to SQLite and can be managed in the dashboard.

## Deploying to InfinityFree

Upload the project files and folders into the website's `htdocs` directory, preserving the folder structure. Include `includes/database.php`, `landlord.php`, and `data/.htaccess`. Do not upload a local `data/varsitystay.sqlite` file for a new installation; it will be created on the server when the site first uses the dashboard or booking form. Back up the SQLite database before replacing or changing the hosted site, because it contains landlord accounts, listings, and booking requests.

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

Landlords can create an account at `landlord.php`, add or edit their accommodation, and respond to student requests. New landlord listings appear on the accommodation page and in the booking form. Booking requests for the original sample listings remain enquiry-only.

## Contributors

Add the names and student numbers of all VarsityStay group members here before final submission.

## Academic Project

Developed for Web Development 3.2.
