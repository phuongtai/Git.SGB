<div class="row">
  
</div>
<!-- Page Heading -->
<div class="container">
  <div id="wrap-page">
    <div class="row">
      <div class="col-lg-12">
  
      </div>
    </div>
	<?php $this->load->view('search_tic/form_search',$tram)?>
    <!-- /.row -->
              
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  
                  <div class="panel panel-info">
                    <div class="panel-heading"><span><i class="fa fa-bus"></i>&nbsp;Các Tuyến Đang Hoạt Động </span></div>
                    <div class="panel-body">
                      <table class="table table-condensed table-hover">
                        <thead>
                          <th>Lộ Trình</th>
                          <th>Số KM</th>
                          <th>Thời Gian Đi Xe</th>
                          <th>Giá Tuyến</th>
                          
                        </thead>
                        <tbody>
                          <?php
                          if(isset($tuyenxe) && count($tuyenxe)){
                          
                          foreach ($tuyenxe as $key => $val) {
                          echo "<tr>";
                            echo '<td>'.$val['LoTrinh'].'</td>';
                            echo '<td>'.$val['SoKM'].'</td>';
                            if($val['SoNgayDi']==0){
                            echo '<td>'.$val['SoGioDi'].' Giờ</td>';
                            } else echo '<td>'.$val['SoNgayDi'].' Ngày '.$val['SoGioDi'].' Giờ</td>';
                            echo '<td><b>'.number_format(($val['GiaTuyen'])).' Vnđ</b></td>';
                            echo '<td><a href="'.base_url('').'" class="btn btn-info" role="button">Tìm chuyến</a></td>';
                          echo "</tr>";
                          }
                          }
                          
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                </div><!--END Row -->
                
                
                
                
                <!-- Project One -->
                
                
                
                
                
                <!-- /.container -->
                
                <!-- jQuery -->