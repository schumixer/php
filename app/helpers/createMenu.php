<?
namespace menu;
function create($arr, $auth, $className){
    $isAuthFlag = $auth->isAuth();
    foreach ($arr as $key => $value) {
        if(!$isAuthFlag) {
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
