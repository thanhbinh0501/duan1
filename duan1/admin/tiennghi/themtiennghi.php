<main class="admin__main1">
    <div class="form-container">
        <h1 class="form-title">THÊM TIỆN NGHI</h1>
        <form action="index.php?act=addloaiphong" method="POST" enctype="multipart/form-data" class="add-loai-hang-form">
            <div class="form-group">
                <input type="hidden" id="malh_bottom" name="ma_lh" class="forminput">
            </div>
            <div class="form-group">
                <label for="tenlh_bottom" class="formlabel">Tên tiện nghi:</label>
                <input type="text" id="tenlh_bottom" name="ten_tiennghi" class="forminput" required>
                <span class="form-error"><?php echo isset($loi["loi"]) ? $loi["loi"] : "" ?></span>
            </div>
            <div class="form-group">
                <label for="tenlh_bottom" class="formlabel">Hình ảnh:</label>
                <input type="file" id="tenlh_bottom" name="ten_tiennghi" class="forminput" required>
                <span class="form-error"><?php echo isset($loi["loianh"]) ? $loi["loianh"] : "" ?></span>
            </div>
            <span> <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?></span> <br>
            <input type="submit" name="addtiennghi" class="form-button" value="Lưu thông tin">

        </form>


        <p><a href="index.php?act=danhs_loaiphong" class="form-link">Xem danh sách Loại phòng</a></p>
    </div>
</main>