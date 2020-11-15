<!DOCTYPE html>
<html>
<?php
include_once("./lib.php");
   ?>
    <head>
    </head>
    <body>
    <form action="/index.php" method="post">
    <textarea name="in_text" cols="40" rows="7"></textarea>
    <button type="submit">Übersetzen</button>
    </form>
    <?php if(isset($_POST["in_text"])){ 
        echo(convertToColour($_POST["in_text"]));
        ?>
    <?php } ?>
    </body>
</html>