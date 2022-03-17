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
						<li class="step-2  ">
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

					<div class="text-color-1 fw-bold fs-32 fs-m-24 mb-4 pt-0 pt-lg-4">ลงทะเบียนผู้ใช้งาน</div>
					<div class="fs-16 mb-5">กรุณากรอกข้อมูลการลงทะเบียน</div>


					<form class="needs-validation" novalidate>


						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">กระทรวง</label>
							<div class="col-lg-6">
								<select class="form-control form-st-1 form-select select2" data-placeholder="กรุณาเลือกกระทรวง" >
									<option value=""></option>
									<option value="1">กระทรวง 1</option>
								</select>

							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">กรมหรือเทียบเท่า <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<select class="form-control form-st-1 form-select select2" data-placeholder="กรุณาเลือกกรมหรือเทียบเท่า" required="">
									<option value=""></option>
									<option value="1">กรม 1</option>
								</select>

							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">เลขบัตรประชาชน <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" name="" class="form-control form-st-1 validateNumber" required="" placeholder="กรอก" minlength="13" maxlength="13">
							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">คำนำหน้าชื่อ</label>
							<div class="col-lg-6">
								<select class="form-control form-st-1 form-select select2" data-placeholder="คำนำหน้าชื่อ" >
									<option value=""></option>
									<option value="1">กรม 1</option>
								</select>

							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">ชื่อ <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" name="" class="form-control form-st-1" required="" placeholder="กรอกชื่อ">
							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">นามสกุล <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" name="" class="form-control form-st-1" required="" placeholder="กรอกนามสกุล">
							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">ตำแหน่งงาน</label>
							<div class="col-lg-6">
								<input type="text" name="" class="form-control form-st-1"  placeholder="กรอกชื่อตำแหน่งงาน">
							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">เบอร์โทรศัพท์มือถือ <span class="text-danger">*</span></label>
							<div class="col-lg-6">
								<input type="text" name="" class="form-control form-st-1 validateNumber" required="" placeholder="กรอกเบอร์โทรศัพท์มือถือ" minlength="10" maxlength="10">
							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">เบอร์โทรศัพท์สำนักงาน </label>
							<div class="col-lg-6">
								<input type="text" name="" class="form-control form-st-1 " required="" placeholder="กรอกเบอร์โทรศัพท์สำนักงาน">
							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">LINE ID </label>
							<div class="col-lg-6">
								<input type="text" name="" class="form-control form-st-1 "  placeholder="กรอก Line ID">
							</div>
						</div>

						<div class="mb-2 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">อีเมล  <span class="text-danger">*</span> </label>
							<div class="col-lg-6">
								<input type="email" name="" class="form-control form-st-1 " required="" placeholder="กรอกอีเมล">

							</div>
						</div>

						<div class="mb-3 row">
							<div class="col-lg-5"></div>
							<div class="col-lg-6">
								<div class="fs-14">หมายเหตุ : อีเมลที่กรอกจะถูกใช้เป็น Username สำหรับการเข้าใช้งานระบบ <span class="text-danger">*</span></div>
							</div>
						</div>

						<div class="mb-2 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">รหัสผ่าน  <span class="text-danger">*</span> </label>
							<div class="col-lg-6">
								<div class="position-relative">
									<input type="password" name="" class="form-control form-st-1" required="" placeholder="กรอกรหัสผ่าน">
									<button type="button" class="btn btn-change-type-password"></button>
								</div>

							</div>
						</div>

						<div class="mb-3 row">
							<div class="col-lg-5"></div>
							<div class="col-lg-6">
								<div class="fs-14">รหัสผ่านควรมีความยาว 8 ตัวขึ้นไป และประกอบด้วย พิมพ์เล็ก พิมพ์ใหญ่ ตัวเลข และอักขระพิเศษ</div>
							</div>
						</div>

						<div class="mb-3 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">ยืนยันรหัสผ่าน  <span class="text-danger">*</span> </label>
							<div class="col-lg-6">
								<div class="position-relative">
									<input type="password" name="" class="form-control form-st-1" required="" placeholder="กรอกรหัสผ่านอีกครั้ง ">
									<button type="button" class="btn btn-change-type-password c2"></button>
								</div>

							</div>
						</div>

						<div class="mb-5 row align-items-lg-center">
							<label class=" fs-16 col-lg-5">ยืนยันตัวตน <span class="text-danger">*</span> </label>
							<div class="col-lg-6">
								<div class="g-recaptcha" data-sitekey="__Site_key__"></div>
							</div>
						</div>


						<div class="text-center d-flex justify-content-center flex-wrap">
							<button class="btn btn-st-3 mx-2 mb-3 order-1 order-sm-0">ยกเลิก</button>
							<button class="btn btn-st-2 mx-2 mb-3 order-0 order-sm-1">ขั้นตอนถัดไป</button>
						</div>

					</form>

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
	<script type="text/javascript">
		$('.btn-change-type-password').on('click',function(){
			var input = $(this).closest('div').find('input');
			var type = input.attr('type')
			if(type == 'text'){
				input.attr('type','password')
			}else{
				input.attr('type','text')
			}
		})
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
		    $('.select2').select2({
		    	minimumResultsForSearch: -1,
		    	"language": {
				    "noResults": function(){
				        return '<div class="fs-12 py-2">ไม่พบข้อมูล</div>';
				    }
				},
			    escapeMarkup: function (markup) {
			        return markup;
			    }
		    });
		});
	</script>



</body>
</html>
