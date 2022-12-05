<?php 

function getAll() {

	return db_fetch_array("SELECT * FROM `tbl_blog`");
}





function getBlogById($id){

	return db_fetch_row("SELECT * FROM `tbl_blog` WHERE `id`='$id'");
}






 ?>