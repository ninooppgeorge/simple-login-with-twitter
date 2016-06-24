<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');

/* If access tokens are not available redirect to connect page. */
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}
/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

/* If method is set change API call made. Test is called by default. */
$data = $connection->get('account/verify_credentials');

/* Include HTML to display on the page */

// there are rate limit of 100 api calls in 1 hour
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logged In</title>
    <link rel="stylesheet" href="css/com.css"/>
    <link rel="stylesheet" href="fa/css/font-awesome.css"/>
  </head>
  <body>

    <div class="dashboard">
      <h2>Signed In with twitter</h2>

      <img src="<?php echo $data->profile_image_url; ?>" class="ppic"/>
      <div class="details">
        <a class="que">Your Name </a> <a class="ans"> : <?php echo $data->screen_name; ?></a>
        <a class="que">Your Id</a> <a class="ans"> : <?php echo $data->id_str; ?></a>
        <a class="que">Profile Url</a> <a class="ans" href="<?php echo $data->url; ?>"> : <?php echo $data->url; ?></a>
        <a class="que">Followers Count</a> <a class="ans"> : <?php echo $data->followers_count; ?></a>
        <a class="que logout" href="clearsessions.php">Log Out</a>
      </div>
    </div>
  </body>
</html>
