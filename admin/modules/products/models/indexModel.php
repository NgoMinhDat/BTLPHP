<?php



function getAllCategory(){

	return db_fetch_array("SELECT * FROM `tbl_category`");
}

function getAllBrand(){

	return db_fetch_array("SELECT * FROM `tbl_brand`");
}

function insert_product($data){

	return db_insert("tbl_product", $data);
}


function getAllProduct(){

	return db_fetch_array("SELECT * FROM `tbl_product`");
}

function get_category_by_id($id){

	$data = db_fetch_array("SELECT * FROM `tbl_category` WHERE `id` = '$id'");
	return $data[0]['name'];
}

function get_brand_by_id($id){

	$data = db_fetch_array("SELECT * FROM `tbl_brand` WHERE `id` = '$id'");
	return $data[0]['name'];
}


function delete_product_by_id($id){

	return db_delete("tbl_product", "`id` = '$id'");
}