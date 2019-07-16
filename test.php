<?php

   $title = 'Test for PHP server';
   $message = 'Message of Notification';
   $url = 'https://www.cricbuzz.com';

   $apiToken = 'd2ef79c9478d4a9c66ab29c8d30c4ab1';

   $curlUrl = 'https://pushcrew.com/api/v1/send/all';

   //set POST variables
   $fields = array(
     'title' => $title,
     'message' => $message,
     'url' => $url
   );

   $httpHeadersArray = Array();
   $httpHeadersArray[] = 'Authorization: key='.$apiToken;

   //open connection
   $ch = curl_init();

   //set the url, number of POST vars, POST data
   curl_setopt($ch, CURLOPT_URL, $curlUrl);
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
   curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeadersArray);

   //execute post
   $result = curl_exec($ch);

   $resultArray = json_decode($result, true);

   if($resultArray['status'] == 'success') {
       //success


   }
   else if($resultArray['status'] == 'failure') {
       //failure
   }
   else {
       //failure
   }

?>
