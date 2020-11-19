<?
$auth = new AuthClass();


$sessionIsOverWithAuth = isset($_COOKIE['login']) && $_SESSION[is_auth]!=1;
if ($sessionIsOverWithAuth){
    
    if($_COOKIE["isFirst"]==1){
        setcookie("isFirst",2,time()+3600*30*24,"/");
        $path = findPathInArray\findPathInArray("Registration",$arr);
        header("Location: " . $path);
        exit;
    }
    //setcookie("isFirst",1,time()+3600*30*24,"/");
    $_POST['login'] = $_COOKIE['login'];
}

$success = false;
$error = false;
if(isset($_POST['password']))
{
    $auth->auth($_POST['login'], $_POST['password'], $error, $success);
}

if ($_GET["is_exit"]==1){
    $auth->out();
}
#profile deletion
if(!$auth->isAuth()){
    for ($i=0; $i<count($arr); $i++) {
        if($arr[$i]['title']=='Profile'){
            unset($arr[$i]);
            break;
        }
    }
}
################
$arr = sortArray\sort_($arr,true);

?>