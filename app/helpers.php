<?php

// Get User's Geolocation

if (!function_exists('get_local_time')) {
    function get_local_time()
    {
        $tz = 'Asia/Karachi';
        return $tz;
    }
}


if (!function_exists('hideEmailAddress')) {
    // partially hide email
    function hideEmailAddress($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            list($first, $last) = explode('@', $email);
            $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first) - 3), $first);
            $last = explode('.', $last);
            $last_domain = str_replace(substr($last['0'], '1'), str_repeat('*', strlen($last['0']) - 1), $last['0']);
            $hideEmailAddress = $first . '@' . $last_domain . '.' . $last['1'];
            return $hideEmailAddress;
        }
    }
}
