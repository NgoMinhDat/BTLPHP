<?php 



function addCartByID($id){
	
	if(checkCart($_SESSION['id_customer'])){
		$data = ['id_customer'=> $_SESSION['id_customer'], 'total_num'=>0, 'total_price'=>0];
		db_insert('tbl_cart', $data);
	}
	$qty = 1;
	$check = checkProductInCart($id);
	$item = getProductDetailById($id);
	
	if(isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])){
		$qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
	}

	$_SESSION['cart']['buy'][$id] = [

		'id' => $item['id'],
		'code' => $item['code'],
		'name' => $item['name'],
		'price' => $item['price'],
		'image' => $item['image'],
		'qty' => $qty,
		'sub_total' => $qty * $item['price']

		];

	$sub_total_price  = $_SESSION['cart']['buy'][$id]['sub_total'];

	if(!empty($check)){
		
		$data = ['num_total'=>$qty ,'sub_total_price'=>$sub_total_price ];
		db_update('tbl_detail_cart', $data, "`id_product` = '$id'");

	}else{
		
		$tmp = checkCartByCustomer($_SESSION['id_customer']);
		$id_cart = $tmp['id'];
		$data = ['id_cart '=>$id_cart, 'id_product '=>$id, 'num_total'=>$qty, 'sub_total_price' =>$sub_total_price];
		db_insert('tbl_detail_cart', $data);
	}

	updateCart($_SESSION['id_customer']);
}





function updateCart($id_customer){

	if(isset($_SESSION['cart']))
	{
		$num_oder =0;
		$total = 0;
		$tmp = checkCartByCustomer($id_customer);
		$id = $tmp['id'];
		$tmp_price = db_fetch_array("SELECT * FROM `tbl_detail_cart` WHERE `id_cart` = '$id'");
		foreach ($tmp_price as $value) {

			$num_oder += $value['num_total'];
			$total += $value['sub_total_price'];

		};

		$data = ['total_num'=>$num_oder, 'total_price'=>$total];
		db_update('tbl_cart', $data, "`id` = '$id'");

		$_SESSION['cart']['info'] =[

			'num_oder' =>$num_oder,
			'total' =>$total

			];
	}
}







function deleteItemByID($id){
	unset($_SESSION['cart']['buy'][$id]);
	db_delete('tbl_detail_cart', "`id_product` = '$id'");
	updateCart($_SESSION['id_customer']);
}






function deletecart(){

	$id_customer = $_SESSION['id_customer'];
	$data_cart = db_fetch_row("SELECT * FROM `tbl_cart`WHERE `id_customer` = $id_customer");
	$id_cart = $data_cart['id'];
	db_delete('tbl_detail_cart', "`id_cart`='$id_cart'");
	$data = ['total_num'=>0, 'total_price'=>0];
	db_update('tbl_cart', $data, "`id_customer` = $id_customer");
	unset($_SESSION['cart']);
}






function getProductDetailById($id){

	$data = db_fetch_row("SELECT * FROM `tbl_product` WHERE `id`=$id");
	return $data;
}







function checkCartByCustomer($id_customer){

	return db_fetch_row("SELECT * FROM `tbl_cart` WHERE `id_customer` = $id_customer");
}







function getCartByCustomer($id_customer){

	$datacart = checkCartByCustomer($id_customer);

	if(!empty($datacart)){

		$_SESSION['cart']['info'] =[

			'num_oder' =>$datacart['total_num'],
			'total' =>$datacart['total_price'],
			'id_customer' => $id_customer

			];

		$id_cart = $datacart['id'];
		$dataProductIncart = db_fetch_array("SELECT * FROM `tbl_detail_cart` WHERE `id_cart` = '$id_cart'");
		
		if(!empty($dataProductIncart)){

			foreach ($dataProductIncart as $value) {

				$id_product = $value['id_product'];
				$productes = db_fetch_row("SELECT * FROM `tbl_product` WHERE `id` = $id_product");

				$_SESSION['cart']['buy'][$id_product] = [

					'id' => $value['id_product'],
					'qty' => $value['num_total'],
					'sub_total' => $value['sub_total_price'],
					'code' => $productes['code'],
					'name' => $productes['name'],
					'price' => $productes['price'],
					'image' => $productes['image']
					
					];

			}
		}

	}
}






function checkProductInCart($id){

	return db_fetch_row("SELECT * FROM `tbl_detail_cart` WHERE `id_product` = '$id'");
}








function checkCart($id_customer){

	$data=  db_fetch_row("SELECT * FROM `tbl_cart` WHERE `id_customer` = '$id_customer'");

	if(!empty($data))	return false;

	return true;

}





 ?>