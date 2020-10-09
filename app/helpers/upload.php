<?
namespace workWithImages;
function checkUpload($uploadPath) {
    if(isset($_POST['upload'])) {{
        if(!empty($_FILES['myfile']['error']) || $_FILES['myfile']['type']!="image/jpeg" ||$_FILES['myfile']['size']>5000000 ){?>
            <h2 class="error">ERROR</h2>
        <?}
        else {
            move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadPath.$_FILES['myfile']['name'] );?>
            <h2 class="success">SUCCESS</h2>
        <?}
    }}
}
?>