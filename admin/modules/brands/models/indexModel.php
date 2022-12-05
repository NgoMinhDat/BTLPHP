<?php

function get_list_users() {

}

function getAll() {

	return db_fetch_array("SELECT * FROM `tbl_brand`");
}

function insert_category($data){

	return db_insert("tbl_brand", $data);
}



function delete_category_by_id($id){

	return db_delete("tbl_brand", "`id` = '$id'");
}


function get_category_by_id($id){

	return db_fetch_array("SELECT * FROM `tbl_brand` WHERE `id` = '$id'");
}

function update_category_by_id($id,$data){

	return db_update("tbl_brand", $data, "`id`='$id'");
}