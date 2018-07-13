<?php 

/*


AUTHOR: AMEED JAMOUS
Description: This script aims to simplify and provides a starting point to the usage of the Restcomm Curl Examples in PHP for sending Emails
right from your PHP script.


*/

//Restcomm Account SID

$api_login ="ENTER ASID";


//Restcomm Auth Token
$api_key = 'ENTER TOKEN';


$base_url_sms = "cloud.restcomm.com/restcomm/2012-04-24/Accounts/$api_login/Email/Messages";




// initialising CURL

$ch = curl_init();
$To = "some-email@somedomain.com";
$From = "yourcompany@domain.com";
$Body = "Hello World !";
$Subject = "Test from Restcomm Email API";

$params = array(
                'To' => $To, 
                'From' => $From,
                'Body' => $Body,
                'Subject' => $Subject
                
                );
//query against api. URL


curl_setopt($ch, CURLOPT_URL,"https://$api_login:$api_key@$base_url_sms");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
http_build_query($params));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);

//analyze JSON output
echo "server_output:$server_output";




