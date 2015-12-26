$.fn.extend({
	Select: function() 
	{
		//xuly o td trong table

			var t=$('#thongtindatcho').text().replace(/-/g,"");
			var output='';
			t=t+ $(this).attr('title');
			t=t.replace("-","");
			for (i=0; i<t.length; i++) 
			{
			    if (i>0 && i%2 == 0)
			      output += '-';
			    output += t.charAt(i);
			}

			t=output;
			$('#thongtindatcho').text(t);

		//khoi tao tong tien
			var giave=$('#giave').text();
			var tongtien=$('#tongtien').text();
		//unformat 2 gia tri giave va tongtien
			giave=accounting.unformat(giave);
			tongtien=accounting.unformat(tongtien);
		//ep kieu
			giave=parseInt(giave);
			tongtien=parseInt(tongtien);
		//update tongtien
			tongtien+=giave;
			tongtien=accounting.formatNumber(tongtien);
			tongtien+=" VND";
			$('#tongtien').text(tongtien);
		//cap nhat input hidden id_ghe
			var idghe=$('#id_ghe').val();
			idghe=idghe.replace(/-/g,"");
			var output2='';
			idghe=idghe+ $(this).attr('id');
			idghe=idghe.replace("-","");
			for (i=0; i<idghe.length; i++) 
			{
			    if (i>0 && i%11 == 0)
			      output2 += '-';
			    output2 += idghe.charAt(i);
			}
			idghe=output2;
			$('#id_ghe').val(idghe);
		//bo class Selected
			return $(this).addClass('Selected');
	},
	Unselect: function() {
		//xuly the td trong table
			var t=$(this).attr('title');
			var replit = $('#thongtindatcho').text().replace(/-/g,"");
			replit = replit.replace(t,"");
			replit = replit.replace("-","");
			var output='';
			for (i=0; i<replit.length; i++) 
			{
			    if (i>0 && i%2 == 0)
			      output += '-';
			    output += replit.charAt(i);
			}
			replit=output;
			$('#thongtindatcho').text(replit);
		//xu ly tong tien
			var giave=$('#giave').text();
			var tongtien=$('#tongtien').text();
		//xoa bo format cua giave va tongtien
			giave=accounting.unformat(giave);
			tongtien=accounting.unformat(tongtien);
		//ep kieu ve int
			giave=parseInt(giave);
			tongtien=parseInt(tongtien);
			tongtien-=giave;
		//format tong tien
			tongtien=accounting.formatNumber(tongtien);
			tongtien+=" VND";
		//gan lai gia tri cho $('#tongtien')
			$('#tongtien').text(tongtien);
		//cap nhat input hidden
			var idghe=$(this).attr('id');
			var replit = $('#id_ghe').val().replace(/-/g,"");
			replit = replit.replace(idghe,"");
			replit = replit.replace("-","");
			var output='';
			for (i=0; i<replit.length; i++) 
			{
			    if (i>0 && i%11 == 0)
			      output += '-';
			    output += replit.charAt(i);
			}
			replit=output;
			$('#id_ghe').val(replit);
			tongtien=accounting.unformat(tongtien);
			$('#id_tongtien').val(tongtien);
		return $(this).removeClass('Selected');
	},
	MyApplication: {
		Ready: function() {
			$(this).click(
				function() {
					$('#chonghe li[name="ghe"]').Select();
				}
				);
			$('#chonghe li[name="ghe"]').click(
				function()
				{
					var note="ghedadat";
					if($(this).attr('id')!=note)
					{
						if($(this).hasClass('Selected')) 
						{
			        		$(this).Unselect();	
				        }
			        	else
			        	{
			        		if($(".Selected").length<4)
			        		{
			        			$(this).Select();
			        		}	
			        		else
			        			alert("Lỗi!Quý khách chỉ được đặt tối đa 4 ghế");
			        	} 
		        	}

				}
				    );
		}
	}
});
$(document).ready(
	function() {
		$.fn.MyApplication.Ready();
	});
function kiemtraclick()
{
	var t=4;
	var count=$('.Selected').length;
	t=parseInt(t);
	count=parseInt(count);
	if(count<=t && count==0)
	{
		alert("Thành công!Cảm ơn quý khách!")
		
	}
	else
		alert("Quý khách vui lòng chọn đủ ghế,Cảm ơn!");

}
function get()
{
	var t=document.getElementById('txtmaghe').value;
	alert(t);
}
function insertNthChar(chr,nth) {
  var output = '';
  var t=$('#thongtindatcho').text();
  for (var i=0; i<t.length; i++) {
    if (i>0 && i%2 == 0)
      output += chr;
    output += t.charAt(i);
  }

  return output;
}
function total ()
{
	var t = $('.Selected').length;
	t*=150000;
	var x=accounting.formatNumber(t, {
	precision : 0,
	thousand : ","
})+" VND";
	alert(x);
}
