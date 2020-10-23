<form action="<?=$_SERVER['PHP_SELF']?>" method ="POST">
    <div class="index-auth">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="iat">Ваш логин: <br /> <input id="login_id" size="30" name="login" value="<?=htmlspecialchars($_POST['login']??'')?>"/></td>
            </tr>
            <tr>
                <td class="iat">Ваш пароль: <br /> <input id="login_id" type="password" size="30" name="password" value="<?=htmlspecialchars($_POST['password']??'') ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="Войти" /></td>
            </tr>
        </table>
    </div>
</form>

