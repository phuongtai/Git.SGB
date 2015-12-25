<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datepicker/bootstrap-datepicker.css');?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.vi.min.js')?>"></script>
<script>
    $(function () {
  $('.datepicker').datepicker({ format: "dd//mm/yyyy" }).on('changeDate', function (ev) {
    $(this).datepicker('hide');
  });
});



    </script>
	<title></title>
</head>
<body>
<div class="col-lg-3">
	<nav id="v-menu">
    <ul class="nav">
	    <li><a href="#">Link 1</a></li>
		<li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">Link 2 (toggle)</a>
			<ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
				<li><a href="#">Link 2.1</a></li>
				<li><a href="#">Link 2.2</a></li>
				<li><a href="#">Link 2.3</a></li>
			</ul>
		</li>
		<li><a href="#">Link 3</a></li>
		<li><a href="#">Link 4</a></li>
	</ul>
	</div>
</nav>
</body>