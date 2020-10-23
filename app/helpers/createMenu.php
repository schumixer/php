<?
namespace menu;
function create($arr, $auth, $className){
    foreach ($arr as $key => $value) {
        if(!$auth->isAuth()) {
            if($value['title']=='Leave'){
                unset($arr[$key]);
                break;
            }
        }
        else {
            if($value['title']=='Registration'){
                unset($arr[$key]);
                break;
            }
        }
    }
    foreach ($arr as $value) {?>
        <li class = <?=$className?>><a href="<?=$value['path']?>"> <?=$value['title']?> </a></li>
    <?}
}
?>
