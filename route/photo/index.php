<?
	include $_SERVER['DOCUMENT_ROOT'].'/app/template/header.php';
	$images = workWithImages\uploadImages($uploadPath);
?> 
<div class="photo">
	<?foreach ($images as $image) {?>
		<img src=<?=$image?> height="100px" width="100px">
	<?}?>
	<form id="formElem" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
		<input type="checkbox" id="deleteImages" name="deleteImages">
		<label for="deleteImages"> Delete images?</label><br>
		<input id= "delete" type="submit" name="delete" value="delete">
	</form>

</div> 
<?
	include $_SERVER['DOCUMENT_ROOT'].'/app/template/footer.php';
?>  