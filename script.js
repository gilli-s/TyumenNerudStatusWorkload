$(document).ready(function()
{


	$('.faq_item_title_inner').on('click',function(){
        $(this).parents('.faq_item').find('.faq_item_body').slideToggle(300);
        $(this).toggleClass('open');
        if($('.img-arrow').hasClass('down')){
        	$('.icon').html('<img src="image/up-arrow.svg" class="up img-arrow" alt="">')
        }
        else if($('.img-arrow').hasClass('up')){
        	$('.icon').html('<img src="image/down-arrow.svg" class="down img-arrow" alt="">')
        }
    });


LastHour = -1;
setInterval(function() {
  var _date =	moment().format("dddd DD MM YYYY HH:mm:ss");
  // _date = 'среда 14 10 2020 09:07:18'
  //alert(typeof(moment().hour()))
  if(LastHour != moment().hour()){
	  _date = 'среда 14 10 2020 03:07:18'
	  moment.locale('ru')
	  $.ajax({ 
	 		url: "calc.php", 
	    method: "POST",
	    dataType: 'json',
	    data: { "date": _date },
	    success: function(data) {
	    //	alert(data.Andreevskoe);
	    	switch (data.Andreevskoe) {
				  case 'red':
				    $('#resultAndreevskoe').html('<img class="imgStatus" src="image/sad.svg" alt=""><br><span>Высокая</span>')
				    break;
				  case 'yellow':
				    $('#resultAndreevskoe').html('<img class="imgStatus" src="image/middle.svg" alt=""><br><span>Средняя</span>')
				    break;
				  case 'green':
				    $('#resultAndreevskoe').html('<img class="imgStatus" src="image/happy.svg" alt=""><br><span>Низкая</span>')
				    break;
				}
				switch (data.Mulashevo) {
				  case 'red':
				    $('#resultMulashevo').html('<img class="imgStatus" src="image/sad.svg" alt=""><br><span>Высокая</span>')
				    break;
				  case 'yellow':
				    $('#resultMulashevo').html('<img class="imgStatus" src="image/middle.svg" alt=""><br><span>Средняя</span>')
				    break;
				  case 'green':
				    $('#resultMulashevo').html('<img class="imgStatus" src="image/happy.svg" alt=""><br><span>Низкая</span>')
				    break;
				  case 'sleep':
				  	$('#resultMulashevo').html('<img class="imgStatus" src="image/sleepy.svg" alt=""><br><span>Не работает</span>')
				  break;
				}
	    } 
	 	});
	 	LastHour = moment().hour();
	}
}, 1000);});