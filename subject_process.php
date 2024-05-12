<?php


$subjects = [
    'Physics',
    'History',
    'Business'
];

    if(isset($_POST)){
        $sub= $subjects[$_POST['subject1']];
        echo $sub;
    }

?>