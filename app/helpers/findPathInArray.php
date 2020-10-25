<?
namespace findPathInArray;
function findPathInArray($elem, $arr){
    foreach ($arr as $item) {
        if($item['title']==$elem){
            return $item['path'];
        }
    }
    return -1;
}
?>