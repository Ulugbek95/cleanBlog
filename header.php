	<div id="templatemo_menu">
        <?
        $header = mysql_query("SELECT * FROM header");
        ?>         
        <ul>
            <?while($row = mysql_fetch_assoc($header)){?>
                <li><a href="<?=$row['link']?>" ><?=$row['name']?></a></li>
            <?}?>          
        </ul>	
    
    </div> <!-- end of templatemo_menu -->