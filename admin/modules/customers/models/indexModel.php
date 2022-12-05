<?php 

function getAllCustomer(){

	return db_fetch_array("SELECT * FROM `tbl_customer`");
}


 ?>