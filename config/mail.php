<?php

return array(
  "driver" => "smtp",
  "host" => "mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "ben@upliftingmedia.co.uk",
      "name" => "Ben Clarke"
  ),
  "username" => "28cd7ed6c35040",
  "password" => "c8c23949733432",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);


if (App::environment('production')) {
    return array(
      'driver' => 'smtp',
      'host' => 'smtp.sendgrid.net',
      'port' => 587,
      'from' => array('address' => 'contact_address'),
      'encryption' => 'tls',
      'username' => 'SENDGRID_USERNAME',
      'password' => 'SENDGRID_PASSWORD',
    );
}
