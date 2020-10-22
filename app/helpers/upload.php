<?
namespace workWithImages;
function checkUpload($uploadPath) {
    if(isset($_POST['upload'])) {
        
        if(empty($_FILES['myfiles']['error']) || count($_FILES['myfiles']['name'])>5 /* || $_FILES['myfile']['type']!="image/jpeg" ||$_FILES['myfile']['size']>5000000*/ ){?>
            <h2 class="error">ERROR</h2>
        <?}
        else {
            $error = false;
            for ($i=0; $i < count($_FILES['myfiles']['name']); $i++)  {
                if($_FILES['myfiles']["error"][$i]!=0 || $_FILES['myfiles']['type'][$i]!="image/jpeg" || $_FILES['myfiles']["size"][$i]>5000000) {
                    $error = true;
                    break;
                }
            }
            if($error){?>
                <h2 class="error">ERROR</h2>
            <?}
            else{
                for ($i=0; $i < count($_FILES['myfiles']['name']); $i++)  {
                    move_uploaded_file($_FILES['myfiles']['tmp_name'][$i], $uploadPath.$_FILES['myfiles']['name'][$i] );
                }?>
                <h2 class="success">SUCCESS</h2>
            <?}
        } 
    }
}
function uploadImages($uploadPath) {
    $images = array_diff(scandir($uploadPath), array('.', '..'));
    foreach ($images as &$image) {
        $image = "/upload/" . $image;
    }
    return $images;
}

?>