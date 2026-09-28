<?php
declare(strict_types=1);

// Copy to config.local.php. Never commit real credentials or the application key.
return [
    'environment' => 'local',
    'base_path' => '', // Empty when public/ is the document root; no trailing slash.
    'timezone' => 'Australia/Sydney',
    'contact_email' => 'hello@clubconnect.example',
    'contact_is_example' => true,
    'demo_mode' => true,
    'session_timeout' => 1800,
    'https_required' => false, // Local loopback HTTP only. Hosted use MUST be true.
    'app_key' => 'cd5842b3e7e458239725e64aec001ab0639663833526a1a466e6a384f1269bfa',
    'db' => [
        'host' => '127.0.0.1',
        'port' => 3306,
        'name' => 'clubconnect',
        'user' => 'clubconnect_app',
        'password' => 'd9aba9bea36a645a11be7de99d79421b4784a01f05e6ad2b',
    ],
];
