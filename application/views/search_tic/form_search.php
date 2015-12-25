<div class="row">
    <div class="col-lg-12">
 
    </div>
  </div>
  <!-- /.row -->
  <div class="row">
    <form method="post" action="<?php echo base_url('timve');?>">
	<h3>ĐẶT VÉ XE SAIGONBUS</h3>
      <div class="col-md-6" id="tim_kiem">
        <div class="row1">
          <div class="col-md-6">
            <span class="label label-success">Điểm Đi</span>
            <select name="diemdi" id="input" class="form-control" required="required">
             <?php
              if(isset($tram) && count($tram)){
              foreach ($tram as $key => $val){
              echo '<option value="'.$val['MaTram'].'">'.$val['TenTram'].'</option>';
              }
              }
              ?>
      
            </select>
          </div>
          <div class="col-md-6">
            <span class="label label-success">Điểm Đến</span>
            <select name="diemden" id="input" class="form-control" required="required">
              <?php
              if(isset($tram) && count($tram)){
              foreach ($tram as $key => $val){
              echo '<option value="'.$val['MaTram'].'">'.$val['TenTram'].'</option>';
              }
              }
              ?>
            </select>
          </div>
        </div>
        <div class="row1">
          <div class="col-md-6">
            <span class="label label-success">Ngày đi</span>
            
            <input type="text" id="datepicker" class="form-control" format="dd/mm/yyyy" name="ngaydi" required="required">
          </div>
          <div class="col-md-6">
            <span class="label label-success">Số Lượng Vé</span>
            <input type="number" name="" placeholder="Số Lượng Vé" class="form-control" min="0">
          </div>
        </div>
        <div class="row1">
          <div class="col-md-10">
            <?php if($this->session->flashdata('message'))
            {
            ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('message');?>
            </div>
            <?php }?>
          </div>
          <div class="col-md-2">
            <input type="submit" class="btn btn-success" name="submit" value="TÌM VÉ" />
          </div>
        </div>
        </div><!--Tim Kiem-->
      </form>
      <div id="Carousel" class="carousel slide carousel-fade col-lg-6 col-offset-2">
        <ol class="carousel-indicators">
          <li data-target="Carousel" data-slide-to="0" class="active"></li>
          <li data-target="Carousel" data-slide-to="1"></li>
          <li data-target="Carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="//placehold.it/1300x500" class="img-responsive">
          </div>
          <div class="item">
            <img src="//placehold.it/1300x500/55EE55" class="img-responsive">
          </div>
          <div class="item">
            <img src="//placehold.it/1300x500/CCFEFE" class="img-responsive">
          </div>
        </div>
        <a class="left carousel-control" href="#Carousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#Carousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>