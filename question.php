<h3>QUESTION <?php echo "$result->qid"; ?></h3>

<div>
    <p>Q. <?php echo "$result->question"; ?></p>
    <p><?php include 'pick_answers.php'; ?></p>


    <form action="process_ans.php" method="GET">
        <label>Enter Question Number</label><br>
        <input type="text" name="ans" id="ans" placeholder="Enter question number">
        <input type="hidden" name="q_no" id="q_no" value="<?php echo "$result->qid"; ?>">
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</div>
