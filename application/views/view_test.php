<!DOCTYPE html>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div id="line"></div>
</div>
<div class="col-md-12">
  <div class="col-md-4">
    <div class="panel panel-success">
      <div class="panel-heading"><span><i class="fa fa-bus"></i>&nbsp; CHỌN GHẾ VÀ SỐ LƯỢNG</span></div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-8" id="sodo">
          <?php
                function id($value)//vd 9->09 và 10->10
                {
                 $id=$value;
                 if($id<10)
                 {
                   $id="0".$id;
                 }
                 else
                  $id=$id;
                return $id;
              }
              function inghe($trangthai,$maghe,$id)
              {
               if($trangthai==1)
               {
                 echo "<li id=\"$maghe\" title=\"$id\" name=\"ghe\">$id</li>";
               }
               else
               {
                echo "<li id=\"ghedadat\" title=\"$id\">$id</li>";
              }
            }
            //hang 1
            $i=0;
            echo "<div class=\"row\"><ul  id=\"chonghe\"><li class=\"hid\"></li><li class=\"hid\"></li><li class=\"hid\"></li>&nbsp;";
            foreach ($data as $row)
            {
              $i++;
              if($i <3)
              {
                $id=id($row->vitri);
                $trangthai=$row->trangthai;
                $maghe=$row->maghe;
                inghe($trangthai,$maghe,$id);
              }
            }
            echo "</ul></div>";
            //hang 2
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >2)
              {
                if($i<7)
                {
                  if($i == 4)
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);
                    echo " <li class=\"hid\"></li>";
                  }
                  else
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);

                  }
                }
              }
            }
            echo "</ul></div>";
            //hang 3
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >6)
              {
                if($i<9)
                {
                  if($i == 8)
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);
                    echo " <li class=\"hid\"></li>";
                    echo " <li class=\"hid\"></li>";
                    echo " <li class=\"hid\"></li>";
                  }
                  else
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);

                  }
                }
              }
            }
            echo "</ul></div>";
            //hang 4
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >8)
              {
                if($i<13)
                {
                  if($i == 10)
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);
                    echo " <li class=\"hid\"></li>";
                  }
                  else
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);

                  }
                }
              }
            }
            echo "</ul></div>";
            //hang 5
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >12)
              {
                if($i<17)
                {
                  if($i == 14)
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);
                    echo " <li class=\"hid\"></li>";
                  }
                  else
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);

                  }
                }
              }
            }
            echo "</ul></div>";
            //hang 5
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >16)
              {
                if($i<21)
                {
                  if($i == 18)
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);
                    echo " <li class=\"hid\"></li>";
                  }
                  else
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);

                  }
                }
              }
            }
            echo "</ul></div>";
            //hang 6
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >20)
              {
                if($i<25)
                {
                  if($i == 22)
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);
                    echo " <li class=\"hid\"></li>";
                  }
                  else
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);

                  }
                }
              }
            }
            echo "</ul></div>";
             //hang 7
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >24)
              {
                if($i<30)
                {
                    if($i == 26)
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);
                    echo "&nbsp;";
                  }
                  else
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);

                  }
                }
              }
            }
            echo "</ul></div>";
        ?>
<div class="row">
<input type="text" value='4' disabled id="soghe" />
<input type="button" value='Click' onclick="get();" />
<input type="text" value='' id="txtmaghe" name ="txtmaghe" class="hidden"/>
</div>
      </div>
        </div>
    </div>
  </div>
</div>
<?php foreach ($thongtin as $value) {?>
<form method="post" action="<?php echo base_url('datcho/mua_ve').'/'.$value->MaChuyen;?>">
  <div class="col-md-4">
    <div class="panel panel-info">
      <div class="panel-heading"><span><i class="fa fa-ticket"></i>&nbsp;THÔNG TIN VÉ </span></div>
      <div class="panel-body">
        <table class="table" >
          <tr>
            <th>Tuyến Đường:</th>
            <td><?php echo $value->LoTrinh;?></td>
          </tr>
          <tr>
            <th>Ngày Đi:</th>
            <td><?php echo $value->NgayDi?></td>
          </tr>
          <tr>
            <th>Giờ xuất phát:</th>
            <td><?php echo $value->ThoiGianXuatBen?></td>
          </tr>
          <tr>
            <th>Số ghế:</th>
            <td id="thongtindatcho"></td>
          </tr>
          <tr>
            <th>Giá Vé:</th>
            <td><span id="gia"><?php echo number_format($value->GiaChuyen) ?></span> Vnđ/Vé</td>
          </tr>
          <tr>
            <th>Tổng tiền:</th>
            <td></td>
          </tr>


<?php }?> 
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-danger">
      <div class="panel-heading"><span><i class="fa fa-user"></i>&nbsp;THÔNG TIN KHÁCH HÀNG </span></div>
      <div class="panel-body">
        <table class="table">

          <tr>
            <th>Tên Khách Hàng:</th>
            <td><input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title=""></td>
          </tr>
          <tr>
            <th>Email:</th>
            <td><input type="email" name="" id="input" class="form-control" value="" required="required" title=""></td>
          </tr>
          <tr>
            <th>Số điện thoại:</th>
            <td><input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title=""></td>
          </tr>
          <tr>
            <th>Chứng Minh Nhân Dân:</th>
            <td><input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title=""></td>
          </tr>
          <tr>
            <th><button type="button" class="btn btn-info" id="huy">Hủy</button></th>
            <td align="right"><button type="submit" class="btn btn-danger" id="mua_ve_btn">Mua Vé</button></td>
            
          </tr>



        </table>
      </div>
    </div>    
  </div>
</form>
</div><!--END Col12-->
<!--END wrap-page-->
</div>
</body>
</html>