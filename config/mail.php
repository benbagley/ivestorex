<?php

// TESTING //
// return array(
//   "driver" => "smtp",
//   "host" => "mailtrap.io",
//   "port" => 2525,
//   "from" => array(
//       "address" => "ben@upliftingmedia.co.uk",
//       "name" => "Ben Clarke"
//   ),
//   "username" => "28cd7ed6c35040",
//   "password" => "c8c23949733432",
//   "sendmail" => "/usr/sbin/sendmail -bs",
//   "pretend" => false
// );

return array(
  'driver' => 'smtp',
  'host' => 'smtp.sendgrid.net',
  'port' => 587,
  'from' => array('address' => 'ben@upliftingmedia.co.uk', 'name' => 'Ben Clarke'),
  'encryption' => 'tls',
  'username' => env('SENDGRID_USERNAME'),
  'password' => env('SENDGRID_PASSWORD'),
);
