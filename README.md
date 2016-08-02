THE FEAL WORDPRESS WEBSITE

Requirements:

MAMP (Or WAMP)
ruby
sass
grunt
ruby

First Time Setup:

sudo npm install
Development Mode

grunt watch
*If you want to force a complile of all files, run the default task

grunt
All work should be done in the development branch

Database must be called the_feal with the username and password root

In build/ edit the file called wp-config.php with the following contents

<?php

/** The name of the database for WordPress */
define('DB_NAME', 'the_feal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

?>

Branch Deployments

deployment-stage: tbd
