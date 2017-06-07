<?php
	//переменные параметров конфига
	$engine = 'engine';
	$short_open_tag = 'short_open_tag';
	$asp_tags = 'asp_tags';
	$max_execution_time = 'max_execution_time';
	$display_errors = 'display_errors';
	$allow_url_fopen = 'allow_url_fopen';
	$allow_url_include = 'allow_url_include';
	$upload_max_filesize = 'upload_max_filesize';
	$post_max_size = 'post_max_size';
	$memory_limit = 'memory_limit';
	$max_file_uploads = 'max_file_uploads';
	$file_uploads = 'file_uploads';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Config diplom</title>
</head>
<style>
body{
	font-family:Arial,sans-serif;
	font-size:18px;
}
.option{   
	box-shadow:1px 1px 4px #999;
    margin:12px 1%;
    box-sizing:border-box;
    padding:0px 14px;
    width:47%;
    display:inline-block;
    transition:all 0.5s ease;
    position:relative;
}
.option:hover{
	box-shadow:1px 1px 8px #777;
}
.option > div{
	display:inline-block;
}
div.option-helper{
	position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    box-sizing:border-box;
    background:#c5c5c5;
    padding:5px 15px;
    display:none;
}
.option-helper p{
	margin:0;
	margin:0;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100%;
}
/*Табы*/
ul.tabs{
	margin:0px;
	padding:0px;
	list-style:none;
}
ul.tabs li{
	background:none;
	color:#222;
	display:inline-block;
	padding:10px 15px;
	cursor:pointer;
	font-size:21px;
}
ul.tabs li.current{
	background:#ededed;
	color:#222;
	border-radius:6px 6px 0 0;
}
.tab-content{
	display:none;
	background:#ededed;
	padding:15px;
}
.tab-content.current{
	display:inherit;
}
</style>
<body>
	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">Информация о сервере</li>
		<li class="tab-link" data-tab="tab-2">Настройка WEB</li>
		<li class="tab-link" data-tab="tab-3">Настройка DNS</li>
	</ul>

	<div id="tab-1" class="tab-content current">
		<div class="wrap">
			<div class="info">
				<div class="info-block">
					<p>Путь к файлу конфигурации - <?php echo php_ini_loaded_file(); ?></p>
					<p>Хост - <?php echo getenv('HTTP_HOST'); ?></p>
					<p>Порт сервера - <?php echo getenv('SERVER_PORT'); ?></p>
					<p>Протокол сервера - <?php echo getenv('SERVER_PROTOCOL'); ?></p>
				</div>
				<hr>
			</div>
			
			<div class="option">
				<div class="option-label">
					<p><b>engine :</b> <?php echo ini_get($engine) == '1' ? 'Включено' : 'Выключено'; ?></p>
				</div>
				<div class="option-helper">
					<p>Включение/выключение PHP на сервере</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>short_open_tag :</b> <?php echo ini_get($short_open_tag) == '1' ? 'Включено' : 'Выключено'; ?></p>
				</div>
				<div class="option-helper">
					<p>Возможность записывать PHP теги через сокращенную форму</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>asp_tags :</b> <?php echo ini_get($asp_tags) == 'On' ? 'Включено' : 'Выключено'; ?></p>
				</div>
				<div class="option-helper">
					<p>Запись PHP тегов в стиле ASP</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>display_errors :</b> <?php echo ini_get($display_errors) == '1' ? 'Включено' : 'Выключено'; ?></p>
				</div>
				<div class="option-helper">
					<p>Показывать ошибки</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>allow_url_fopen :</b> <?php echo ini_get($allow_url_fopen) == '1' ? 'Включено' : 'Выключено'; ?></p>
				</div>
				<div class="option-helper">
					<p>Возможность работать с URL объектами как с обычными файлами</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>allow_url_include :</b> <?php echo ini_get($allow_url_include) == '1' ? 'Включено' : 'Выключено'; ?></p>
				</div>
				<div class="option-helper">
					<p>Разрешить использовать fopen, для работы с URL</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>upload_max_filesize :</b> <?php echo ini_get($upload_max_filesize); ?></p>
				</div>
				<div class="option-helper">
					<p>Максимальный размер загружаемого на сервер файла</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>post_max_size :</b> <?php echo ini_get($post_max_size); ?></p>
				</div>
				<div class="option-helper">
					<p>Устанавливает максимально допустимый размер данных, отправляемых методом POST</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>max_execution_time :</b> <?php echo ini_get($max_execution_time); ?></p>
				</div>
				<div class="option-helper">
					<p>Максимальное время, за которое скрипт должен загрузиться</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>memory_limit :</b> <?php echo ini_get($memory_limit); ?></p>
				</div>
				<div class="option-helper">
					<p>Максимальный объем памяти (должен быть больше post_max_size)</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>max_file_uploads :</b> <?php echo ini_get($max_file_uploads); ?></p>
				</div>
				<div class="option-helper">
					<p>Максимальное кол-во загружаемых файлов</p>
				</div>
			</div>
			<div class="option">
				<div class="option-label">
					<p><b>file_uploads :</b> <?php echo ini_get($file_uploads)== '1' ? 'Включено' : 'Выключено'; ?></p>
				</div>
				<div class="option-helper">
					<p>Разрешить/запретить закачку файлов на сервер</p>
				</div>
			</div>
		</div>
	</div><!--end tab-->
	<div id="tab-2" class="tab-content">
		 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div><!--end tab-->
	<div id="tab-3" class="tab-content">
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	</div><!--end tab-->




	

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			
			$('ul.tabs li').click(function(){
				var tab_id = $(this).attr('data-tab');

				$('ul.tabs li').removeClass('current');
				$('.tab-content').removeClass('current');

				$(this).addClass('current');
				$("#"+tab_id).addClass('current');
			});

			$('.option').bind( 'click',function() {
				$(this).find('.option-helper').slideToggle();
			});

		})
	</script>
</body>
</html>