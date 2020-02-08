<div id="templatemo_right_column">
<div id="featured_project">
<div id="slider">
<ul id="sliderContent">
<li class="sliderImage">
<a href=""><img src="images/slider/1.jpg" alt="1" /></a>
<span class="top"><strong>Project 1</strong><br />Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
</li>
<li class="sliderImage">
<a href=""><img src="images/slider/2.jpg" alt="2" /></a>
<span class="bottom"><strong>Project 2</strong><br />uisque eget elit quis augue pharetra feugiat.</span>
</li>
<li class="sliderImage">
<img src="images/slider/3.jpg" alt="3" />
<span class="left"><strong>Project 3</strong><br />Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
</li>
<li class="sliderImage">
<img src="images/slider/4.jpg" alt="4" />
<span class="right"><strong>Project 4</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
</li>
<li class="clear sliderImage"></li>
</ul>
</div>
</div>

        <div id="templatemo_main">
         <?
             $posts = mysql_query("SELECT * FROM posts WHERE `$param`=$value");

            while($row = mysql_fetch_assoc($posts)){?>
                <div class="post_section">

                    <? if ($param=="id") {
                        $view=$row['view']+1;
                        $viewQuery = mysql_query("UPDATE `posts` SET `view` = \"$view\" WHERE `posts`.`$param` = $value");
                     ?>
                        <span class="comment"><?=$view?></span>
                        <h2><?=$row['header']?></h2>
                    <?}
                    else{
                        $view=$row['view'];
                        ?>
                        <span class="comment"><a href="blog_post.html"><?=$view?></a></span>
                        <h2><a href="index.php?PostId=<?=$row['id']?>"><?=$row['header']?></a></h2>
                    <?}?>

                    <?
                        $img=$row['img'];
                        $Text=$row['Text'];
                        $AuthorId=$row['Author'];
                        $CategoryId=$row['Category'];
                        $AuthorQuery = mysql_query("SELECT * FROM author WHERE `id`=$AuthorId");
                        $AuthorRow=mysql_fetch_assoc($AuthorQuery);
                        $Author=$AuthorRow['name']." ".$AuthorRow['surname']." ".$AuthorRow['middlname'];
                        $CategoryQuery = mysql_query("SELECT * FROM categories WHERE `id`=$CategoryId");
                        $CategoryRow=mysql_fetch_assoc($CategoryQuery);
                        // $Category=$CategoryRow['name'];
                    ?>
                    <strong>Date:</strong> <?=$row['date']?> | <strong>Author:</strong>
                    <? if ($param=="id") { ?>
                        <?=$Author?>
                    <?}
                    else{?>
                      <a href="index.php?AuthorId=<?=$AuthorRow['id']?>"><?=$Author?></a>
                    <?}?>
                    | <strong>Category:</strong> <a href="index.php?id=<?=$CategoryRow['id']?>"><?=$CategoryRow['name']?></a>
                    <img src="<?=$img?>" alt="image 1" />

                    <p><?=$Text?></p>
                    <? if ($param!="id") { ?>
                        <a href="index.php?PostId=<?=$row['id']?>">Continue reading...</a>
                    <?}?>
                </div>
                 <? if ($param=="id") { ?>
                    <!-- <div class="comment_tab">Comments</div> -->
                    <div id="comment_section">
                        <ol class="comments first_level">
                            <? $comments = mysql_query("SELECT * FROM post_comments WHERE `post_id`=$value");
                             while($row = mysql_fetch_assoc($comments)){ ?>
                                <li>
                                    <div class="comment_box commentbox1">
                                        <div class="gravatar">
                                            <img src="images/avator.png" alt="author">
                                        </div>
                                        <div class="comment_text">
                                        <? $user_id=$row['user_id'];
                                           $userQuery = mysql_query("SELECT * FROM users WHERE `id`=$user_id");
                                            $userRow=mysql_fetch_assoc($userQuery);
                                            $user=$userRow['name'];
                                        ?>
                                            <div class="comment_author"><?=$user?><span class="date"><?=$row['date']?> </span><!-- <span class="time">12:30 AM</span> --></div>
                                            <p><?=$row['comment']?></p>
                                            <div class="reply"><a href="#">Reply</a></div>
                                        </div>
                                        <div class="cleaner"></div>
                                    </div>
                                </li>
                            <?}?>
                        </ol>
                    </div>
                    <div id="comment_form">
                        <h3>Leave a comment</h3>

                        <form action="add_comment.php" method="post">
                            <div class="form_row">
                                <label><strong>Name</strong> (required)</label>
                                <br />
                                <input type="text" name="name" />
                            </div>
                            <div class="form_row">
                                <label><strong>Email</strong>  (required, will not be published)</label>
                                <br />
                                <input type="text" name="email" />
                            </div>
                            <div class="form_row">
                                <label><strong>Comment</strong></label>
                                <br />
                                <textarea  name="comment" rows="" cols=""></textarea>
                            </div>
                            <input type="hidden" name="PostId" value="<?=$value?>">
                            <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                        </form>
                    </div>
                <?}?>
            <?}?>
        </div>

        <div class="cleaner"></div>
  </div>
