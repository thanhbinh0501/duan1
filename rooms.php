<!DOCTYPE html>
<html>
<head>
	<title>BL Hotel</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Phòng</h2>

  <div class="h-line bg-dark"></div>
 
</div>

<div class="container">
  <div class="row">
   <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">

     <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">BỘ LỌC</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">Tìm Kiếm</h5>
        <label class="form-label">Ngày Nhận Phòng</label>
        <input type="date" class="form-control shadow-none mb-3">
        <label class="form-label">Ngày Trả Phòng</label>
        <input type="date" class="form-control shadow-none">
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">Tiện Nghi</h5>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f1">Wifi</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f2">Điều Hòa</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f3">Tivi</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f4">Máy Sưởi</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f5">Nóng Lạnh</label>
        </div>
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">Khách Hàng</h5>
        <div class="d-flex">
          <div class="me-2">
          <label class="form-label">Người Lớn</label>
          <input type="number" class="form-control shadow-none">
        </div>
        <div>
          <label class="form-label">Trẻ Em</label>
          <input type="number" class="form-control shadow-none">
        </div>
        </div>
      </div>
    </div>
  </div>
</nav>
</div>

<div class="col-lg-9 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Phòng Bình Dân</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Cơ Sở</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Phòng Ngủ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Phòng Tắm
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Ban Công
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Tiện Nghi</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Tivi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Điều Hòa
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Nóng lạnh
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Khách Hàng</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Người Lớn
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Trẻ Em
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">2.000.000 VNĐ mỗi đêm </h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Chi Tiết</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Phòng Bình Dân</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Cơ Sở</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Phòng Ngủ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Phòng Tắm
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Ban Công
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Tiện Nghi</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Tivi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Điều Hòa
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Nóng lạnh
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Khách Hàng</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Người Lớn
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Trẻ Em
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">2.000.000 VNĐ mỗi đêm </h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Chi Tiết</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Phòng Bình Dân</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Cơ Sở</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Phòng Ngủ
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Phòng Tắm
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Ban Công
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
            <h6 class="mb-1">Tiện Nghi</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Tivi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Điều Hòa
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Nóng lạnh
            </span>
          </div>
          <div class="guests">
            <h6 class="mb-1">Khách Hàng</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              5 Người Lớn
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Trẻ Em
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">2.000.000 VNĐ mỗi đêm </h6>
      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt Ngay</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Chi Tiết</a>
    </div>
  </div>
 </div>
</div>


  </div>
</div>



<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>