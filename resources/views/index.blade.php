<!DOCTYPE html>
<html>
<head>
	<title>สศอ</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/logo2.png">

    <link href="assets/bootstrap-5.0.1/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sidemenu.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<!-- <body class="main-body app sidebar-mini "> -->
<body class="main-body app sidebar-mini sidenav-toggled">

	<div class="page">
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header p-3 active">
				<a class="desktop-logo active" href="">
					<img src="assets/images/logo3.png" class="main-logo" alt="logo">
				</a>
				<a class="logo-icon mobile-logo py-3 icon-light active" href="">
					<img src="assets/images/logo2.png" class="logo-icon mx-auto" alt="logo">
				</a>
			</div>
			<div class="main-sidemenu">
				<ul class="side-menu">
					<li class="slide">
						<a class="side-menu__item"  href="#">
							<img src="assets/images/icon/entypo_bar-graph.png" class="side-menu__icon">
							<span class="side-menu__label">Dashbord</span>
						</a>
					</li>
					<li class="slide">
						<a class="side-menu__item"  href="#">
							<img src="assets/images/icon/fluent_people-20-filled.png" class="side-menu__icon">
							<span class="side-menu__label">name</span>
						</a>
					</li>
					<li class="slide">
						<a class="side-menu__item"  href="#">
							<img src="assets/images/icon/jam_write-f.png" class="side-menu__icon">
							<span class="side-menu__label">name</span>
						</a>
					</li>
					<li class="slide">
						<a class="side-menu__item"  href="#">
							<img src="assets/images/icon/mdi_email-newsletter.png" class="side-menu__icon">
							<span class="side-menu__label">name</span>
						</a>
					</li>

				</ul>
			</div>
		</aside>
		<div class="main-content app-content">

			<nav class="navbar fixed-top navbar-st-1">
			  <div class="container-fluid">
			    <div class="app-sidebar__toggle mx-0" data-toggle="sidebar">
					<a class="open-toggle" href="#"></i></a>
					<a class="close-toggle" href="#"></a>
				</div>


			    <div class="dropdown">
				  <a class="btn  dropdown-toggle-1 pe-5" href="#" role="button" id="" data-bs-toggle="dropdown" aria-expanded="false">
				  	<div class="d-flex align-items-center">
				  		<img src="assets/images/Avatar.png" class="Avatar">
				  		<div class="text-color-6 fs-14 spacing-1 ms-2">พีรยา ปัญญาโชจน์</div>
				  	</div>
				  </a>
				  <ul class="dropdown-menu" >
				    <li><a class="dropdown-item text-color-6 fs-14 spacing-1 ms-2" href="#">ออกจากระบบ</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
			<div class="container-fluid">

				<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
				  <ol class="breadcrumb fs-16">
				    <li class="breadcrumb-item "><a href="#" class="text-color-7 fw-500 text-decoration-none">Dashbord</a></li>
				    <li class="breadcrumb-item"><a href="#" class="fw-500 text-color-8 text-decoration-none">โครงการทั้งหมด</a></li>
				    <li class="breadcrumb-item active text-color-1 fw-500" aria-current="page">เพิ่มโครงการใหม่</li>
				  </ol>
				</nav>

				<div class="row">
					<div class="col">
						<div class="card card-st-3">
							<div class="card-body p-4">
								<div class="fs-24 mb-2">
									<span class="fw-bold text-color-1">ข้อเสนอโครงการ</span>
									<span class="text-color-9">(หน้า 1/6)</span>
								</div>
								<div class="fs-15 mb-5 text-color-8">กรุณากรอกข้อมูลเพื่อสร้างข้อเสนอโครงการ </div>


								<form class="needs-validation" novalidate>


									<div class="mb-3 row align-items-lg-center">
										<label class=" fs-18 col-lg-5 text-color-1 fw-bold">1.ชื่อโครงการ <span class="text-danger">*</span></label>
										<div class="col-lg-6">
											<input type="text" name="" class="form-control form-st-1" required="" placeholder="กรุณาระบุชื่อโครงการ">
										</div>
									</div>

									<div class="mb-3 row align-items-lg-center">
										<label class=" fs-16 col-lg-5 text-color-8 fw-500">
											<span class="ps-4">งบประมาณ (บาท)</span>
											<span class="text-danger">*</span>
										</label>
										<div class="col-lg-6">
											<input type="text" name="" class="form-control form-st-1" required="" placeholder="กรุณาระบุงบประมาณ">
										</div>
									</div>

									<div class="mb-3 row align-items-lg-center">
										<label class="  col-lg-5">
											<div class="fs-16 fw-500 text-color-8 ps-4 ">ความเขื่อมโยงกับแผนบูรณาการฯ <span class="text-danger">*</span></div>
											<div class="fs-14 text-color-9 ps-4">(อ้างอิงตามแผนภาพความเชื่อมโยง)</div>
										</label>
										<div class="col-lg-6">
											<select class="form-control form-st-1 form-select select2" data-placeholder="คำนำหน้าชื่อ" >
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
					<div class="col-auto">
						<div class="card card-st-3">
							<div class="card-body p-3 pe-4">
								<ul id="progress" class="ps-2">
									<li><div class="node activated"></div><p>ชื่อโครงการ</p></li>
									 <li><div class="divider activated grey"></div></li>
								    <li><div class="node activated"></div><p>ความเชื่อมโยงฯ</p></li>
								    <li><div class="divider  grey"></div></li>
								    <li><div class="node  "></div><p>แผนปฏิรูปประเทศ</p></li>
								    <li><div class="divider grey"></div></li>
								    <li><div class="node "></div><p>ความสอดคล้องอื่นๆ</p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>




			</div>
		</div>

	</div>
	<!-- End Page -->

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="assets/plugins/moment/moment.js"></script>
	<script src="assets/bootstrap-5.0.1/js/bootstrap.bundle.min.js" ></script>
	<script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugins/side-menu/sidemenu.js"></script>
	<script src="assets/plugins/sidebar/sidebar.js"></script>
	<script src="assets/plugins/sidebar/sidebar-custom.js"></script>
	<script src="assets/plugins/select2/js/select2.min.js" ></script>




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
