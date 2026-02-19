<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Mock data for the attendance table
$attendance = [
    ['name' => 'Kian', 'time_in' => '08:00 AM', 'status' => 'On Time'],
    ['name' => 'John Doe', 'time_in' => '08:15 AM', 'status' => 'Late'],
    ['name' => 'Jane Smith', 'time_in' => '07:55 AM', 'status' => 'On Time'],
];

include __DIR__ . '/../templates/dashboard.php';