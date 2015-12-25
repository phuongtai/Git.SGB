<!DOCTYPE html>
<html>
<head>
	<title>Đặt chỗ</title>
</head>
<script type="text/javascript">
	function Toden()
	{
		var doituong = document.getElementsByName('ghe');
		
	}
</script>
<body>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class DatCho extends CI_Controller{
	public function index()
	{
		$this->load->model('ghe_model');
	    for ($i=1; $i <31 ; $i++)
		{
			$ma=$this->ghe_model->taoma();
			$ma_lg=($i<11)?"LG01":"LG02"; 
			$str="insert into ghe (MaGhe,MaChuyen,MaLoaiGhe,TrangThai) values ('$ma','CH0000001','$ma_lg','1')";
			$this->db->query($str);
		}
	}
	public function dat()
	{
		echo "
		<html>
			<head>
			    <title>ghe</title>
			    <meta charset=\"utf-8\"/>
			    <style type=\"text/css\">
			        ul>li {
			        	display: inline;margin :4px;padding:4px; 
			        	background-color: yellow;font-size: large;color:red;
			        	border: solid;height:500px;
						width:auto;
					text-decoration:none;}
			 	</style>
			</head>
			<body>
				<ul>
		";
		$str="Select maghe from ghe";
		echo "<ul name=\"maghe\">";
		$kq=$this->db->query($str);
		$result[]=$kq->result();
		$i=0;
		
		foreach ($result as $data) {
			
			foreach ($data as $row)
			{
				$count=count($data)-4;
				$i++;
				$id=substr($row->maghe,-2);
				
				if($i<=$count)
				{
					if($i%2==0)
					{
						echo "<li name =\"ghe\" id=\"$row->maghe\" onclick=\"Toden();\">Ghế ".$id."</li>";
						echo "<br><br>";
						
					}
					else {
						echo "<li name =\"ghe\" id=\"$row->maghe\">Ghế ".$id."</li>";
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					}
				}
				else
				{
					//echo "<br><br>";
					echo "<li name =\"ghe\" id=\"$row->maghe\">Ghế ".$id."</li>";
				}

			}
			# code...
		}

	}
}
?>
</body>
</html>
