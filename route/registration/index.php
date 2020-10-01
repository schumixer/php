<?
	include $_SERVER['DOCUMENT_ROOT'].'/app/template/header.php';
?>  
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="left-collum-index">
		
			<h1>Возможности проекта —</h1>
			<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
			
		
		</td>
		<td class="right-collum-index">
			
			<div class="project-folders-menu">
				<ul class="project-folders-v">
				<li class="project-folders-v-active"><span>Авторизация</span></li>
				<li><a href="#">Регистрация</a></li>
				<li><a href="#">Забыли пароль?</a></li>
				</ul>
			<div style="clear: both;"></div>
			</div>
			<?
				if($success)
					include $_SERVER['DOCUMENT_ROOT'].'/include/success.php';
				else if(isset($_GET['login']) && $_GET['login'] =='yes' || $error)
					include $_SERVER['DOCUMENT_ROOT'].'/include/form.php';
				if($error)
					include $_SERVER['DOCUMENT_ROOT'].'/include/fail.php';
				
			?>
		</td>
	</tr>
</table>
<?
	include $_SERVER['DOCUMENT_ROOT'].'/app/template/footer.php';
?>  