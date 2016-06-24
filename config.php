<?php

/**
 * @file
 * A single location to store configuration.
 */
// CONSUMER_KEY and CONSUMER_SECRET are the key.secret pair of the twitter app.
define('CONSUMER_KEY', 'P9EcJ18bYcA0NKkU1pBxPTII4');
define('CONSUMER_SECRET', 'ThySzXe3dqZA5sDtTmyE6SZg8iTw1B3a10aM4HJWCM4vb6ZzE1');

// Callback URL to which Twitter should redirect with oauth_token and oauth_verifier
define('OAUTH_CALLBACK', 'http://127.0.0.1:80/git/simple-login-with-twitter/callback.php');
