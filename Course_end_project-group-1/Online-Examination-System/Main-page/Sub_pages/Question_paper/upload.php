<?php 

if (isset($_POST['submit']) && isset($_FILES['my_file'])) {
	include "db_conn.php";

	echo "<pre>";
	print_r($_FILES['my_file']);
	echo "</pre>";

	$file_name = $_FILES['my_file']['name'];
	$file_size = $_FILES['my_file']['size'];
	$tmp_name = $_FILES['my_file']['tmp_name'];
	$error = $_FILES['my_file']['error'];

	if ($error === 0) {
		if ($file_size > 12500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: QP-html.php?error=$em");
		}else {
			$img_ex = pathinfo($file_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("pdf", "jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_file_name = uniqid("FILE-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_file_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				// Insert into Database
				$sql = "INSERT INTO files(file_url) 
				        VALUES('$new_file_name')";
				mysqli_query($conn, $sql);
                $done = 'Succesfully Uploaded NOW YOU CAN SUBMIT THE TEST';
                header("Location: QP-html.php?error=$done");

			}else {
				$em = "You can't upload files of this type";
		        header("Location: QP-html.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: QP-html.php?error=$em");
	}

}else {
	header("Location: QP-html.php");
}