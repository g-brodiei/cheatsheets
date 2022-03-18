<?php
// Download this file locally.
// Run `php verify_SSL.php` on your terminal.

$url = "https://example.com/test";

$post_data['email'] = "example@mail.com";

try {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, TRUE);
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_USERPWD, "username:password");
  // Modify this boolean for verification of targert URL.
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded',
  ]);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
  $curl_response = curl_exec($ch);
  $number = curl_errno($ch);
  $error = curl_error($ch);
  $response = json_decode($curl_response);
  curl_close($ch);
  $result = [
    'response' => $response,
    'error_no' => $number,
    'error_details' => $error,
  ];
  var_dump($result);
}
catch (\Exception $error) {
  throw $error;
}
?>
