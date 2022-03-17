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

				<div class="text-center spacing-1 fs-18 text-color-1 mb-2">ลืมรหัสผ่านของคุณใช่หรือไม่ ?</div>
				<div class="mb-5 text-center text-white spacing-1 fs-14">คุณต้องการรับรหัสรักษาความปลอดภัยของคุณด้วยวิธีการใด </div>

				<div class="email check-type mb-3">
					<div class="form-check mb-2">
					  <input class="form-check-input form-check-channel" type="radio" name="channel" id="checkemail" checked="">
					  <label class="form-check-label fs-14 text-white spacing-1" for="checkemail">อีเมล</label>
					</div>
					<div class="ps-4">
						<input type="email" name="" class="form-control form-st-1 text-center" placeholder="กรอกอีเมล">
					</div>
				</div>

				<div class="phone check-type mb-5">
					<div class="form-check mb-2">
					  <input class="form-check-input form-check-channel" type="radio" name="channel" id="checkphonenumber">
					  <label class="form-check-label fs-14 text-white spacing-1" for="checkphonenumber">เบอร์โทรศัพท์</label>
					</div>
					<div class="ps-4">
						<input type="tel" name="" class="form-control form-st-1 text-center validateNumber" placeholder="กรอกเบอร์โทรศัพท์"  maxlength="10" minlength="10">
					</div>
				</div>



				<div class="text-center">
					<button class="btn btn-st-1">ยืนยัน</button>
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
	<script type="text/javascript">
		function checkchannel(){
			$('.form-check-channel').closest('.check-type').find('.form-st-1').addClass('d-none').attr('required',false)
			$('.form-check-channel:checked').closest('.check-type').find('.form-st-1').removeClass('d-none').attr('required',true)
		}
		checkchannel();
		$('.form-check-channel').on('change',function (){
			checkchannel();
		})
	</script>
	<script type="text/javascript">
		function validateNumber(event) {
            var key = window.event ? event.keyCode : event.which;
            if (event.keyCode === 8) {
                return true;
            } else if ( key < 48 || key > 57 ) {
                return false;
            } else {
                return true;
            }
        };
        $(document).ready(function(){
            $('.validateNumber').keypress(validateNumber);
        });
	</script>



</body>
</html>
