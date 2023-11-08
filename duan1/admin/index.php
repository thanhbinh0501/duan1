<?php
include "../model/pdo.php";
include "../model/loaiphong.php";

include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhs_loaiphong':
            $result = list_loaiphong();
            include "loaiphong/danhsachloaiphong.php";
            break;
        case 'themloaiphong':
            include "loaiphong/themloaiphong.php";
            break;
        case 'addloaiphong':
            // kiểm tra người dùng có kick vào thêm hay o
            if (isset($_POST['addloaiphong']) && ($_POST['addloaiphong'])) {
                $ten_loaiphong = $_POST['ten_loaiphong'];
                if (check_loaiphong($ten_loaiphong)) {
                    $loi["loi"] = "Tên Loại phòng đã tồn tại.";
                } else {
                    if (empty($loi)) {
                        them_loaiphong($ten_loaiphong);
                        $thongbao = 'Thêm thành công';
                    }
                }
            }
            $result = list_loaiphong();
            include "loaiphong/themloaiphong.php";
            break;
        case 'xoa_loaiphong':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $xoaId = $_GET['id'];
                xoa_loaiphong($xoaId);
            }
            $result = list_loaiphong();
            include "loaiphong/danhsachloaiphong.php";
            break;
        case 'sua_loaiphong':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $result = sua_loaiphong($id);
            }
            include "loaiphong/capnhat.php";
            break;
        case 'capnhatloaiphong':
            if (isset($_POST['capnhatloaiphong']) && ($_POST['capnhatloaiphong'])) {
                $id = $_POST["id"];
                $ten_loaiphong = $_POST["ten_loaiphong"];
                $loaiphong_check = $_POST["loai_phong"];
                if (empty($ten_loaiphong)) {
                    $loi["loi"] = "Nhập tên loại hàng";
                    $result = sua_loaiphong($id);
                    include "loaiphong/capnhat.php";
                }
                if (empty($loi)) {
                    if ($ten_loaiphong == $loaiphong_check) {
                        capnhat_loaiphong($ten_loaiphong, $id);
                        echo '<script>alert("Cập nhật thành công.");</script>';
                        $result = list_loaiphong();
                        include "loaiphong/danhsachloaiphong.php";
                    } else {
                        if (check_loaiphong($ten_loaiphong)) {
                            $loi["loi"] = "Tên Loại phòng đã tồn tại.";
                            $result = sua_loaiphong($id);
                            include "loaiphong/capnhat.php";
                        } else {
                            if (empty($loi)) {
                                capnhat_loaiphong($ten_loaiphong, $id);
                                echo '<script>alert("Cập nhật thành công.");</script>';
                                $result = list_loaiphong();
                                include "loaiphong/danhsachloaiphong.php";
                            }
                        }
                    }
                }
            }
            break;
        case 'danhsa_tiennghi':

            break;
        case 'themtiennghi':
            if (isset($_POST['addtiennghi']) && ($_POST['addtiennghi'])) {
            }
            include "tiennghi/themtiennghi.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
