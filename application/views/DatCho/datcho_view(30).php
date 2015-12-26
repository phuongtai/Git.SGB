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
					</div>
				</div>
			</div>
		</div>
	</div>
<form method="post" action="#">
	<?php $this->load->view('DatCho/thongtinve',$data); ?>
	<?php  $this->load->view('DatCho/thongtinkhachhang'); ?>
</form>
</div>
</div><!--END Col12-->
<!--END wrap-page-->
</body>
</html>