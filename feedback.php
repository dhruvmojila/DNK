<?php

include "connect.php";

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {

    $uname = $_POST['name'];
    $feedbackSub = $_POST['subject'];
    $uemail = $_POST['email'];
    $ufeedback = $_POST['feedback'];

    if ($uname != "" && $uemail != "" && $ufeedback != "" &&   $feedbackSub!="") {

        $INSERT = "INSERT INTO `feedback` (`feedback_id`, `username`, `useremail`, `subject`, `feedback`) VALUES (NULL, '$uname', '$uemail', '$feedbackSub', '$ufeedback')";

        mysqli_query($conn, $INSERT);
        echo '<script>alert("Your feedback is successfully inserted");
                      window.history.go(-1);</script>';
        $conn->close();
    } else {
        echo '<script>alert("Please enter all details");
                      window.history.go(-1);</script>';
        die();
    }
}
