<?php

/**
 * @file
 * Check if consumer token is set and if so send user to get a request token.
 */

/**
 * Exit with an error message if the CONSUMER_KEY or CONSUMER_SECRET is not defined.
 */
require_once('config.php');
if (CONSUMER_KEY === '' || CONSUMER_SECRET === '' || CONSUMER_KEY === 'CONSUMER_KEY_HERE' || CONSUMER_SECRET === 'CONSUMER_SECRET_HERE') {
  echo 'You need a consumer key and secret to work on this example. Get one from <a href="https://dev.twitter.com/apps">dev.twitter.com/apps</a>';
  exit;
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simple Login with Twitter</title>

    <link rel="stylesheet" href="css/com.css"/>
    <link rel="stylesheet" href="fa/css/font-awesome.css"/>

  </head>
  <body>

    <div class="container">
      <h2>Ninoop p george</h2>
      <a class="signinbutton" href="redirect.php"><i class="fa fa-twitter"></i>Sign In with Twitter</a>
    </div>
  </body>
</html>
