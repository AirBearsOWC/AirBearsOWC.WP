# AirBears Wordpress Site

## Installation instructions

The instructions are actually really easy. They're only long because I was anal-retentive about putting things on separate lines.

### Config

1. Copy `wp-config-sample.php` and rename it to `wp-config.php`
1. Open `wp-config.php`
1. Replace `database_name_here` with something like `airbears_db`
1. Replace `username_here` with `root`
1. Replace `password_here` with `root`
1. Save the file

### MAMP

1. If you're using a Mac then download [MAMP](https://www.mamp.info/en/), which runs PHP/Apache and MySQL. If you're not using a Mac, go buy a Mac, or ask someone who has a PC and has installed Wordpress before. :)
1. Install MAMP
1. It'll probably actually install "MAMP" and "MAMP Pro". MAMP Pro is a demo of a paid app. You can ignore it.
1. Open MAMP (not Pro)
1. Click "Preferences"
1. Click the "Web Server" tab
1. Click the little gray folder icon by "Document Root"
1. Select the folder you downloaded from Github. It's probably named `airbears_wp`.
1. Click 'OK'
1. Click 'Start Servers'

### Database

1. In MAMP, click 'Open WebStart page'. It'll open your web browser.
1. Click 'Tools' in the navigation bar
1. Select 'phpMyAdmin'
1. Click the 'Databases' tab at the top
1. Under 'Create database' type 'airbears_db', or whatever you used to replace `database_name_here` above, then click 'Create'
1. Open your web browser to `http://localhost:8888`

### Wordpress Setup

1. Follow the installation instructions. The username and password don't matter at all because they'll only exist on your computer, so make them easy.
1. That's it! Now you'll need to:
	* Create Pages
	* Create Posts
	* Customize the Menus
	* Customize the Theme with the site name, tag line, and logo

## Editing CSS

### SASS

SASS is a much easier way to write CSS. I put SASS/SCSS in `style.scss`. When you run the `sass` command below, it compiles to `style.css`.

```sh
$ gem install sass
$ cd wp-content/themes/airbears
$ sass --style expanded --watch --sourcemap=none style.scss
```
