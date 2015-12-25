<!DOCTYPE html>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div id="line"></div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">
		
	<div class="col-sm-4 col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading"><span><i class="fa fa-bus"></i>&nbsp; CHỌN GHẾ VÀ SỐ LƯỢNG</span></div>
			<div class="panel-body">
			
		<div id="sodoghe">
			<ul class="ghichu">
				<li class="ghetrong" > trống</li>
				<li class="gheban"> đã đặt</li>
				<li class="dangchon"> đang chọn</li>
			</ul>
			<hr size="9px" width="308px" align="center">
			<ul class="taixe"><li class="gheban">Tài xế</li></ul>
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
						echo "<li name =\"ghe\" id=\"$maghe\" > ".$id."</li>";
					}
					else
					{
						echo "<li name =\"gheban\" id=\"$maghe\"> ".$id."</li>";
					}
				}
			 	$i=0;//là chỉ số duyệt mảng
			 	$dem=0;
			 	//day 1
			 	echo "<div id=\"divchil\"><ul id=\"chonghe\">";
			 	echo "<li class=\"hidden\"></li>";
				foreach ($data as $row)
				{
					$i++;
					if($i<8 && $dem <7)
					{
						$id=id($row->vitri);
						$trangthai=$row->trangthai;
						$maghe=$row->maghe;
						inghe($trangthai,$maghe,$id);
						$dem++;
					}
				}
				$i=0;
				$dem=0;
				echo "</ul></div>";
				//day 2
				echo "<div id=\"divchil\"><ul id=\"chonghe\">";
				echo "<li class=\"hidden\"></li>";
				foreach ($data as $row)
				{
					$i++;
					if($i>7 && $dem <7)
					{
						$id=id($row->vitri);
						$trangthai=$row->trangthai;
						$maghe=$row->maghe;
						inghe($trangthai,$maghe,$id);
						$dem++;
					}
				}
				echo "</ul></div>";
				//day 3
				$i=0;
				$dem=0;
				echo "<div id=\"divchil\"><ul id=\"chonghe\">";
				for ($j=0; $j < 8; $j++) { 
					echo "<li class=\"hidden\"></li>";

				}
				foreach ($data as $row)
				{
					$i++;
					if($i>14 && $dem <1)
					{
						$id=id($row->vitri);
						$trangthai=$row->trangthai;
						$maghe=$row->maghe;
						inghe($trangthai,$maghe,$id);
						$dem++;
					}
				}
				echo "</ul></div>";
				//day 4
				$i=0;
				$dem=0;
				echo "<div id=\"divchil\"><ul id=\"chonghe\">";
				foreach ($data as $row)
				{
					$i++;
					if($i>15 && $dem <7)
					{
						if($i!=18)
						{
							$id=id($row->vitri);
							$trangthai=$row->trangthai;
							$maghe=$row->maghe;
							inghe($trangthai,$maghe,$id);
							$dem++;

						}
						else
						{
							echo "<li class=\"hidden\"></li>";
							$id=id($row->vitri);
							$trangthai=$row->trangthai;
							$maghe=$row->maghe;
							inghe($trangthai,$maghe,$id);
							$dem++;

						}
					}
				}
				echo "</ul></div>";
				//day 5
				$i=0;
				$dem=0;
				echo "<div id=\"divchil\"><ul id=\"chonghe\">";
				foreach ($data as $row)
				{
					$i++;
					if($i>22 && $dem <7)
					{
						if($i==25)
						{
							echo "<li class=\"hidden\"></li>";
							$id=id($row->vitri);
							$trangthai=$row->trangthai;
							$maghe=$row->maghe;
							inghe($trangthai,$maghe,$id);
							$dem++;

						}
						else
						{
							$id=id($row->vitri);
							$trangthai=$row->trangthai;
							$maghe=$row->maghe;
							inghe($trangthai,$maghe,$id);
							$dem++;
						}
					}
				}
				echo "</ul></div>";
			 ?>
			</div>
			
			</div>
		</div>
	</div>
	
	<?php foreach ($thongtin as $value) {?>
	<form method="post" action="<?php echo base_url('datcho/test/').$value['MaChuyen'];?>">

		<div class="col-sm-4 col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading"><span><i class="fa fa-ticket"></i>&nbsp;THÔNG TIN VÉ </span></div>
				<div class="panel-body">
					<table class="table">
						
						<tr>
							<th>Tuyến Đường:</th>
							<td><? echo $value->LoTrinh;?></td>
						</tr>
						<tr>
							<th>Giờ xuất phát:</th>
							<td></td>
						</tr>
						<tr>
							<th>Số ghế:</th>
							<td></td>
						</tr>
						<tr>
							<th>Giá Vé:</th>
							<td></td>
						</tr>
						<tr>
							<th>Tổng tiền:</th>
							<td></td>
						</tr>
						<?}?>
					</table>
				</div>
			</div>
		</div>
		
		
		<div class="col-sm-4 col-md-4">
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
							<th></th>
							<td align="right"><button type="button" class="btn btn-danger" id="mua_ve_btn">Mua Vé</button></td>
						</tr>
						
					</table>
				</div>
			</div>
		</div>
	
	</form>
</div>
	</div><!--END Col12-->
	<!--END wrap-page-->
	<p id="maghe" ></p>
	<input type="text" value='4' disabled id="soghe" />
	<input type="button" value='Click' onclick="kiemtraclick();" />
</div>
</body>
</html>