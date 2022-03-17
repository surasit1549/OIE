<!DOCTYPE html>
<html>
<head>
	<title>สศอ</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/logo2.png">

    <link href="assets/bootstrap-5.0.1/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="bg-st-1">

	<nav class="navbar fixed-top bg-white py-0">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	    	<img src="assets/images/Logo4.png" width="253">
	    </a>
	  </div>
	</nav>

	<div class="box-st2 d-flex justify-content-center align-items-center " >
		<div class=" card-st-2 my-lg-5 my-2">
			<div class="card-body py-5 ">

				<div class="mb-5">
					<ul class="steps">
						<li class="step-1 active ">
							<div class="step-icon"></div>
							<div class="step-name">กรอกข้อมูล</div>
						</li>
						<li class="step-2 active ">
							<div class="step-icon"></div>
							<div class="step-name">ตรวจสอบข้อมูล</div>
						</li>
						<li class="step-3  ">
							<div class="step-icon"></div>
							<div class="step-name">ยืนยันตัวตน</div>
						</li>
					</ul>
				</div>
				<div class="px-0 px-lg-5">

					<div class="text-color-1 fw-bold fs-32 fs-m-24 mb-4 pt-0 pt-lg-4">ตรวจสอบข้อมูลของท่าน</div>
					<div class="fs-16 mb-5">กรุณาตรวจสอบข้อมูลการลงทะเบียนของท่าน</div>


					<form class="needs-validation" novalidate>


						<div class="mb-4 mb-lg-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5 mb-2 mb-lg-0">กระทรวง</label>
							<div class="col-lg-6">
								<div class="fs-15 text-color-3">กระทรวงการต่างประเทศ</div>

							</div>
						</div>

						<div class="mb-4 mb-lg-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5 mb-2 mb-lg-0">กรมหรือเทียบเท่า </label>
							<div class="col-lg-6">
								<div class="fs-15 text-color-3">สำนักงานปลัดกระทรวงการต่างประเทศ</div>
							</div>
						</div>

						<div class="mb-4 mb-lg-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5 mb-2 mb-lg-0">เลขบัตรประชาชน </label>
							<div class="col-lg-6">
								<div class="fs-15 text-color-3">1-1035-23568-88-0</div>
							</div>
						</div>

						<div class="mb-4 mb-lg-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5 mb-2 mb-lg-0">ชื่อ - นามสกุล</label>
							<div class="col-lg-6">
								<div class="fs-15 text-color-3">นาย กริษณพงศ์ หงส์บังแหน</div>
							</div>
						</div>


						<div class="mb-4 mb-lg-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5 mb-2 mb-lg-0">ตำแหน่งงาน</label>
							<div class="col-lg-6">
								<div class="fs-15 text-color-3">เจ้าหน้าที่บันทึกข้อมูลโครงการ</div>
							</div>
						</div>

						<div class="mb-4 mb-lg-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5 mb-2 mb-lg-0">เบอร์โทรศัพท์มือถือ </label>
							<div class="col-lg-6">
								<div class="fs-15 text-color-3">0895915542</div>
							</div>
						</div>

						<div class="mb-4 mb-lg-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5 mb-2 mb-lg-0">เบอร์โทรศัพท์สำนักงาน </label>
							<div class="col-lg-6">
								<div class="fs-15 text-color-3">029955511</div>
							</div>
						</div>

						<div class="mb-4 mb-lg-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5 mb-2 mb-lg-0">LINE ID </label>
							<div class="col-lg-6">
								<div class="fs-15 text-color-3">kritpong1990</div>
							</div>
						</div>

						<div class="mb-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5 mb-2 mb-lg-0">อีเมล   </label>
							<div class="col-lg-6">
								<div class="fs-15 text-color-3">kritsanaphong@test.co.th</div>
							</div>
						</div>



						<div class="text-center d-flex justify-content-center flex-wrap mb-3 pt-lg-4">
							<button class="btn btn-st-4 mx-2 mb-3 order-1 order-sm-0">แก้ไขข้อมูล</button>
							<button class="btn btn-st-2 mx-2 mb-3 order-0 order-sm-1">ขั้นตอนถัดไป</button>
						</div>

						<div class="text-center">
							<button type="button"  class="btn btn-link text-color-3 fs-15" data-bs-toggle="modal" data-bs-target="#confirmModal">กลับสู่หน้าหลัก</button>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="confirmModal" tabindex="-1"  aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" style="">
	    <div class="modal-content " style="border-radius: 15px;">

	      <div class="modal-body pb-4">
	      	<div class="text-end">
	      		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      	</div>

	        <div class="text-center text-color-1 fs-18 fw-500 pt-4 mb-2">ยืนยันการกลับสู่หน้าหลัก ?</div>

	        <div class="fs-14 text-center fw-500 text-color-4 mb-5">ข้อมูลที่ท่านกรอกจะไม่ได้รับการบันทึก</div>

	        <div class="text-center d-flex flex-wrap justify-content-center">
	        	<button type="button" class="btn btn-st-3 mx-2 mb-3 order-1 order-sm-0" data-bs-dismiss="modal">ยกเลิก</button>
	        	<a href="" class="btn btn-st-2 mx-2  mb-3 order-0 order-sm-1">ยืนยัน</a>
	        </div>

	      </div>
	    </div>
	  </div>
	</div>




	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="assets/bootstrap-5.0.1/js/bootstrap.bundle.min.js" ></script>
	<script src="assets/plugins/select2/js/select2.min.js" ></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<script type="text/javascript">

		(function () {
		  'use strict'
		  var forms = document.querySelectorAll('.needs-validation')
		  Array.prototype.slice.call(forms)
		    .forEach(function (form) {
		      form.addEventListener('submit', function (event) {
		        if (!form.checkValidity()) {
		          event.preventDefault()
		          event.stopPropagation()
		        }

		        form.classList.add('was-validated')
		      }, false)
		    })
		})()
	</script>



</body>
</html>
