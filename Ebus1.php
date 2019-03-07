<!DOCTYPE html>
<html>
 <head>
             <!-- The Title -->
             <title>Select Product</title>
          
             <!--JQuery -->
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          
              <!--Javascript -->
              <script type="text/javascript" src="cost_cal.js"></script>
              
              <style>
              .button {
               background-color:blue;
               border: none;
               color: white;
               padding: 15px 25px;
               text-align: center;
               font-size: 20px;
               cursor: pointer;
               }

               .button:hover {
              background-color:lightskyblue;
              }
              </style> 
          
 </head>
     
     <body align="center">
     
           <!-- heading -->
           <u><center><h1>Please Select A Product</h1></center></u>
           
         
           <br />
           
         
           <!-- Posting on to next page -->
           <form method="POST" action="Ebus2.php">
         
           <!-- Blockchain radio button -->
               <label for="Blockchain">
                  <input type="radio" id="Blockchain" name="product" checked onClick="disablebtnProceed()"/>
                   Blockchain @ $1000
                </label>
            
            <br />
            
            <br />
            
            <br />
            
                 <!-- Autonomous Things radio button -->  
                 
                <label for="Autonomous Things">
                <input type="radio" id="Autonomous Things" name="product" checked onClick="disablebtnProceed()"/>
                 Autonomous Things @ $2000
                </label>
            
            
            <br />
            
            <br />
            
            <br />
            
                   <!-- Immersive Experience radio button --> 
                   
                <label for="Immersive Experience">
                <input type="radio" id="Immersive Experience" name="product" checked onClick="disablebtnProceed()"/>
                Immersive Experience @ $3000
                </label>
            
                   
            <br />
            
            <br />
            
            <br />
            
         
            
                     <!-- subtotal Textbox -->   
                     
                <label for="Subtotal">
                Sub Total
                <input type="text" id="Subtotal" name="Subtotal" value="0.00" readonly/>
                </label>
            
            <br />
            
            <br />
            
            <br /> 
            
            <!-- discount Textbox --> 
            
            <label for="Discount">
                Discount @ 10% 
                (- discount)
                <input type="text" id="Discount" name="Discount" value="0.00" readonly/>
            </label>
            
            <br /> 
            
            <br />
            
            <br />
            
                <!-- vat Textbox -->    
                
               <label for="Vat">
                Vat @ 20%
                <input type="text" id="Vat" name="Vat" value="0.00" readonly/>
            </label>
            
            <br />
            
            <br />
            
            <br />
            
         <!-- total Textbox-->    
            <label for="Total">
                Total (- discount + vat)
                <input type="text" id="Total" name="Total" value="0.00" readonly/>
            </label>
            
            <br />
            
            <br />
            
            
            <br />
            
         <!-- button to Add the items to -->    
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br />
        
        <!-- button to calculate cost and clear selections -->
        <button style="font-size:15px;" onClick="calcSub()">Calculate cost</button>
        
        <a href="Ebus1.php"><button style="font-size:20px; background-color:black; color:white;">Clear Options</button></a>
        
        <br />
        
        <br />
        
       <a href = "ConsultingOptions.html"><button class="button">Back To Consulting Page</button></a>
          <br>
          <br>
        
        <!-- button to Homepage -->
       <a href="Homepage.html"> <img src="SpHome.png" alt"homepage" height="100" width="100"></a>
       
       
        
        <br />
        
        <br />
        
      
        
    </body>
</html>

