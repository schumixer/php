<?
class AuthClass {
    private $data;
    public function __construct() {
        session_start(); //Запускаем сессии
        $this->$data = $this->readData();
        if($this->isAuth()) {
            setcookie("login",$_COOKIE["login"],time()+3600*30*24,"/");
            setcookie("session_id",$_COOKIE["session_id"],time()+30,"/");
            setcookie("isFirst",1,time()+3600*30*24,"/");
        }
                
    }
    private function readData(){
        $fl = fopen($_SERVER['DOCUMENT_ROOT']."/include/login.txt", 'r') or die("не удалось открыть файл");
        $fp = fopen($_SERVER['DOCUMENT_ROOT']."/include/password.txt", 'r') or die("не удалось открыть файл");
        $data = [];
        while(!feof($fl))
            $data[htmlentities(rtrim(fgets($fl)))] = htmlentities(rtrim(fgets($fp)));
        fclose($fl);
        fclose($fp);
        return $data;
    }
    public function isAuth() {
        if (isset($_SESSION["is_auth"])) { //Если сессия существует
            return $_SESSION["is_auth"]; //Возвращаем значение переменной сессии is_auth (хранит true если авторизован, false если не авторизован)
        }
        else return false; //Пользователь не авторизован, т.к. переменная is_auth не создана
    }



        /**
     * Авторизация пользователя
     * @param string $login
     * @param string $passwors 
     */
    public function auth($login, $passwors, &$error, &$success) {
        if(array_key_exists($login ,$this->$data)  && $this->$data[$login] == $passwors )
		{
            $success = true;
            $_SESSION["is_auth"] = true; //Делаем пользователя авторизованным
            if(!$_COOKIE["login"])
                setcookie("login",$login,time()+3600*30*24,"/");
                setcookie("isFirst",1,time()+3600*30*24,"/");
            return true;
		}
		else
		{
            $error = true;
            $_SESSION["is_auth"] = false;
            return false; 
		}
    }
        /**
     * Метод возвращает логин авторизованного пользователя 
     */
    public function getLogin() {
        if ($this->isAuth()) { //Если пользователь авторизован
            return $_SESSION["login"]; //Возвращаем логин, который записан в сессию
        }
    }
     
     
    public function out() {
        unset($_SESSION["login"]);
        setcookie("login","",time()-3600);
        setcookie("isFirst","",time()-3600);
        $_SESSION = array(); //Очищаем сессию
        session_destroy(); //Уничтожаем
    }
}
?>