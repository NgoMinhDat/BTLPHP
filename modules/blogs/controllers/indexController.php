<?php 


function construct() {

	load_model('index');
}







function listAction(){

	$data_tmp = getAll();

	$page;
	if(!empty($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page =1;
	}
	
	$numBlog = count($data_tmp);
	$blogOnPage = 5;
	$num = ceil($numBlog/$blogOnPage);
	if(!empty($_GET['page']) && $_GET['page']>$num){
		$page =$num;
	}
	$start = ($page - 1) * $blogOnPage;
	$res =[];
	for ($i=$start; $i < $start+$blogOnPage; $i++) { 
		if(isset($data_tmp[$i]))
        $res[] = $data_tmp[$i];
	};

	
	$data = [$res, $num, $page];
	load_view('list',$data);;
}






function detailAction(){
	
	$id = $_GET['id'];
	$data = getBlogById($id);
	load_view('detail',$data);;
}



 ?>