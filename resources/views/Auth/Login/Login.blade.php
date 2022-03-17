<!DOCTYPE html>
<html>
<head>
	<title>สศอ</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/images/logo2.png">

    <link href="assets/bootstrap-5.0.1/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="assets/plugins/splide-2.4.21/dist/css/splide.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="bg-st-1">

	<div class="box-st1 d-flex justify-content-center align-items-center">
		<div class="card-st-1">
			<form class="needs-validation" novalidate>
				<div class="text-center mb-5 pb-4">
					<img src="assets/images/logo.png" class="logo">
				</div>
				<div class="mb-3">
					<label class="text-white fs-12">อีเมล</label>
					<input type="email" name="" class="form-control form-st-1" required="">
				</div>
				<div class="mb-3">
					<label class="text-white fs-12">รหัสผ่าน</label>
					<div class="position-relative">
						<input type="password" name="" class="form-control form-st-1" required="">
						<button type="button" class="btn btn-change-type-password"></button>
					</div>

				</div>

				<div class="d-flex align-items-center flex-wrap mb-4">
					<div class="form-check form-switch me-auto d-flex align-items-center">
					  <input class="form-check-input" type="checkbox" id="remember">
					  <label class="form-check-label fs-14 text-white spacing-1 ms-2 mb-0" for="remember">จดจำบัญชีผู้ใช้งาน</label>
					</div>
					<a href="" class="text-color-2 fs-14 spacing-1 ">ลงทะเบียน</a>
				</div>


				<div class="text-center">
					<button class="btn btn-st-1">เข้าสู่ระบบ</button>
				</div>
				<hr class="hr-1 my-4">

				<div class="text-center">
					<span class="fs-16 text-white spacing-1 me-2">คุณยังไม่มีบัญชีใช่ไหม?</span>
					<a href="" class="text-color-1 fs-16 spacing-1 ">ลงทะเบียน</a>
				</div>

			</form>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="assets/bootstrap-5.0.1/js/bootstrap.bundle.min.js" ></script>

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



</body>
</html>
