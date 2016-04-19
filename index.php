<?php include'submit.php';?>
<!doctype html>
<html>
    <head>
        <title>Replace text</title>
        
    </head>
    <body>
        <form method="post">
            <input type="text" name="find">
            <input type="text" name="replace">
            <br>
            <textarea name="textarea"><?php if(isset($result)){ echo $result;}?></textarea>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>