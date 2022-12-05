<?php

function construct() {

    load_model('index');

}

// lấy thông tin tài khoản admin
function infoAction(){

    $data = getUserByUsername($_SESSION['username'],$_SESSION['password']);
    load_view('info',$data);
}


//  load view hiển thị màn thay đổi mật khẩu
function passAction(){

    load_view('pass');
}

// đổi mật khẩu tài khoản admin
function changepassAction(){

    if(!empty($_POST['btn_submit'])){
        $oldPass =  $_POST['pass_old'];
        $newPass1 = $_POST['pass_new'];
        $newPass2 = $_POST['confirm_pass'];
        if(md5($oldPass) == $_SESSION['password']){
            if($newPass1 == $newPass2 &&$oldPass != $newPass2){
                if(changePass(md5($newPass1),md5($oldPass))==1){
                    load_view('pass');
                    echo " <script type='text/javascript'> alert('Cập Nhật Thành Công');</script>";
                }
                else{
                    load_view('pass');
                    echo " <script type='text/javascript'> alert('Cập Nhật Không Thành Công');</script>";
                }
            }
            else{
                    load_view('pass');
                    echo " <script type='text/javascript'> alert('Mật Khẩu Mới Không Khớp, Hoặc Bị Trùng Mật Khẩu Cũ');</script>";
                }
        }
        else{
                    load_view('pass');
                    echo " <script type='text/javascript'> alert('Mật Khẩu Cũ Không Đúng');</script>";
                }
            
    }  
}

// update dử liệu thông tin tài khoản admin
function updateAction(){

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $data = [
        [
        'fullname' => $fullname,
        'username' => $username,
        'email' => $email,
        'phone' => $phone,
        'address' =>$address
        ]
    ];
    $num = updateUser($fullname, $username,$email,$phone,$address);
    if($num ==1){
        load_view('info',$data);
        echo " <script type='text/javascript'> alert('Cập Nhật Thành Công');</script>";
    }
    else {
        load_view('info',$data);
        echo " <script type='text/javascript'> alert('Thông Tin Đã Tồn Tại');</script>";
    }
}

// đăng xuất tải khoản
function logoutAction() {

    unset($_SESSION['is_login']);
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['fullname']);
    header('location:?modules=users&controller=index&action=login');

}

// đăng nhập tài khoản admin
function loginAction() {

    $err = [];
    $username;
    $password;
    $aleart=[];
    
    if(!empty($_POST['SignIn'])){
        if(!empty($_POST['username'])){
            $username = $_POST['username'];
        }
        else{
            $err['username'] = "username lỗi";
        }
        if(!empty($_POST['password'])){
            $password = $_POST['password'];
        }
        else{
            $err['password'] = "password lỗi";
        }
    }

    if(!empty($username) && !empty($password)){
        $password =  md5($password);
        if(checkLogin($username, $password)){
            $data = getUserByUsername($username,$password);
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $data[0]['fullname'];
            $_SESSION['password'] = $password;
            header('location:?modules=home');
        }
        else {
             echo " <script type='text/javascript'> alert('Đăng Nhập Thất Bại');</script>";
        }
    }
    load_view('login');

}
