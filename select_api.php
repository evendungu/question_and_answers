<?php
if(isset($_GET['q_no']) && $_GET['q_no']!= ""){
    include 'db.php';
    $q_no = $_GET['q_no'];
    // echo "part 2".$q_no;
    // echo "<br>";
    $query = "SELECT * FROM questions WHERE `qid`='$q_no' ";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        $qid = $row['qid'];
        $question = $row['question'];
        $resp = $row['response_desc'];
        response($qid,$question,$resp);
        mysqli_close($conn);
    }else{
        response(NULL,NULL,"No such question");
        die();
    }


}else{
    response(NULL,NULL,"Invalid Request");
    die();
}

function response($qid,$question,$resp){
    $response['qid'] = $qid;
    $response['question'] = $question;
    
    $response['response_desc'] = $resp;



    $json_response = json_encode($response);
    echo $json_response;

    

    // echo $question;

}

// function response1($qchoice,$qans){

//     $response1['choice'] = $qchoice;
//     $response1['answer'] = $qans;

//     $json_response1 = json_encode($response1);
//     echo $json_response1;
// }







?>