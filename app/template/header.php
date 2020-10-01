<?
	include $_SERVER['DOCUMENT_ROOT'].'/route/main_menu.php';
	include $_SERVER['DOCUMENT_ROOT'].'/app/helpers/helper.php';
	include $_SERVER['DOCUMENT_ROOT'].'/app/helpers/sortArray.php';
	include $_SERVER['DOCUMENT_ROOT'].'/app/helpers/add.php';
	$data = workWithData\readData();
	$success = false;
	$error = false;
	workWithData\errorSuccess($error,$success, $data);
	$arr = sortArray\sort_($arr,true);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="/styles/global/styles.css">
<link rel="stylesheet" href="/styles/main/main_styles.css">
<link rel="stylesheet" href="/route/about/styles/about_styles.css">
<link rel="stylesheet" href="/route/contacts/styles/contacts_styles.css">
<link rel="stylesheet" href="/route/photo/styles/photo_styles.css">
<title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project" /></div>
        <div style="clear: both"></div>
		<ul>
			<?
				foreach ($arr as $value) {?>
					<li class = "headerList"><a href="<?=$value['path']?>"> <?=$value['title']?> </a></li>
				
			<?}?>
		</ul>
	</div>
	<?	addHeader\add();?>