<?php

function construct() {

    load_model('index');
}



function indexAction() {


}



function listAction() {
	$data_tmp = getAllOrder();
	foreach ($data_tmp as $key => $value) {
		$data_tmp[$key]['fullname'] = getNameCus($data_tmp[$key]['custom_id']);
	}
// phan trang
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

function listNoAction() {

	$data_tmp = getAllOrderNo();
	// echo "<pre>";
	// print_r($data);
	foreach ($data_tmp as $key => $value) {
		$data_tmp[$key]['fullname'] = getNameCus($data_tmp[$key]['custom_id']);
	}
	
// phan trang
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
	load_view('listNo',$data);

}

function detailAction(){

	$id_order = $_GET['id_order'];
	$data = array();
	$check = true;
	$data_order = getAllDetailOrderNo($id_order);// lấy được id order
	foreach ($data_order as $key => $value) {
		
		$id_product = (int)$value['id_product'];
		$data_product = getProductInOrder($id_product);
		$data[$key]['sub_total_price'] = $value['sub_total_price'];
		$data[$key]['qty']  = $value['qty'];
		$data[$key]['code'] = $data_product['code'];
		$data[$key]['image'] = $data_product['image'];
		$data[$key]['name'] = $data_product['name'];
		$data[$key]['price'] = $data_product['price'];
		if($value['qty'] > $data_product['quantity']){

			$data[$key]['mess'] = "Thiếu hàng(còn:".$data_product['quantity'].")";
			$check = false;
		}else{
			$data[$key]['mess'] = "Đủ hàng";
		}

		

	};
	$data[count($data)] = $id_order;
	$data[count($data)] = $check;

	load_view('detail',$data);
}



function confirmAction(){

	$id_order = $_GET['id_order'];
	$date = date("d/m/Y",time());
	updateConfirmOrder($id_order,$date);
	// update  lại số lượng hàng trong kho
	$data = getQtyAndIDProductByIdOrder($id_order);
	foreach ($data as $key => $value) {
		$id = $value['id_product'];
		$qty = $value['qty'];
		updateQtyProduct($id,$qty);
	}

	///////////////////////////////////////
	header('location:?modules=orders&controller=index&action=listNo');
	echo "xacs nhan";
}


function cancelAction(){

	$id_order = $_GET['id_order'];
	$date = date("d/m/Y",time());
	updateCancelOrder($id_order,$date);
	header('location:?modules=orders&controller=index&action=listNo');

}






?>