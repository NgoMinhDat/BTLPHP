<?php 

function construct() {

	load_model('index');
}







function indexAction(){

	$data=array();
	if(!empty($_SESSION['id_customer'])){
		$data[] = getUserById($_SESSION['id_customer']);
	}
	load_view('index',$data);

}




function storyAction(){
	$data = array();
	if(!empty($_SESSION['id_customer']))
	$data = getListOrder($_SESSION['id_customer']);
	load_view('story',$data);

}



function detailStoryAction(){
	$id = $_GET['idOrder'];
	$code = $_GET['code'];
	$data = getListOrderByIDOrder($id);
	for ($i = 0; $i<count($data) ;$i++) {

		$product = getProductByID($data[$i]['id_product']);
		$data[$i]['image'] = $product['image'];
		$data[$i]['name'] = $product['name'];
		$data[$i]['price'] = $product['promotional_price'];
		$data[$i]['code'] = $product['code'];

	}
	$data[count($data)] = $code;
	load_view('detail_story',$data);
}







function checkoutAction(){

	if(!empty($_POST['btn_submit'])){
		
			if(isset($_SESSION['id_customer'])){

				if(!empty($_POST['payment_method']) && !empty($_SESSION['cart']['buy'])){

					$custom_id = $_SESSION['id_customer'];
					$total_price = $_SESSION['cart']['info']['total'];
					$total_num_product = $_SESSION['cart']['info']['num_oder'];
					$create_date = date("d/m/Y",time());
					$time =time();
					$code = $_SESSION['username']."($time)";
					$note = $_POST['note'];
					$payment_method = $_POST['payment_method'];
					$status = "chờ xác nhận";

					$id_customer = $_SESSION['id_customer'];
					$data_cart = db_fetch_row("SELECT * FROM `tbl_cart`WHERE `id_customer` = $id_customer");
					$id_cart = $data_cart['id'];
					insertOrder($custom_id, $total_price, $total_num_product,$create_date, $note, $payment_method, $status,$id_cart,$time,$code);
					$data_order = db_fetch_row("SELECT * FROM `tbl_order` WHERE `time` = '$time'");
					$id_order = $data_order['id'];

					foreach ($_SESSION['cart']['buy'] as  $value) {

						inserOderDetail($id_order , $value['id'] , $value['qty'], $value['sub_total']);
					}

					/// hàm send mail đơn hàng
					sendMail($id_order);
					
					/////////////////////////

					deletecart();
					unset($_SESSION['cart']['buy']);
					$_SESSION['success'] = true;


					header('location: ?modules=checkouts&controllers=index&action=story');

				}

				else if(!empty($_POST['payment_method']) &&empty($_SESSION['cart']['buy'])){

							$_SESSION['messBuy'] = true;
						header('location: ?modules=checkouts&controllers=index&action=index');
					}
					
				else {
					$_SESSION['messa'] = true;
					
					header('location: ?modules=checkouts&controllers=index&action=index');
				}

			}else{
				$_SESSION['mess'] = true;
				
				header('location: ?modules=users&controllers=index&action=index');
			}

	}
}





 ?>