<?php 
if(isset($_GET['ans']) && $_GET['ans']!=""){
    $ans = $_GET['ans'];
    $q_no = $_GET['q_no'];
    $url = "localhost/questions/mark_api.php?ans=".$ans."&q_no=".$q_no;
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response= curl_exec($client);
    // echo $response;
    // echo "<br>";
    $result = json_decode($response);
    // var_dump($result);

    echo "Your answer is $result->state";
}




?>