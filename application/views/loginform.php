<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daily UI - Day 1 Sign In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<? echo base_url();?>assets/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<? echo base_url();?>assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Panel <span>UI</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Logowanie</h2>
			</div>
			<?php echo validation_errors(); ?>
      <? echo form_open('login'); ?>
			<label for="username">Użytkownik</label>
			<br/>
			<input type="text" id="p_username" name="p_username">
			<br/>
			<label for="password">Hasło</label>
			<br/>
			<input type="password" id="p_password" name="p_password">
			<br/>
			<button type="submit">Zaloguj</button>
			<br/>
    </form>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>
