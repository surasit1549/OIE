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

				<div class="text-center spacing-1 fs-18 text-color-1 fw-500 mb-3">เราได้ส่งรหัส OTP เพื่อยืนยันการตั้งค่ารหัสผ่านใหม่</div>


				<div class="mb-5 text-center text-white spacing-1 fs-16">
					<span class="text-white me-3">ไปยัง</span>
					<span class="text-color-1 ">XXX-XXX-5624</span>
				</div>

				<div class="d-flex justify-content-center mb-5">
		        	<input type="text" name="" class="input-otp" maxlength="1"  tabIndex="0" autofocus>
		        	<input type="text" name="" class="input-otp" maxlength="1"  tabIndex="1" >
		        	<input type="text" name="" class="input-otp" maxlength="1"  tabIndex="2" >
		        	<input type="text" name="" class="input-otp" maxlength="1"  tabIndex="3" >
		        	<input type="text" name="" class="input-otp" maxlength="1"  tabIndex="4" >
		        	<input type="text" name="" class="input-otp" maxlength="1"  tabIndex="5" >
		        </div>



				<div class="text-center">
					<button class="btn btn-st-1" disabled="">ยืนยัน</button>
				</div>


			</form>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="assets/bootstrap-5.0.1/js/bootstrap.bundle.min.js" ></script>
	<script type="text/javascript" src="assets/js/jquery.autotab.min.js"></script>

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

	<script type="text/javascript">


		if(navigator.userAgent.match(/(iPhone|iPod|iPad|android|Windows Phone|BlackBerry|webOS)/i)){

		    $(".input-otp").attr('type', 'number');
		    applyAutoTabNumeric("input[class='input-otp']");

		    function applyAutoTabNumeric(eleName){
		        var inputs = $(eleName);
		        $(eleName).on('keydown', function (event){
		            validateKeydown(event, this, inputs);
		        });
		        $(eleName).on('keypress', validateKeyPress);
		        $(eleName).attr('autocomplete', 'off');
		        $(eleName).on("keyup", function (e) {
		            if(this.value.match(/\D/)){
		                this.value=this.value.replace(/\D/g,'');
		            }
		            jumpNext($(this), $(this).val(), e, inputs)
		        });
		    }

		    function validateKeydown(event, elem, inputs){
		        var keyCode = window.event ? event.keyCode : event.which;
		        if (keyCode != 8 && keyCode != 46) {
		            if (elem.value.length == $(elem).attr('maxLength')){
		                var next = $(elem).attr('tabIndex');
		                if (next < inputs.length){
		                    inputs.eq( inputs.index(elem)+ 1 ).focus();
		                }
		            }
		        }
		    }
		    function validateKeyPress(event) {
		        var key = event.key;
		        return !key.match(/\D/);
		    }

		    function jumpNext(elem, value, event, inputs){
		        var keyCode = event.keyCode || event.which;
		        if(keyCode === 8 || keyCode === 46){
		            if (value.length == 0){
		                var previous = elem.attr('tabIndex');
		                if (previous > 0){
		                    inputs.eq( inputs.index(elem)-1 ).focus();
		                }
		            }
		        }else{
		            if (value.length == elem.attr('maxLength')){
		                var next = elem.attr('tabIndex');
		                if (next < inputs.length){
		                    inputs.eq( inputs.index(elem)+ 1 ).focus();
		                }
		            }
		        }

		    }
		}else{
		    $(".input-otp").autotab('number');
    		$(".input-otp").attr('type', '');
		}
	</script>
	<script type="text/javascript">
	$( ".input-otp" ).on('keyup',function (){
		$('.btn-st-1').attr('disabled',false)
		$( ".input-otp" ).each(function( index ) {
		  if($(this).val().length == 0){
		  	$('.btn-st-1').attr('disabled',true)
		  }
		});
	})

	</script>



</body>
</html>
