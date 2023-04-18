<?php

// Azure AD B2C OAuth 2.0 token endpoint (v2)
// https://slhdb2c.b2clogin.com/slhdb2c.onmicrosoft.com/B2C_1_SignUpAndSignInHealthyBeginnings/oauth2/v2.0/token
// 
// Azure AD B2C OAuth 2.0 authorization endpoint (v2)
// https://slhdb2c.b2clogin.com/slhdb2c.onmicrosoft.com/B2C_1_SignUpAndSignInHealthyBeginnings/oauth2/v2.0/authorize
// 
// Azure AD B2C OAuth 2.0 logout endpoint (v2)
// https://slhdb2c.b2clogin.com/slhdb2c.onmicrosoft.com/B2C_1_SignUpAndSignInHealthyBeginnings/oauth2/v2.0/logout
// 
// Azure AD B2C OpenID Connect metadata document
// https://slhdb2c.b2clogin.com/slhdb2c.onmicrosoft.com/B2C_1_SignUpAndSignInHealthyBeginnings/v2.0/.well-known/openid-configuration

// See:
// https://learn.microsoft.com/en-us/azure/active-directory-b2c/authorization-code-flow

// See:
https://learn.microsoft.com/en-us/azure/active-directory-b2c/authorization-code-flow#2-get-an-access-token

// See:
https://www.twilio.com/blog/5-ways-to-make-http-requests-in-php

echo "Hello World! - V1";

$requestUri = "GET https://slhdb2c.b2clogin.com/slhdb2c.onmicrosoft.com/B2C_1_SignUpAndSignInHealthyBeginnings/oauth2/v2.0/authorize?client_id=104a6d38-e647-4733-8c39-51e8376fede5&response_type=code&redirect_uri=https%3A%2F%2Fas-healthy-beginnings.azurewebsites.net%2F.auth%2Flogin%2Fslhdb2c%2Fcallback&response_mode=query&scope=offline_access%20https://slhdb2c.onmicrosoft.com/104a6d38-e647-4733-8c39-51e8376fede5/access_as_user"

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $requestUri);
curl_setopt($ch, CURLOPT_SSH_COMPRESSION, true);
curl_setopt_array
(
    $ch, 
    [
        CURLOPT_RETURNTRANSFER => true, 
        CURLOPT_URL => $requestUri
    ]
);
$result = curl_exec($ch);

echo $result
