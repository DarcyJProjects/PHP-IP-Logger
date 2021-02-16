<?php
      //SIMPLE GEOLOCATION v2
      //LOG SCRIPT v2
      //darcyjprojects.xyz

      //Time and Date
      date_default_timezone_set('Australia/Perth'); //Set to your Time Zone
      $date = "[" . date("d/m/Y h:i a") . "]"; //Default: Day, Month, Year, 12 hour time
       

      //Get User IP
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
          $userip = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $userip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
          $userip = $_SERVER['REMOTE_ADDR'];
      }

  
      //Get User IP Details
      //Input IP to API
      $url = "http://ip-api.com/json/" . $userip;
      
      //Recieve API Output (JSON)
      $ipinfo = json_decode(file_get_contents($url), true);

      $countrycode = $ipinfo['countryCode'];      
      $country = $ipinfo['country'];
      $region = $ipinfo['regionName'];
      $city = $ipinfo['city'];
	    $isp = $ipinfo['isp'];
  
      //Formatting of output
      $ipoutput = $date . ' [' . $countrycode . '] ' . $country . ' - ' . $region . ', ' . $city . ' | ' . $userip;
  
      //Write to file
      $logFile = '/var/geoip/geoip.txt'; //Output directory of file
      $logfile = fopen($logFile, 'a+') or die("There has been an error, please contact the website admin with subject php error. Thanks");
      fwrite($logfile, $ipoutput."\n");
    ?>
