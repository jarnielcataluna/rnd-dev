<?php
    ini_set("display_errors", 1);
    include('connect.php');
    if($_POST){
        if(
            isset($_POST['fullname']) && !empty($_POST['fullname']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['mobile']) && !empty($_POST['mobile'])
        ){
            global $dbh;

            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $date = date("Y-m-d");

            $query = "INSERT INTO `leads_agent` (`id`, `name`, `contact`, `email`, `date_posted`) VALUES (NULL, ?, ?, ?, ?);";
            $sth = $dbh->prepare($query);
            if($sth->execute(array($fullname, $mobile, $email,  $date))){
                echo $dbh->lastInsertId();
            }else{
                echo -1;
            }

        }else{
            echo 0;
        }

    }else{
        header('Location: index.php');
    }
?>