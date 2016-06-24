<?php

/**
 * @file
 * A single location to store configuration.
 */
// CONSUMER_KEY and CONSUMER_SECRET are the key.secret pair of the twitter app.
define('CONSUMER_KEY', '*******************');
define('CONSUMER_SECRET', '****************************');

// Callback URL to which Twitter should redirect with oauth_token and oauth_verifier
define('OAUTH_CALLBACK', 'http://127.0.0.1:80/git/simple-login-with-twitter/callback.php');
