<?php

//check thông tin đăng nhập admin
function checkLogin($username,$password){

	$sql = "SELECT * FROM `tbl_admin` WHERE `username` = '{$username}' AND `password` = '{$password}'";
	return db_num_rows($sql);
	
}

// lấy thông tun tài khoản admin theo tên đăng nhập
function getUserByUsername($username,$password){

	return db_fetch_array("SELECT * FROM `tbl_admin` WHERE `username` = '{$username}' AND `password` = '{$password}'");

}

// update thông tin tài khoản admin
function updateUser($fullname, $username,$email,$phone,$address){

	$data = [
		'fullname' => $fullname,
		'username' => $username,
		'email' => $email,
		'phone' => $phone,
		'address' =>$address
	];
	return db_update('tbl_admin', $data, "`username` = '{$username}'");
}

// thay đổi mật khẩu admin
function changePass($password,$password1){

	$data = [
		'password' => $password
	];
	return db_update('tbl_admin', $data, "`password` = '{$password1}'");
}




?>
