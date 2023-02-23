<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> MBCCIA | <?= $title ?> | </title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('static/plugins/fontawesome-free/css/all.min.css') ?>">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('static/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('static/dist/css/adminlte.min.css') ?>">

	<script>
		window.onload = function() {
			var title = document.getElementsByTagName('title')[0];
			var text = title.innerText;
			var i = 0;
			setInterval(function() {
				title.innerText = text.substring(i) + text.substring(0, i);
				i = (i + 1) % text.length;
			}, 100);
		};
	</script>

</head>

<body class="hold-transition login-page">
