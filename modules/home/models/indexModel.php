<?php





function getAllSmartPhone(){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `id_category` = '13'  LIMIT 8");
}




function getAllTablet(){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `id_category` = '14' LIMIT 8");

}





function getAllLaptop(){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `id_category` = '12' LIMIT 8");

}





function getAllHot(){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `level` = 'hot' ");

}





function getAllSlider(){
	
	return db_fetch_array("SELECT * FROM `tbl_slider`");

}