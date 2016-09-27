<?php

//include_once("model/Book.php");

class Model {

    public function getlogin() {
        // here goes some hardcoded values to simulate the database
        require 'connect.php';
        if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
            if (isset($_POST['username']) and isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";

                $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                $count = mysqli_num_rows($result);

                if ($count == 1) {
                    return "login";
                } else {
                    return "invalid user name or Pass";
                }
            }
        }
    }

}

?>