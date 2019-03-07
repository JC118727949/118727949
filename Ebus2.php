<?php


// Start the session


session_start();


?>

   <!--Doctype HTML-->
<html>
    <head>
        
           <!-- title -->
           
             <title> Enter Details</title>
        
           <!--JQuery-->
           
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
     </head>
    
             <body align="center">
        
             <!-- The Subheading -->
             
             
             <h4>Please enter your payment details.</h4>
        
             
            <br />
            
            <!-- Proceeding   when all actions are completed -->
            <form method= "POST" action= "Ebus3.php">
                
                <!-- Name Textbox -->
                <label for="name"> Name</label>
                
                <input type="text" id="name" name="name" maxlength="20">
                
                <br />
                <br />
                
                <!-- Mobile Textbox -->
                <label for "Mobile"> Mobile</label>
                
                <input type="text" id="Mobile" name="Mobile" maxlength="10">
                
                <br />
                <br />
                
                <!-- pin Textbox -->
                <label for="user_pin"> PIN</label>
                
                <input type="password" id="user_pin" name="Total" placeholder="Card Pin" maxlength="4">
                
                <!-- button to proceed -->
                <button style="font-size:15px" type="submit" id="btnPurchase" disabled>
                     Proceed with Purchase </button>
                
            </form>
            
            <br />
            
            <!-- button to go back  and button to validate  -->
            <a href="Ebus1.php"><button style="font-size:15px; background-color:silver;">Back</button></a>
            
            <button style="font-size:15px;" onClick="validateDetails()"> Validate </button>
            <script type="text/javascript" src="Ebus2_validator.js"></script>

            <?php
        // Set session variables
        
        $_SESSION["Subtotal"] = $_POST["Subtotal"];
        
        $_SESSION["Discount"] = $_POST["Discount"];
        
        $_SESSION["Vat"] = $_POST["Vat"];
        
        $_SESSION["Total"] = $_POST["Total"];
        
        $_SESSION["name"] = $_POST["name"];
        
        $_SESSION["Mobile"] = $_POST["Mobile"];
        
        ?>
        
        <br />
        <br />
       
    </body>
    
</html>

