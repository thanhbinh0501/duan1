<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<style>
        .product {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .thumbnails {
            display: flex;
        }
        .thumbnail {
            padding-top: 10px;
            max-width: 137px;
            cursor: pointer;
        }
        .main-image img {
            max-width: 560px;
        }
        .main-image .prev, .main-image .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .main-image .prev {
            left: 10px;
        }
        .main-image .next {
            right: 10px;
        }
    </style>
</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">XÁC NHẬN ĐẶT PHÒNG</h2>

  <div class="h-line bg-dark"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <div class="product">
        <div class="main-image">
            <img src="images/rooms/IMG_11892.png" alt="Main Image">
        </div>
        <div class="image-gallery">
            <img class="thumbnail" src="images/rooms/IMG_11892.png" alt="Thumbnail 1">
            <img class="thumbnail" src="images/rooms/IMG_39782.png" alt="Thumbnail 2">
            <img class="thumbnail" src="images/rooms/IMG_11892.png" alt="Thumbnail 3">
            <img class="thumbnail" src="images/rooms/IMG_11892.png" alt="Thumbnail 4">
        </div>
    </div>
    <div id="room">
        <h5 id="name-room">Phòng Bình Dân</h5>
        <p id="price">2.000.000 VNĐ</p>
    </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>CHI TIẾT PHÒNG ĐẶT</h5>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Tên</label>
          <input type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Số Điện Thoại</label>
          <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Địa Chỉ</label>
          <input type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
 		  	<label class="form-label" style="font-weight: 500;">Ngày Nhận Phòng</label>
 		  	<input type="date" class="form-control shadow-none" id="check-in-date" oninput="calculateStayAndPrice()">
 		  </div>
 		  <div class="mb-3">
 		  	<label class="form-label" style="font-weight: 500;">Ngày Trả Phòng</label>
 		  	<input type="date" class="form-control shadow-none" id="check-out-date" oninput="calculateStayAndPrice()">
 		  </div>
          <div>
            <p id="stay-days">Số ngày đặt:</p>
            <p id="total-price">Tổng số tiền phải trả:</p>
          </div>
          <button type="submit" class="" style="width: 565px; height:35px; border:none; border-radius:7px; color:white; background-color:#2cc9c9; ">Đặt Ngay</button>
        </form>
      </div>
    </div>
</div>
<script>
        function calculateStayAndPrice() {
            const checkInDate = new Date(document.getElementById("check-in-date").value);
            const checkOutDate = new Date(document.getElementById("check-out-date").value);
            const oneDay = 24 * 60 * 60 * 1000;
            const stayDays = Math.round((checkOutDate - checkInDate) / oneDay);

            const roomPrice = 2000000;
            const totalPrice = roomPrice * stayDays;

            document.getElementById("stay-days").textContent = `Số ngày đặt: ${stayDays} ngày`;
            document.getElementById("total-price").textContent = `Tổng số tiền phải trả: ${totalPrice} VNĐ`;
        }
    </script>
<script>
        const thumbnails = document.querySelectorAll(".thumbnail");
        const mainImage = document.querySelector(".main-image img");

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener("click", () => {
                mainImage.src = thumbnail.src;
            });
        });
    </script>
</body>
</html>