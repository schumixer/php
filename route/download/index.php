<?
	include $_SERVER['DOCUMENT_ROOT'].'/app/template/header.php';
	workWithImages\checkUpload($uploadPath);
	// $path = "/";
	// foreach ($variable as $value) {
	// 	if($variable["title"]=='Photo') {
	// 		$path =$variable["path"];
	// 		break; 
	// 	}
	// }
?>  
<div class="download">
	<form enctype="multipart/form-data" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
		<span>Download the file</span>
		<input multiple type="file" name="myfiles[]"/>
		<br/>
		<br/>
		<input type="submit" name="upload" value="Download">
	</form>
</div>
<?
	include $_SERVER['DOCUMENT_ROOT'].'/app/template/footer.php';
?>  