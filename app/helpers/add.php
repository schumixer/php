<?
namespace addHeader;
function add($arr){
    $url = $_SERVER['REQUEST_URI'];
    // $url = explode('?', $url);
    // $url = $url[0];
    $res = "main";
    foreach ($arr as $value) {
        if($value["path"]==$url) {
            $res = $value["title"];
            break;
        }
        
    }
    ?>
    <h1 class = "main_header"><?=$res?></h1>
<?
}
?>