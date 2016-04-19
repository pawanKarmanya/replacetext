<?php include'submit.php';?>
<!doctype html>
<html>
    <head>
        <title>Replace text</title>
        
    </head>
    <body>
        <form method="post">
            <input type="text" name="find" placeholder="find,the,text">
            <input type="text" name="replace" placeholder="text,to,replace">
            <br><p>
                <textarea name="textarea" rows="10"><?php if(isset($result)){ echo $result;}?></textarea>
            </p>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>