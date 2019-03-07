<?php
session_start()
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Title -->
        <title>RECEIPT</title>
    </head>
    
 <body align="center">
          <!-- subheading -->
          <u><center><h1>RECEIPT </h1></center></u>
 
          <?php
          //Echo Session variables that were set on previous page
          
           echo "Name: " . $_POST["name"] . "<br /> <br />";        
      
           echo "Mobile: " . $_POST["Mobile"] . "<br /> <br />";
       
           echo "Subtotal: " . $_SESSION["Subtotal"] . " Euro.<br /> <br />";
        
           echo "Discount: " . $_SESSION["Discount"] . " Euro.<br /> <br />";
       
           echo "Vat: " . $_SESSION["Vat"] . " Euro.<br /> <br />";
       
           echo "Total: " . $_SESSION["Total"] . " Euro.<br /> <br />";
       
           ?>
       
           <br />
       
           <br />
           
           <p>Thank you for purchasing from JC Consulting Services.
              We hope to hear from you again.</p>
           
           <br />
           

           
           <!-- button to Homepage -->
       <a href="Homepage.html"> <img src="SpHome.png" alt"homepage" height="100" width="100"></a>
        
        <br />
        <br />
        
       
          
    </body>
    
</html>    


