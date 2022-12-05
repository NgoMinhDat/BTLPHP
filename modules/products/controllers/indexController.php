<?php

function construct() {

	load_model('index');

}



function indexAction() {

	load_view('index');
}




function addAction() {
	
}




function detailAction() {

	$id = $_GET['id'];
	$id_cat = getIDCatByIDProduct($id);
	$name = getNameCatById($id_cat);
	$same_cat = getProductById_cat($id_cat);
	$res = getProductById($id);
	$data = [$name, $res, $same_cat];
	load_view('detail',$data);
}




function showAction(){
	
	$id_cat = $_GET['id_cat'];
	$name = getNameCatById($id_cat);
	$data_tmp = getAllByIDCat($id_cat);
	$id =$id_cat;
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

	$data = [$name, $res, $num, $id,$page];
	load_view('show',$data);
}
