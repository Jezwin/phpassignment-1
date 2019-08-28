<html>
    <body>
        <h1>Hi</h1>

        <?php
        if(isset($_SERVER['HTTP_REFERER'])) {
            
        //echo $_SERVER['HTTP_REFERER']; 
        if ($_SERVER['HTTP_REFERER'] == "http://localhost:3000/a.html"){
            echo '<a href="a.html"> You can go back to where you came from </a>';
         }    
             
           
        }
        else {
            echo '<p> Great! You landed on this page directly </p>';
        }  
        ?>
        
    </body>

</html>