<?php
    include "../../dao/global.php";
    include "../../dao/pdo.php";
    include "../../dao/danhmuc.php";
    include "../../dao/user.php";
    include "../../dao/sanpham.php";

    include "header.php";
    
    if(isset($_GET['pg'])){
        $pg = $_GET['pg'];
        switch ($pg) {
            case 'products':
                // xóa
                if(isset($_GET['del'])&&($_GET['del']>0)){
                    $id = $_GET['del'];
                    $ctsp = get_sp_by_id($id);
                    if(is_array($ctsp)){
                            // lấy hình ảnh
                            extract($ctsp);
                            $img_path = IMG_PATH_ADMIN.$img;
                            if(is_file($img_path)){
                                unlink($img_path);
                            }
                            sanpham_delete($id);
                    }
                    
                }
                // show
                if(isset($_POST['timkiem'])){
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if(!isset($_GET['page'])){
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                $soluongsp = 6;
                $dssp = get_dssp_admin($kyw, $page, $soluongsp);
                $tongsosp = get_dssp_all();
                $hienthisotrang = hien_thi_so_trang($tongsosp, $soluongsp);
                include "products.php";
                break;
            case 'products_add':
                if(isset($_POST['btnadd'])){
                    $id_category = $_POST['id_category'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    // lấy tên file
                    $img = basename($_FILES['img']['name']);
                    // upload file
                    $target_file = IMG_PATH_ADMIN.$img;
                    move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                    // insert db
                    sanpham_insert($id_category,$name, $price, $img); 
                    $tb = "Bạn đã thêm thành công!";
                }
                $dsdm = danhmuc_all();
                include "products_add.php";
                break;
            case 'updateproduct':
                if(isset($_POST['updateproduct'])){
                    $id_category = $_POST['id_category'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $id = $_POST['id'];
                    // lấy tên file
                    $img = basename($_FILES['img']['name']);
                    if($img!=""){
                        // upload file
                        $target_file = IMG_PATH_ADMIN.$img;
                        move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                    } else {
                        $img = "";
                    }
                    // insert db
                    sanpham_update($id_category,$name, $price, $img, $id); 
                }
                $dssp = get_dssp_new(100);
                include "products_update.php";
                break;
            case 'products_update':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    $sp = get_sp_by_id($id);
                }
                $dsdm = danhmuc_all();
                include "products_update.php";
                break;
            case 'categories':
                $danhmuclist = danhmuc_all();
                include "categories.php";
                break;
            case 'categories_add':
                if(isset($_POST['btnadd'])){
                    $name = $_POST['name'];
                    category_insert($name);
                    $tb = "Bạn đã thêm thành công!";
                    $danhmuclist = danhmuc_all();
                }
                include "categories_add.php";
                break;
            case 'delcat':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id = $_GET['id'];
                    category_delete($id);
                }
                $danhmuclist = danhmuc_all();
                include "categories.php";
                break;
            case 'users':

                $dsuser = show_user();
                include "users.php";
                break; 
            case 'users_add':
                if(isset($_POST['btnadd'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $name = $_POST['name'];
                    $diachi = $_POST['diachi'];
                    $dienthoai = $_POST['dienthoai'];
                    $email = $_POST['email'];
                    users_insert($username, $password);
                    $tb = "Bạn đã thêm thành công!";
                }
                include "users_add.php";
                break;
            case 'back':
                header("location: ../../index.php");
                break;
            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }

    include "footer.php";
?>