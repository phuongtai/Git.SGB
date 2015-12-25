<!DOCTYPE html>
<?php 
require  "xulyghe.php";
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div id="line"></div>
</div>
<div class="col-md-12">
  <div class="col-md-4">
    <div class="panel panel-success">
      <div class="panel-heading"><span><i class="fa fa-bus"></i>&nbsp; CHỌN GHẾ VÀ SỐ LƯỢNG</span></div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-8" id="sodo">Tầng 1<br>
            <?php
            //hang 1
            $i=0;
            $dem=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i <4)
              {
                $id=id($row->vitri);
                $trangthai=$row->trangthai;
                $maghe=$row->maghe;
                inghe($trangthai,$maghe,$id);
                $dem++;
                if($dem==1 || $dem==2)
                {
                  echo "<li class=\"hid\"></li>";
                }
              }
            }
            echo "</ul></div>";
            //hang 2
            $i=0;
            $dem=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >3)
              {
                if($i<7)
                {
                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
                  $dem++;
                  if($dem==1 || $dem==2)
                  {
                    echo "<li class=\"hid\"></li>";
                  }
                }
              }
            }
            echo "</ul></div>";
            //hang 3
            $i=0;
            $dem=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >6)
              {
                if($i<10)
                {
                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
                  $dem++;
                  if($dem==1 || $dem==2)
                  {
                    echo "<li class=\"hid\"></li>";
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
              if($i >9)
              {
                if($i<15)
                {

                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
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
              if($i >14)
              {
                if($i<20)
                {

                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
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
              if($i >19)
              {
                if($i<25)
                {

                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
                }
              }
            }
            echo "</ul></div>";
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8" id="sodo">Tầng 2<br>
            <?php
            //hang 1
            $i=0;
            $dem=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >24)
              {
                if($i<28)
                {
                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
                  $dem++;
                  if($dem==1 || $dem==2)
                  {
                    echo "<li class=\"hid\"></li>";
                  }
                }
              }
            }
            echo "</ul></div>";
                    //hang 2
            $i=0;
            $dem=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >27)
              {
                if($i<31)
                {
                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
                  $dem++;
                  if($dem==1 || $dem==2)
                  {
                    echo "<li class=\"hid\"></li>";
                  }
                }
              }
            }
            echo "</ul></div>";
                    //hang 3
            $i=0;
            $dem=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >30)
              {
                if($i<34)
                {
                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
                  $dem++;
                  if($dem==1 || $dem==2)
                  {
                    echo "<li class=\"hid\"></li>";
                  }
                }
              }
            }
            echo "</ul></div>";
                    //hang 4
            $i=0;
            $dem=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >33)
              {
                if($i<37)
                {

                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
                  $dem++;
                  if($dem==1 || $dem==2)
                  {
                    echo "<li class=\"hid\"></li>";
                  }

                }
              }
            }
            echo "</ul></div>";
                    //hang 5
            $i=0;
            $dem=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >36)
              {
                if($i<40)
                {

                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
                  $dem++;
                  if($dem==1 || $dem==2)
                  {
                    echo "<li class=\"hid\"></li>";
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
              if($i >39)
              {
                if($i<45)
                {

                  $id=id($row->vitri);
                  $trangthai=$row->trangthai;
                  $maghe=$row->maghe;
                  inghe($trangthai,$maghe,$id);
                }
              }
            }
            echo "</ul></div>";
            ?>
          </div>
        </div>
     </div>
   </div>
 </div>
 <form method="post" action="#">
  <?php $this->load->view('DatCho/thongtinve',$data); ?>
  <?php  $this->load->view('DatCho/thongtinkhachhang'); ?>
</form>
</div><!--END Col12-->
<!--END wrap-page-->
</div>
</body>
</html>