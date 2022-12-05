<?php 


function getProductById($id){
	
	return db_fetch_row("SELECT * FROM `tbl_product` WHERE `id`='$id'");
}



function getAllByIDCat($id){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `id_category`='$id'");
}



function getNameCatById($id){

	return db_fetch_row("SELECT `name` FROM `tbl_category` WHERE `id`='$id'");
}



function getProductById_cat($id_cat){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `id_category`='$id_cat'");
}




function getIDCatByIDProduct($id){

	$data = db_fetch_row("SELECT * FROM `tbl_product` WHERE `id`='$id'");
	return $data['id_category'];
}


 ?>