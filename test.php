<?php

 $url = 'https://www.wordpress.com/moodle/auth/wp2moodle/logout.php';
    // create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);

    
    $output=curl_exec($ch);
 if(curl_errno($ch))
{
 $info = curl_getinfo($ch);
 echo '<pre>';print_r($info);die;
// echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
}
    curl_close($ch);
//    return $output;
    echo '<pre>';print_r($output);die;
//    echo "<iframe id='logout' src='".$url."'></iframe>";
    
