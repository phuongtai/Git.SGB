$.fn.extend({
	Select: function() {
		//xuly o txtbox hiden
		var txt=$('#txtmaghe').val();
		txt+=$(this).attr('id');
		$('#txtmaghe').val(txt);
		var x=txt=$('#txtmaghe').val();
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
		return $(this).addClass('Selected');
	},
	Unselect: function() {
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
							//xuly texbox txtmaghe
							var txt=$(this).attr('id');
							var replit_txt = $('#txtmaghe').val();
							replit_txt=replit_txt.replace(txt,"");
							//xuly the td trong table
							var t=$(this).attr('title');
							var replit = $('#thongtindatcho').text().replace(/-/g,"");
							// alert(replit);
							replit = replit.replace(t,"");
							// alert(replit);
							replit = replit.replace("-","");
							// alert(replit);
							var output='';
							for (i=0; i<replit.length; i++) 
							{
							    if (i>0 && i%2 == 0)
							      output += '-';
							    output += replit.charAt(i);
							}
							replit=output;
			        		$('#thongtindatcho').text(replit);
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
		        else
		        	alert("Vui lòng chọn  trống,cảm ơn quý khách");


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
