<div class="row">

</div>
<!-- Page Heading -->
<div id="wrap-page">
  
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
	  <?php $this->load->view('search_tic/form_search', $tram)?>
        <div id="ketqua" >
          <div class="panel panel-success"><div class="panel-heading">
          <span><i class="fa fa-bus"></i>&nbsp;Bạn cần tìm tuyến xe <b>
          <?php 
            $i=0;
            foreach ($ketqua as $row) {
              # code...
              
                # code...
                  if($i<1)
                {
                    echo $row['TramBatDau'].' - '.$row['TramKetThuc'].' đi vào ngày '.$row['NgayDi'];
                    $i++;
                }
              
            }

                
            ?>
            </b></span></div></div>
          <div class="panel-body">
            <table class="table table-condensed table-hover">
              <thead>
                <th>STT</th>
                <th>Lộ Trình</th>
                <th>Giá Chuyến</th>
                <th>Loại Xe</th>
                <th>Thời gian Khởi Hành</th>
                <th>Đặt Vé</th>
              </thead>
              <tbody>
                <?php
                foreach ($ketqua as $key => $value) {
                echo '<tr>';
                  echo '<td>'.($key+1).'</td>';
                  echo '<td>'.$value['TramBatDau'].' - '.$value['TramKetThuc'].'</td>';
                  echo '<td>'.number_format($value['GiaChuyen']).' Vnđ</td>';
                  echo '<td>'.$value['TenLoaiXe'].'</td>';
                  echo '<td>'.$value['ThoiGianXuatBen'].'</td>';
                  echo '<td><a href="'.base_url('datcho/chuyen').'/'.$value['MaChuyen'].'" class="btn btn-success" role="button">Đặt Vé</a></td>';
                echo '</tr>';
                }
                ?>
                
              </tbody>
            </table>
          </div>
        </div >
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <img class="img-responsive" src="img/bus-icon.png" alt="">
        
      </div>
    </div>
    
    <!-- Project One -->
    <div class="row">
      <div class="col-md-8">
        <a href="#">
          <img class="img-responsive" src="" alt="">
        </a>
      </div>
      
    </div>
    <footer>
      <div class="row">
        <div class="col-lg-12 text-center">
          
        </div>
      </div>
      <!-- /.row -->
    </footer>
    
  </div>
  <!-- /.container -->
  
  <!-- jQuery -->
  
</body>