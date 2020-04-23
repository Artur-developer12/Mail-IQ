<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Тестовое задание</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<h1 class="h1 title text-center">Тестовое задание для Mail-IQ</h1>

	<form class="form">
		<div class="form_ask">
			<h3>Что добавляет возраст?</h3>
			
			<div class="custom-control custom-radio">
			  <input type="radio" id="age" name="age" class="custom-control-input" value="Чистый классический стиль">
			  <label class="custom-control-label" for="age">Чистый классический стиль</label>
			</div>
			<div class="custom-control custom-radio">
			  <input type="radio" id="age2" name="age" class="custom-control-input" value="Чистый спортивный стиль">
			  <label class="custom-control-label" for="age2">Чистый спортивный стиль</label>
			</div>
			<div class="custom-control custom-radio">
			  <input type="radio" id="age3" name="age" class="custom-control-input" value="Смесь классики и спорта">
			  <label class="custom-control-label" for="age3">Смесь классики и спорта</label>
			</div>
		</div>

		<div class="form_ask">
			<h3>Стоит ли взрослой женщине одеться полностью в романтичном стиле?</h3>
			
			<div class="custom-control custom-radio">
			  <input type="radio" id="clothes" name="clothes" class="custom-control-input" value="Да, особенно когда идешь на свидание">
			  <label class="custom-control-label" for="clothes">Да, особенно когда идешь на свидание</label>
			</div>
			<div class="custom-control custom-radio">
			  <input type="radio" id="clothes2" name="clothes" class="custom-control-input" value="Нет, это будет выглядеть глупо. Надо добавлять долю романтики к другим стилям">
			  <label class="custom-control-label" for="clothes2">Нет, это будет выглядеть глупо. Надо добавлять долю романтики к другим стилям</label>
			</div>
			<div class="custom-control custom-radio">
			  <input type="radio" id="clothes3" name="clothes" class="custom-control-input" value="Можно, если такой образ был на манекене">
			  <label class="custom-control-label" for="clothes3">Можно, если такой образ был на манекене</label>
			</div>
		</div>

		<div class="form_ask">
			<h3> Как включать тренды в свой гардероб?</h3>
			
			<div class="custom-control custom-radio">
			  <input type="radio" id="trends" name="trends" class="custom-control-input" value="Разобраться с долгими и короткими трендами. Долгих трендов брать чуть побольше. Коротких - на один сезон, чтобы сделать образы острыми и интересными">
			  <label class="custom-control-label" for="trends">Разобраться с долгими и короткими трендами. Долгих трендов брать чуть побольше. Коротких - на один сезон, чтобы сделать образы острыми и интересными</label>
			</div>
			<div class="custom-control custom-radio">
			  <input type="radio" id="trends2" name="trends" class="custom-control-input" value="Не трогать тренды - в них тяжело разобраться, подходит только молодежи, зачем позориться">
			  <label class="custom-control-label" for="trends2">Не трогать тренды - в них тяжело разобраться, подходит только молодежи, зачем позориться</label>
			</div>
			<div class="custom-control custom-radio">
			  <input type="radio" id="trends3" name="trends" class="custom-control-input" value="Смотреть модные показы и полностью копировать понравившиеся образы с подиумов">
			  <label class="custom-control-label" for="trends3">Смотреть модные показы и полностью копировать понравившиеся образы с подиумов</label>
			</div>
		</div>
		
		<button type="button" class="form-btn btn btn-primary">
		 проверить
		</button>
		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalCenterTitle">Введите ваши данные</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				    <input id="name" type="text" class="form-control mb-2" placeholder="Введите имя">
				    <input id="email" type="email" class="form-control" placeholder="Введите email">
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">отправить</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- /Modal -->
	</form>


 
	<div class="modal fade" id="myModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">   
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
	      </div>
	    </div>
	  </div>
	</div>
 




	
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>