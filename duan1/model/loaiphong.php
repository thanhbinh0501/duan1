<?php
function them_loaiphong($ten_loaiphong)
{
    $sql = "INSERT INTO loai_phong (ten_loai) VALUES ('$ten_loaiphong')";
    pdo_execute($sql);
}
function xoa_loaiphong($xoaId)
{
    // $sql = "SELECT * FROM hang_hoa WHERE ma_loai='$xoaId'";
    // $result = pdo_query_one($sql);
    // extract($result);
    // $sql = "DELETE FROM img_chitietsanpham WHERE idma_sp = $ma_hh";
    // pdo_execute($sql);
    // $sql = "DELETE FROM binh_luan WHERE ma_hh = $ma_hh";
    // pdo_execute($sql);
    // $sql = "DELETE FROM chi_tiet_don_hang WHERE ma_sp_donhang  = $ma_hh";
    // pdo_execute($sql);
    // $sql = "DELETE FROM hang_hoa WHERE ma_loai = $xoaId";
    // pdo_execute($sql);
    $sql = "DELETE FROM loai_phong WHERE ma_loai = $xoaId";
    pdo_execute($sql);
}
function list_loaiphong()
{
    $sql = "SELECT * FROM loai_phong order by ma_loai desc ";
    $result = pdo_query($sql);
    return $result;
}
function sua_loaiphong($id)
{
    $sql = "SELECT * FROM loai_phong WHERE ma_loai='$id'";
    $result = pdo_query_one($sql);
    return $result;
}
function capnhat_loaiphong( $ten_loaiphong, $id)
{
    $sql = "UPDATE loai_phong SET ten_loai='$ten_loaiphong' WHERE ma_loai= '$id'";
    pdo_execute($sql);
}

function check_loaiphong($ten_loaiphong)
{
    $ten_loaiphong = addslashes($ten_loaiphong);
    $sql = "SELECT count(*) FROM loai_phong WHERE ten_loai = '$ten_loaiphong'";
    return pdo_query_value($sql, $ten_loaiphong) > 0;
}
