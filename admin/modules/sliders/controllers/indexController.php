<?php

function construct() {

	load_model('index');

}

function indexAction() {

}

function addAction() {

	$user;
	$type;
	$image;
	$err = array();
	if(!empty($_POST['btn_submit'])){

		if(!empty($_POST['user'])){
			$user = $_POST['user'];
		}else{
			$err['user'] =$_POST['user'];		
		}

		if(!empty($_POST['type'])){
			$type = $_POST['type'];
		}else{
			$err['type'] =$_POST['type'];		
		}

		// xxử lý ảnh
		$target_dir = "public/uploads/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["image"]["tmp_name"]);
		  if($check !== false) {
		    $uploadOk = 1;
		  } else {
		    $uploadOk = 0;
		  }
		}

		if (file_exists($target_file)) {
		  $uploadOk = 0;
		}

		if ($_FILES["image"]["size"] > 200000000) {
		  $uploadOk = 0;
		}

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  $uploadOk = 0;
		}

		if ($uploadOk == 0) {
		} else {
		  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		    $image = $target_dir. basename( $_FILES["image"]["name"]);
		  } 
		}
		if(empty($err)){
		$create_date = date("d/m/Y",time());
		$res = [

			'image' => $image,
			'user ' =>$user ,
			'create_date' => $create_date,
			'type ' =>$type 
			
		];
			if(insert_slider($res)){
				
	        	echo " <script type='text/javascript'> alert('Thêm mới thành công');</script>";
			}else{
				
	        	echo " <script type='text/javascript'> alert('Thêm mới danh mục sản phẩm thất bại');</script>";
			}

		}
		else{
			
	        echo " <script type='text/javascript'> alert('Thêm mới danh mục sản phẩm thất bại');</script>";
		}
	}


	load_view('add');
}

function deleteAction() {

	$id = $_GET['id'];
	delete_slider_by_id($id);
	header('location:?modules=sliders&controllers=index&action=list');

}

function listAction() {
	$data_tmp = getAllSlider();

	$page;
	if(!empty($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page =1;
	}
	
	$numProduct = count($data_tmp);
	$productOnPage = 5;
	$num = ceil($numProduct/$productOnPage);
	if(!empty($_GET['page']) && $_GET['page']>$num){
		$page =$num;
	}
	$start = ($page - 1) * $productOnPage;
	$res =[];
	for ($i=$start; $i < $start+$productOnPage; $i++) { 
		if(isset($data_tmp[$i]))
        $res[] = $data_tmp[$i];
	};

	$data = [$res, $num, $page];
	load_view('list',$data);
}
