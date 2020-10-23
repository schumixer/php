<?
$auth = new AuthClass();
$success = false;
$error = false;
if(!empty($_POST))
{
    $auth->auth($_POST['login'], $_POST['password'], $error, $success);
}
if ($_GET["is_exit"]==1){
    $auth->out();
}
$arr = sortArray\sort_($arr,true);
?>