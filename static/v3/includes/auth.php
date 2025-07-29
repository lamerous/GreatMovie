<?php
    function isLoggedIn() {
        return isset($_COOKIE['access_token']) && verifyToken($_COOKIE['access_token']);
    }
    
    function verifyToken($token) {
        $parts = explode('.', $token);
        $payload = json_decode(base64_decode($parts[1]), true);
        return $payload['exp'] > time();
    }

?>
