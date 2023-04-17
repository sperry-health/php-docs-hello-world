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

echo "Hello World!";

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
