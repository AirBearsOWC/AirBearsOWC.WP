# AirBears Wordpress Site

## Installation instructions

### Download this

1. If you're not sure how to use Git, just click the green "Clone or download" button toward the top-right of this page, then click "Download ZIP"
1. Unzip the .zip file that downloads

### Config

1. Inside the folder you downloaded from Github, make a copy of `wp-config-sample.php`
1. Rename the copy to `wp-config.php`
1. Open `wp-config.php`
1. *See Asana to replace the database name, user, password, and host*
1. Save `wp-config.php`

### MAMP / Turn on PHP

1. If you're using a Mac then download [MAMP](https://www.mamp.info/en/), which runs PHP/Apache and MySQL. If you're not using a Mac, go buy a Mac, or ask someone who has a PC and has installed Wordpress before.
1. Install MAMP
1. It'll probably actually install "MAMP" and "MAMP Pro". MAMP Pro is a demo of a paid app. You can ignore it.
1. Open MAMP (not Pro)
1. Click "Preferences"
1. Click the "Web Server" tab
1. Click the little gray folder icon by "Document Root"
1. Select the folder you downloaded from Github. It's probably named `AirBearsOWC.wp`
1. Click the 'Ports' tab
1. Click 'Set Web & MySQL ports to 80 & 3306'
1. Click 'OK'
1. Click 'Start Servers'

### Wordpress Setup

1. Open your web browser to `http://localhost`
1. Follow the installation instructions. The username and password don't matter at all because they'll only exist on your computer, so make them easy.
1. That's it! Now you'll need to:
	* Create Pages
	* Create Posts
	* Customize the Menus
	* Customize the Theme with the site name, tag line, and logo

## Editing Stuff

### Content

Go to http://localhost/wp-admin. Log in with `airbears` and `airbears123!`.

### CSS

#### If you don't want to use SASS

Just edit `wp-content/themes/airbears/style.css`

#### If you want to use SASS

SASS is a much easier way to write CSS. I put SASS/SCSS in `sassymolassy.scss`. When you run the `sass` command below, it compiles to `sassymolassy.css`.

```sh
$ gem install sass
$ cd wp-content/themes/airbears
$ sass --style expanded --watch --sourcemap=none sassymolassy.scss
```

### HTML

All the HTML is in `wp-content/themes/airbears`, inside the .PHP files. All the different PHP files are parts of the template, split into separate files for reusability. To see how they fit together, look at `index.php`. Notice the `get_template_part` lines, which refer to other .PHP files in the `airbears` folder (except for `functions.php`, which does some other stuff).

*Note that the navigation menu across the top should be edited from the Wordpress dashboard.* Go to Appearance > Menus.
