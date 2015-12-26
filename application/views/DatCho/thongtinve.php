<div class="col-md-4">
	<div class="panel panel-info">
		<div class="panel-heading"><span><i class="fa fa-ticket"></i>&nbsp;THÔNG TIN VÉ </span></div>
		<div class="panel-body">
			<table class="table" >
<<<<<<< HEAD
			<?php foreach ($thongtin as $value) { ?>
=======
				<?php foreach ($thongtin as $value) {?>
>>>>>>> origin/master
				<tr>
					<th>Tuyến Đường:</th>
					<td><?php echo $value->LoTrinh ?></td>
				</tr>
				<tr>
					<th>Giờ xuất phát:</th>
					<td><?php echo $value->ThoiGianXuatBen ?></td>
				</tr>
				<tr>
				<tr>
					<th>Ngày Đi: </th>
					<td><?php echo $value->NgayDi ?></td>
				</tr>
					<th>Số ghế:</th>
					<td id="thongtindatcho"></td>
				</tr>
				<tr>
					<th >Giá Vé:</th>
					<td id="giave">
<<<<<<< HEAD
						<?php 
						$giachuyen=laygiachuyen($data);
						$giachuyen=number_format($giachuyen);
						$giachuyen.=" VND/Ve";
						echo "$giachuyen"
						?>
=======
						<?php echo number_format($value->GiaChuyen) ?></span> VND/Vé
>>>>>>> origin/master
					</td>
				</tr>
				<tr>
					<th >Tổng tiền:</th>
					<td id="tongtien">0</td>
				</tr>
				<?php }?>
			</table>
		</div>
	</div>
</div>
<<<<<<< HEAD
<input type="text" name="ghe" id="id_ghe" class="form-control hidden" value="" >
<input type="text" name="tongtien" id="id_tongtien" class="form-control hidden" value="">
</div>
=======
<input type="text" name="id_ghe" id="id_ghe" class="form-control hidden" value="" >
<input type="text" name="id_tongtien" id="id_tongtien" class="form-control hidden" value="">
>>>>>>> origin/master
