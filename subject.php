<?php


$subjects = [
    'Physics',
    'History',
    'Business'
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="subject_process.php">
        <label>Subject :  </label>
        <select name="subject1">
            <option> Select a subject </option>
            <!-- <?php
                foreach($subjects as $index=>$subject){
                    echo "<option value=\"$index\">$subject</option>";
                }
            ?> -->

            <?php foreach($subjects as $index=>$subject) : ?>
                <option value="<?= $index ?>"><?= $subject ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>