<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(isset($_POST['name'])){
        
        $name = $_POST['name'];
    }
}
?>

<!doctype_html>
<html>
    <body>
        <h2>
            <?php
            if(isset($name)){
                echo '&quot;Hello, '.$name.'!&quot;';
            }
            
            ?>
        </h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name">
            <button type="submit">Send</button>
        </form>
    </body>
</html>

