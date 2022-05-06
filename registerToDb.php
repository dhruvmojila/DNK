<!-- php code for check user click on submit btn or not. -->
<?php

include 'connect.php';

    if(isset($_POST['register'])){
        
        $username = mysqli_real_escape_string($conn,$_POST['name']);
        $useremail = mysqli_real_escape_string($conn,$_POST['email']);
        $userphone = mysqli_real_escape_string($conn,$_POST['number']);
        $userpass = $_POST['password'];
        $usercpass = $_POST['cpassword'];
        // incyrpt passowrd 
        $pas = password_hash($userpass, PASSWORD_DEFAULT);
        $cpas = password_hash($usercpass, PASSWORD_DEFAULT);  

        $emailcheckquery = "select * from registration where useremail='$useremail'";

        $result = mysqli_query($conn,$emailcheckquery);

        $noofemail = mysqli_num_rows($result);

        // if no of email is more than one then user user anthor email or login with existing
        
        if($noofemail>0){

            ?>
            <script>
                alert('Email already exist');
                window.history.go(-1);</script>';
            </script>
            <?php
          
        }
        else{
            // both pass are same or not.
            if(($userpass != $usercpass)){

                ?>
                <script>
                    alert('both passowrd field must be same.');
                    window.history.go(-1);</script>';
                </script>
                <?php
          
            }
            else{
                $insertquery = "INSERT INTO `registration` (`user_id`, `username`, `useremail`, `usermobile`, `password`, `cpassword`) VALUES (NULL, '$username', '$useremail', '$userphone', '$pas', '$cpas')";
                mysqli_query($conn,$insertquery);
                // header("location: account.php");
                ?>
                <script>
                    alert('now login to your account');
                    window.history.go(-1);</script>';
                </script>
                <?php
                
            }
        }
    }

?>
