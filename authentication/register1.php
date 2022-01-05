<?php

if (isset($_POST['register'])) {

include_once '../config/student_db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



		if (empty($username) || empty($email) || empty($password))  {
			header("Location: ../register.php?error=fields_are_empty");
			exit();

		}
		elseif ((!filter_var($email, FILTER_VALIDATE_EMAIL)) && (preg_match("/^[a-zA-Z0-9]*$/", $username))) {
			header("Location: ../registerm.php?error=email_and_username_is not valid");
			exit();
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: ../register.php?error=email is not valid");
			exit();
		}
		elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
			header("Location: ../register.php?error=username is not valid");
			exit();
		}
		
		else {
			$query = "SELECT username FROM register WHERE username =?";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $query)) {
				header("Location: ../register.php?error=prepared statement error");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt); // if you need to access the information of data from data base
				$checkresult = mysqli_stmt_num_rows($stmt);

				if ($checkresult > 0) {
					header("Location: ../register.php?error=user already registered");
					exit();
				}
				else{

					$query = "INSERT INTO register (username, email, password) VALUES (?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $query)) {
						header("Location: ../register.php?errror=prepared statement error 2");
						exit();
					}
					else{
						$encpassword = password_hash($password, PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt, "sss", $username, $email, $encpassword);
						mysqli_stmt_execute($stmt);
						// mysqli_stmt_store_result($stmt); // not necessary
						header("Location:../index.php?action=registration completed successfully");
						exit();
					}
				}
			}
		}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}



else if(isset($_POST['login'])){

include_once '../config/student_db.php';

$loginname = $_POST['username'];
$password = $_POST['password'];

	if (empty($loginname) || empty($password)){
			header("Location: ../register.php?error=fields_are_empty");
			exit();
		}

	else{
		$query = "SELECT * FROM register WHERE username =? OR email =?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $query)) {
				header("Location: ../register.php?error=prepared statement error");
				exit();
			}
		else {
				mysqli_stmt_bind_param($stmt, "ss", $loginname, $loginname);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)) {
					$validatepassword = password_verify($password, $row['password']);
					if ($validatepassword == false ){
						header("Location: ../register.php?error=password_incorrect");
						exit();
					}
					else {
						session_start();
						$_SESSION['loginname'] = $row['username'];

						header("Location: ../index.php?action=login successfully");
						exit();
					}
				}

		}

	}

}
else{

	header("Location:../register.php?error=login/ register first");
	exit();
}

?>






// prepared statement:

//1. Preparing the prepared statements: statement template
// $query = "INSERT INTO student (username, email, password) VALUES (?, ?, ?)";
// ? are the paramenters used for variable binding

//2. Prepare or bind the statement template with the DBMS
// $stmt = $conn->prepare($sql);
// $stmt->bind_param('sss', $username, $email, $encpassword); 

// By telling mysql what type of data to expect, we minimize the risk of SQL injections.
// s for string
// i for integer 
// d for decimal
// b for blob

//3. Execution of the prepared statement
// $stmt ->execute();