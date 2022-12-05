<?php



function getAll() {

	return db_fetch_array("SELECT * FROM `tbl_category`");
}

function insert_category($data){

	return db_insert("tbl_category", $data);
}



function delete_category_by_id($id){

	return db_delete("tbl_category", "`id` = '$id'");
}


function get_category_by_id($id){

	return db_fetch_array("SELECT * FROM `tbl_category` WHERE `id` = '$id'");
}

function update_category_by_id($id,$data){

	return db_update("tbl_category", $data, "`id`='$id'");
}

