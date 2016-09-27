<?php
class LoginModel {
	public function login() {
		require 'model/connect.php';
		
		if (isset ( $_REQUEST ['username'] ) && isset ( $_REQUEST ['password'] )) {
			$userEmail = $_POST ['username'];
			$password = $_POST ['password'];
			
			$query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
			
			$resultUser = mysqli_query ( $connection, $query ) or die ( mysqli_error ( $connection ) );
			if (mysqli_num_rows($result) == 1){
				$row = mysql_fetch_object($resultUser);
				$_SESSION['firstname'] = $row->firstName;
				$_SESSION['lastname'] = $row->lastName;
				$_SESSION['email'] = $row->email;
			}
		}
	}
}


