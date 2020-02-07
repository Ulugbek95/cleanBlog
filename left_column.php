    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="http://www.templatemo.com" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
        <div id="templatemo_sidebar">
    	
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
            
            <h4>Categories</h4>
                <?
                $categories = mysql_query("SELECT * FROM categories");
                ?>         
            <ul class="templatemo_list">
                <?while($row = mysql_fetch_assoc($categories)){?>
                    <li><a href="index.php?id=<?=$row['id']?>" target="_parent" ><?=$row['name']?></a></li>
                <?}?>  
            </ul>
            
            <div class="cleaner_h40"></div>
            
            <h4>Friends</h4>
                <?
                 $friends = mysql_query("SELECT * FROM friends");
                ?>  
            <ul class="templatemo_list">
                <?while($row = mysql_fetch_assoc($friends)){?>
                    <li><a href="#" target="_parent"><?=$row['name']?></a></li>
                <?}?> 
            </ul>
            
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->