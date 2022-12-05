<?php


function construct() {

	load_model('index');	

}





function indexAction() {
	
	$smartphones = getAllSmartPhone();
	$tablets = getAllTablet();
	$laptops = getAllLaptop();
	$hots = getAllHot();
	$sliders = getAllSlider();
	$_SESSION['product_hot'] = $hots;
	$data = [ $smartphones, $tablets, $laptops, $hots, $sliders];
	load_view('index',$data);
}




function addAction() {

}




function editAction() {

}
