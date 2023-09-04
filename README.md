Welcome to the README file for the project "Landing Page and Dashboard for Company using PHP Laravel".
at link https://b.bahar-app.com/

This project aims to create a landing page for a company's website and a dashboard to manage the content and settings of the landing page. The landing page will include information about the company's products or services, team members, and other relevant information. The dashboard will allow administrators to edit and update the landing page content, upload images, manage team members, and view analytics data.

## Features

- Landing page with responsive design and customizable content
- Dashboard for content management and analytics
- User authentication and authorization
- Role-based access control for dashboard features
- Image upload and management
- Team member management
- Analytics dashboard with charts and graphs

## Technologies Used

- PHP 8.1.17
- Laravel 10.0
- MySQL 8.1
- HTML, CSS, and JavaScript
- Bootstrap 5
- jQuery

## Installation

1. Clone the repository:


git clone https://github.com/AbdelrahmanEldesoky/landing-page.git


2. Install the dependencies:


composer install
npm install


3. Create a new database and update the `.env` file with your database credentials:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=landing
DB_USERNAME=root
DB_PASSWORD=


4. Run the database migrations:


php artisan migrate


5. Start the development server:


php artisan serve


6. Access the landing page at `http://localhost:8000` and the dashboard at `http://localhost:8000/admin`.

## Usage

### Landing Page

The landing page is the public-facing website of the company. Users can view information about the company's products or services, team members, and other relevant information.

### Dashboard

The dashboard is the administrative interface for managing the content and settings of the landing page. To access the dashboard, users must first log in with their credentials.

#### Authentication

The application comes with a pre-built authentication system, which includes registration, login, and password reset features. Users can register for a new account by clicking the "Register" link on the login page. After registering, users can log in with their email address and password.

#### Authorization

The dashboard features are only accessible to users with the appropriate role. By default, the application includes two roles: administrator and editor. Administrators have access to all dashboard features, while editors can only manage the landing page content.

#### Landing Page Content

The landing page content can be managed through the "Content" section of the dashboard. Administrators and editors can add, edit, and delete sections of the landing page, including the hero section, products section, team section, and footer section. Each section includes customizable fields, such as text, images, and links.

#### Image Management

Images used on the landing page can be uploaded and managed through the "Images" section of the dashboard. Administrators and editors can upload new images, view existing images, and delete images.

#### Team Members

The team members section of the landing page can be managed through the "Team Members" section of the dashboard. Administrators and editors can add, edit, and delete team members, including their name, title, bio, and photo.

#### Analytics

The analytics dashboard provides insights into the performance of the landing page, including the number of page views, unique visitors, and bounce rate. The analytics data is presented in charts and graphs, which can be filtered by date range.

## Conclusion

This project provides a complete solution for creating a landing page and dashboard for a company's website using PHP Laravel. The landing page is responsive, customizable, and user-friendly, while the dashboard provides a powerful set of tools for managing the landing page content and settings. With its robust feature set and flexible architecture, this project is an excellent starting point for any company looking to create a professional and effective online presence.
