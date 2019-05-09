<?php
if(isset($_GET['ans']) && $_GET['ans']!= ""){
    include 'db.php';
    $ans = $_GET['ans'];
    $q_no = $_GET['q_no'];

    $queryans = "SELECT * FROM answers WHERE `qid`='$q_no' AND `choice`='$ans'";
    $result2 = mysqli_query($conn, $queryans);
    if(mysqli_num_rows($result2)>0){
        $row = mysqli_fetch_array($result2);
        $qid = $row['qid'];
        $choice = $row['choice'];
        $answer = $row['answer'];
        $state = $row['state'];
        response($qid,$choice,$answer,$state);
        mysqli_close($conn);
    }else{
        echo "Invalid answer";
        die();
    }



}else{
    echo "Invalid request";
}

function response($qid,$choice,$answer,$state){
    $response['qid'] = $qid;
    $response['choice'] = $choice;
    $response['answer'] = $answer;
    $response['state'] = $state;


    $json_response = json_encode($response);
    echo $json_response;
}




?>