<?php 


function construct() {

	load_model('index');
}






function addAction(){

	$id = $_GET['id'];
	addCartByID($id);
	header('location: ?modules=carts&controllers=index&action=show');
}





function addByNowAction(){

	$id = $_GET['id'];
	addCartByID($id);
	header('location: ?modules=checkouts&controllers=index&action=index');
}





function showAction(){

	if (!empty($_SESSION['id_customer'])) {
		$_SESSION['cart']['info']['id_customer'] = $_SESSION['id_customer'];
		getCartByCustomer($_SESSION['id_customer']);
	}
	load_view('index');
}





function deleteAction(){

	$id = $_GET['id'];
	deleteItemByID($id);
	header('location: ?modules=carts&controllers=index&action=show');
}






function deleteAllAction(){

	deletecart();
	header('location: ?modules=carts&controllers=index&action=show');
}






function updateAction(){
	$qty = $_POST['qty'];
	
	foreach ($qty as $key => $value) {
		
		$_SESSION['cart']['buy'][$key]['qty'] = $value;
		$_SESSION['cart']['buy'][$key]['sub_total'] = $value * $_SESSION['cart']['buy'][$key]['price'];
		$sub_total_price = $value * $_SESSION['cart']['buy'][$key]['price'];
		$data = ['num_total'=>$value, 'sub_total_price'=>$sub_total_price];
		db_update('tbl_detail_cart', $data, "`id_product` = '$key'");
		
	}

	updateCart($_SESSION['id_customer']);
	header('location: ?modules=carts&controllers=index&action=show');
}






 ?>