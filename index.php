<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/ru.min.js" integrity="sha512-+yvkALwyeQtsLyR3mImw8ie79H9GcXkknm/babRovVSTe04osQxiohc1ukHkBCIKQ9y97TAf2+17MxkIimZOdw==" crossorigin="anonymous"></script>
	<title>Counter</title>
</head>
<body>
    <div class="faq_item">
        <div class="faq_item_title">
            <div class="faq_item_title_inner">
                Загруженность карьеров
                <span class="icon"><img class="down img-arrow" src="image/down-arrow.svg" alt=""></span>
            </div>
        </div>
        <div class="faq_item_body">
        	<!--<div class="infoStatus">
        		<div class="infoBlock">
	        		<div class="infoBlockLine ">
	        			<img class="imgStatus" src="image/happy.svg" alt="">
	        		</div>
	        		<div class="textStatus infoBlockLine">
	        			<span>Свободно</span>
	        		</div>
	        	</div>
	        	<div class="infoBlock">
	        		<div class="infoBlockLine">
	        			<img class="imgStatus" src="image/middle.svg" alt="">
	        		</div>
	        		<div class="textStatus infoBlockLine">
	        			<span>Средняя загрузка</span>
	        		</div>
	        	</div>
	        	<div class="infoBlock">
	        		<div class="infoBlockLine">
	        			<img class="imgStatus" src="image/sad.svg" alt="">
	        		</div>
	        		<div class="textStatus infoBlockLine">
	        			<span>Наибольшая загрузка</span>
	        		</div>
	        	</div>
	        	<div class="infoBlock">
	        		<div class="infoBlockLine">
	        			<img class="imgStatus" src="image/sleepy.svg" alt="">
	        		</div>
	        		<div class="textStatus infoBlockLine">
	        			<span>Не работает</span>
	        		</div>
	        	</div>
        	</div> -->
           <table>
					  <tr>
					    <td>оз. Андреевское</td>
					    <td>Муллашовский </td>
					  </tr>
					  <tr>
					    <td id="resultAndreevskoe"></td>
					    <td id="resultMulashevo"></td>
					  </tr>
					</table>
        </div>
    </div>
	<script src="script.js"></script>
</body>
</html>