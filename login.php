<?php

session_start();

include 'connect.php';

    if(isset($_POST['login'])){

        $useremail = mysqli_real_escape_string($conn,$_POST['email']);
        $userpass = $_POST['password'];

        $emailsearch = "select * from registration where useremail='$useremail'";

        $result = mysqli_query($conn,$emailsearch);

        $email_count = mysqli_num_rows($result);

        if($email_count){
            $pass = mysqli_fetch_assoc($result);
            $db_pass = $pass['password'];

            $_SESSION['username'] = $pass['username'];

            $check_pass = password_verify($userpass, $db_pass);

            if($check_pass){
                ?>
                <script>
                    alert('you are loggged in');
                    window.history.go(-1);</script>';
                </script>
                <?php
                // header("location: index.php");
            }
            else{
                ?>
                <script>
                    alert('password incorrect');
                    window.history.go(-1);</script>';
                </script>
                <?php
            }
        }
        else{
            ?>
            <script>
                alert('Email does not exist');
                window.history.go(-1);</script>';
            </script>
            <?php
        }

    }
        