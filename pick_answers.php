<?php
include 'db.php';

$querychoices = "SELECT * FROM answers WHERE `qid`='$q_no'";
$resultans = mysqli_query($conn, $querychoices);
$rowans = mysqli_fetch_assoc($resultans);
?>

<?php do { ?>
    <tbody id="myTable">
      <tr>
        <td><?php echo $rowans['choice']; ?></td>
        <td><?php echo $rowans['answer']; ?></td> 
        <br>
</tr>
    
    </tbody>
  
<?php } while ($rowans = mysqli_fetch_assoc($resultans)); ?>




