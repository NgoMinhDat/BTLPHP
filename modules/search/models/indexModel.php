<?php 

function searchProduct($data){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `name` LIKE '%$data%'");
}


function getProductFilter($data){
	$sql_price = null ;
	$sql_brand = null;
	$sql_category = null;

	if(!empty($data['r_price'])){
		$da = explode( ',', $data['r_price'] ) ;
		$price_1 = (int)$da['0'];
		$price_2 = (int)$da['1'];
		$sql_price = " `promotional_price` BETWEEN $price_1 AND $price_2 AND";
	};


	if(!empty($data['r_brand'])){
		 $brand = $data['r_brand'] ;
		 $sql_brand = "`id_brand` = '$brand' AND";
	};

	if(!empty($data['r_category'])){
		$cate = $data['r_category'] ;
		$sql_category = "`id_category` = '$cate' AND";
	};

	$sql = "SELECT * FROM `tbl_product` WHERE ".$sql_brand.$sql_category.$sql_price;
	if(empty($sql_brand) && empty($sql_category) && empty($sql_price)){
		return null;
	}
	
	$sql = rtrim($sql, "AND");
	return db_fetch_array($sql);


}


 ?>