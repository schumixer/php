<?
namespace workWithData;
function readData()
{
    $fl = fopen($_SERVER['DOCUMENT_ROOT']."/include/login.txt", 'r') or die("не удалось открыть файл");
	$fp = fopen($_SERVER['DOCUMENT_ROOT']."/include/password.txt", 'r') or die("не удалось открыть файл");
	$data = [];
	while(!feof($fl))
		$data[htmlentities(rtrim(fgets($fl)))] = htmlentities(rtrim(fgets($fp)));
	fclose($fl);
    fclose($fp);
    return $data;
};

function errorSuccess(&$error, &$success, $data)
{
    if(!empty($_POST))
	{
		
		if(array_key_exists($_POST['login'],$data)  && $data[$_POST['login']] == $_POST['password'] )
		{
			$success = true;
		}
		else
		{
			$error = true;
		}
	}
};
?>
	