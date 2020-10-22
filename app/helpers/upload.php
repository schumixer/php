<?
namespace workWithImages;
function checkUpload($uploadPath) {
    $result = 0;
    if(isset($_POST['my_file_upload'])) {
        
        if(empty($_FILES) || count($_FILES)>5 /* || $_FILES['myfile']['type']!="image/jpeg" ||$_FILES['myfile']['size']>5000000*/ ){
            //<h2 class="error">ERROR</h2>
            $result = 0;
        }
        else {
            $error = false;
            for ($i=0; $i < count($_FILES); $i++)  {
                if($_FILES[$i]["error"][$i]!=0 || $_FILES[$i]['type']!="image/jpeg" || $_FILES[$i]["size"]>50000000) {
                    $error = true;
                    break;
                }
            }
            if($error){
                //<h2 class="error">ERROR</h2>
                $result = 0;
            }
            else{
                for ($i=0; $i < count($_FILES); $i++)  {
                    move_uploaded_file($_FILES[$i]['tmp_name'], $uploadPath.$_FILES[$i]['name'] );
                }
                //<h2 class="success">SUCCESS</h2>
                $result = 1;
            }
        } 
    }
    die( json_encode( $result ) );
}
function uploadImages($uploadPath) {
    $images = array_diff(scandir($uploadPath), array('.', '..'));
    foreach ($images as &$image) {
        $image = "/upload/" . $image;
    }
    return $images;
}

?>