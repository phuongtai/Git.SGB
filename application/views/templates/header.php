<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/chonghe.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datepick/jquery-ui-1.9.2.custom.css');?>">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="<?php echo base_url('assets/js/chonghe.js');?>"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/flat-ui.min.css');?>">
  <script type="text/javascript" src="<?php echo base_url('assets/js/flat-ui.min.js')?>"></script>

<script type="text/javascript">
    $(function() {
    $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy' }).val();
  });
    function trungtram(){
      alert('Quý khách đã chọn trùng. Vui lòng chọn tuyến khác');
    }
</script>


  <title></title>
</head>
<body>
<div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a title="" data-toggle="tooltip" class="navbar-brand name-blog" href="#" data-original-title="">SAIGONBUS</a>
                    
                    <button data-target="#navbar-main" data-toggle="collapse" type="button" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar-main" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-road"></span>
                                &nbsp;&nbsp;Đặt Vé</a>
                        </li>
                      <li>
                        <a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Phản Hồi</a>               
                      </li>
                      <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-globe"></span>
                                &nbsp;&nbsp;Giới thiệu</a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <!-- Navigation -->
 
        <!-- Page Content -->
      <div class="container">