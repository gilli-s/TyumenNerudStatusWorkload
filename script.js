$(document).ready(function()
{
setInterval(function() {

  var _date =	moment().format("dddd DD MM YYYY HH:mm:ss");
  moment.locale('ru')
	//alert(_date);
  $.ajax({ 
 		url: "calc.php", 
    method: "POST",
    dataType: 'json',
    data: { "date": _date },
    success: function(data) {
    //	alert(data.Andreevskoe);
    	switch (data.Andreevskoe) {
			  case 'red':
			    $('#resultAndreevskoe').html('<img width = "50px" src="image/sad.png" alt="">')
			    break;
			  case 'yellow':
			    $('#resultAndreevskoe').html('<img width = "50px" src="image/midle.png" alt="">')
			    break;
			  case 'green':
			    $('#resultAndreevskoe').html('<img width = "50px" src="image/fun.png" alt="">')
			    break;
			}
			switch (data.Mulashevo) {
			  case 'red':
			    $('#resultMulashevo').html('<img width = "50px" src="image/sad.png" alt="">')
			    break;
			  case 'yellow':
			    $('#resultMulashevo').html('<img width = "50px" src="image/midle.png" alt="">')
			    break;
			  case 'green':
			    $('#resultMulashevo').html('<img width = "50px" src="image/fun.png" alt="">')
			    break;
			  case 'sleep':
			  alert('sleep');
			  break;
			}
    } 
 	});

}, 5000);});

function showSmile(career, color ) {
  
}