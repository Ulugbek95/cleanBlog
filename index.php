<?include 'bd.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clean Blog Template</title>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />
<!-- <meta http-equiv="refresh" content="5">  -->
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="s3slider.css" rel="stylesheet" type="text/css" />
<!-- JavaScripts-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 1600
        });
    });
</script>
</head>
<body>
<div id="templatemo_wrapper">
<? include 'header.php';?>
<? include 'left_column.php';?>
    <? if (isset($_GET['id'])) {
        $param="Category";
        $value = $_GET['id'];    
    }
    elseif (isset($_GET['AuthorId'])) {
        $param="Author";
        $value = $_GET['AuthorId']; 
     }
    elseif (isset($_GET['PostId'])){
        $param="id";
        $value = $_GET['PostId'];
    } 
    else{
        $param="OftenRead";
        $value = 1;
    }
    ?>
<? include 'right_column.php';?>   
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>
<? include 'footer.php';?>    
    <div class="cleaner"></div>
</div> <!-- end of warpper -->
<? 
// header("refresh: 3"); 
?>
</body>
</html>