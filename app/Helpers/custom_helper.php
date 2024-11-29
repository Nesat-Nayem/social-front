<?php
use Carbon\Carbon;



function send_whatsapp_otp($phone, $otp){

    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://wapi.nationalsms.in/wapp/v2/api/send?apikey=dc8b10230c2e4632ac3b3456e78c4187&mobile='.$phone.'&msg=Your Otp is '.$otp.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$response = curl_exec($ch);

curl_close($ch);

print_r($response);

$result = json_decode($response);

return $response;

}

function verifyuser($phone){
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://social-backend-gamma-eight.vercel.app/api/auth/activate-user',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "phone": "'.$phone.'"
}
',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$result = json_decode($response);

return $result;

}
function newpasswordupdate($phone,$newPassword){
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://social-backend-gamma-eight.vercel.app/api/auth/reset-password',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "phone": "'.$phone.'",
  "newPassword": "'.$newPassword.'"
}
',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$result = json_decode($response);
    return $result;

}


function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)
            ->setTimezone('Asia/Kolkata')
            ->format('d-m-Y h:i:s A');
}
