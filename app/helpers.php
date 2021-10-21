<?php

// Get User's Geolocation

function get_local_time(){

    // $ip = file_get_contents("http://ipecho.net/plain");
    // $url = 'http://ip-api.com/json/'.$ip;
    // $tz = file_get_contents($url);
    $tz = 'Asia/Karachi';

    return $tz;
}

// partially hide email
function hideEmailAddress($email)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        list($first, $last) = explode('@', $email);
        $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first)-3), $first);
        $last = explode('.', $last);
        $last_domain = str_replace(substr($last['0'], '1'), str_repeat('*', strlen($last['0'])-1), $last['0']);
        $hideEmailAddress = $first.'@'.$last_domain.'.'.$last['1'];
        return $hideEmailAddress;
    }
}
