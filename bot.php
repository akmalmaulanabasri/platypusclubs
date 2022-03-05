<?php

if(isset($_POST['msg']))
{
$msg = $_POST['msg'];

//akmal
$curl = curl_init("https://discord.com/api/webhooks/949305962114711672/9BMz4NCxLcKNH2xMgkDXveI1W7VhsYGBYSCBiJ2-cBSeoNie3o4nNWHIVy1P44GN5fH1");
//icoorps
// $curl = curl_init("https://discord.com/api/webhooks/949313100815933520/gVVXm6ogUsFbhGd_nqyqM8rYo7zGq6rMDa8ni7YValuMaTjAdCMO4XMHOB4ZRcmI8iCi");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array("content" => $msg , "username" => "Akmalmaulana")));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
 
curl_exec($curl);

header("Location: bot.php");
}

?>

<form action="bot.php" method="POST">
    <input type="text" name="msg">
    <input type="submit">
</form>