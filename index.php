
<title>QUESTION BANK</title>
<form action="" method="POST">
    <label>Enter Question Number</label><br>
    <input type="text" name="q_no" id="q_no" placeholder="Enter question number">
    <br><br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php
if(isset($_POST['q_no']) && $_POST['q_no']!= ""){
    include 'db.php';
    $q_no = $_POST['q_no'];
    // echo $q_no;
    // echo "<br>";
    $url = "localhost/questions/select_api.php?q_no=".$q_no;
    // echo $url;
    // echo "<br>";

    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response= curl_exec($client);
    // echo $response;
    // echo "<br>";
    $result = json_decode($response);
    // var_dump($result);

    // echo "$result->qid";
    include 'question.php';
    
}





?>