<?
    $arr = sortArray\sort_($arr,false);
?>
<div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.
    <ul>
        <?
            foreach ($arr as $value) {?>
                <li class = "footerList"><a href="<?=$value['path']?>"> <?=$value['title']?> </a></li>
            
        <?}?>
	</ul>
</div>

</body>
</html>