<?php
    
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }else{
        $action = '';
    }

    switch($action) { // đầu tiên sẽ chạy vào file action
        case 'add': {
            if(isset($_POST['add_user'])) {
                $fullname = $_POST['fullname']; // lấy dữ liệu từ view để truyền lên model
                $username = $_POST['username'];
                $password = $_POST['password'];
                if($db->insertData($fullname,$username,$password)) {
                    // header('location: index.php?controller=user'); // redirect tới trang chủ
                    $success[] ='add_success'; // truyền 1 mảng báo thành công 
                }
            }
            require_once('View/add_user.php');
            break;
        }
        case 'edit': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tblTable = "user";
                $user = $db->getDataById($tblTable, $id);
            }
            if(isset($_POST['edit_user'])){
                // lấy dữ liệu từ view để truyền lên model
               $fullname = $_POST['fullname']; // lấy dữ liệu từ view để truyền lên model
               $username = $_POST['username'];
               $password = $_POST['password'];
               if($db->updateData($id, $fullname, $username, $password)){ 
                   header('location: index.php?controller=user');
               }
           }
            require_once('View/edit_user.php');
            break;
        }
        case 'delete': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tblTable = "user";
                if($db->delete($tblTable, $id)){
                    header('location: index.php?controller=user');
                } 
            }else{
                header('location: index.php?controller=user');
            }
            break;
        }
        default:{
            $tlbTable ="user";
            $data = $db->getALlData($tlbTable);
            require_once('View/list.php');
            break;
        }
    }
    
?>