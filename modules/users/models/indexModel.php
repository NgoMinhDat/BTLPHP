<?php 


function insertUser($username, $password, $fullname, $mail, $phone, $address, $create_date){

	$password = md5($password);

	$data = [

		'username' => $username,
		'password' => $password,
		'fullname' => $fullname,
		'mail' => $mail,
		'phone' => $phone,
		'address' =>$address,
		'create_date' => $create_date
		];

	return db_insert("tbl_customer", $data);

}




function checkUser($username, $mail, $phone){

	$check =true;
	if(db_num_rows("SELECT * FROM `tbl_customer` WHERE `username` = '$username'")>0){
		$check = false;
	};
	if(db_num_rows("SELECT * FROM `tbl_customer` WHERE `mail` = '$mail'")>0){
		$check = false;
	};
	if(db_num_rows("SELECT * FROM `tbl_customer` WHERE `phone` = '$phone'")>0){
		$check = false;
	};

	return $check;

}






function checkLogin($username, $password){

	$password = md5($password);
	$check =false;
	if(db_num_rows("SELECT * FROM `tbl_customer` WHERE `username` = '$username' AND `password` = '$password'") == 1){
		$check = true;
	}

	return $check;
}





function getUser($username, $password){

	$password = md5($password);
	return db_fetch_row("SELECT * FROM `tbl_customer` WHERE `username` = '$username' AND `password` = '$password'");

}



function logout(){

	unset($_SESSION['cart']);
	unset($_SESSION['id_customer']);
	unset($_SESSION['fullname']);

}




 ?>