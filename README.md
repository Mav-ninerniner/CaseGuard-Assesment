# CaseGuard-Assesment
This repo contains the solution for the Caseguard Technical Assessment (Wordpress Developer Role)

# Prerequisites
1. A running WordPress installation.
2. Access to your server's database management tool (e.g., phpMyAdmin).
Use this [link](https://www.google.com) [ for steps to set up phpMyAdmin and Wordpress]

## Installation:
1. Download/Clone this repository.
2. Replace the wp-content folder in your WordPress installation directory with the one from this repository.
3. Activate the theme through the 'Appearance' > 'Themes' menu in WordPress.

## Database Import:

1. Download the database folder from the repo/.
2. Log in to your hosting account and open phpMyAdmin.
3. Click on 'Import' tab and import the database.
4. If your site URL is different from the one in the imported database, you'll need to update it:
* Go to the wp_options table in your database.
* Find the siteurl and home rows and update their values to your site's URL

## Credits:

Developed by: Marvin
Framework: Bootstrap
Images: [Unsplash](https://unsplash.com/)
