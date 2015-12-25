<!DOCTYPE html>
<?php 
require "xulyghe.php";
?>
<div class="col-md-12">
  <div id="line"></div>
</div>
<div class="col-md-12">
<div class="row">
  <div class="col-md-4">
    <div class="panel panel-success">
      <div class="panel-heading"><span><i class="fa fa-bus"></i>&nbsp; CHỌN GHẾ VÀ SỐ LƯỢNG</span></div>
      <div class="panel-body">
        <div class="row" id="rowbig">
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
                 echo "<li id=\"$maghe\" title=\"$id\" name=\"ghe\"></li>";
               }
               else
               {
                echo "<li id=\"ghedadat\" title=\"$id\"></li>";
              }
            }
            //hang 1
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >0)
              {
                if($i<5)
                {
                  if($i%4== 2)
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
            //hang 2
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >4)
              {
                if($i<9)
                {
                  if($i%4== 2)
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
              if($i >8)
              {
                if($i<13)
                {
                  if($i%4== 2)
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
            //hang 4
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
                  if($i%4== 2)
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
                  if($i%4== 2)
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
                if($i<23)
                {
                  if($i%4== 2)
                  {
                    $id=id($row->vitri);
                    $trangthai=$row->trangthai;
                    $maghe=$row->maghe;
                    inghe($trangthai,$maghe,$id);
                    for ($k=0; $k <3 ; $k++) { 
                      echo " <li class=\"hid\"></li>";
                    }
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
              if($i >22)
              {
                if($i<27)
                {
                  if($i%4== 0)
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
             //hang 8
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >26)
              {
                if($i<31)
                {
                  if($i%4== 0)
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
             //hang 9
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >30)
              {
                if($i<35)
                {
                  if($i%4== 0)
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
             //hang 10
            $i=0;
            echo "
            <div class=\"row\">
            <ul  id=\"chonghe\">";
            foreach ($data as $row)
            {
              $i++;
              if($i >34)
              {
                if($i<40)
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
 <?php $this->load->view('datcho/thongtinve',$data); ?>
  <?php  $this->load->view('datcho/thongtinkhachhang'); ?>
</form>
</div>
</div><!--END Col12-->
<!--END wrap-page-->
</div>
</body>
</html>