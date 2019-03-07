/* global $ */

//creating an if statement 
function calcSub(){

     //Declaring Variables
     var argsubtotal;
     
      
    if(document.getElementById("Blockchain").checked) {
         argsubtotal = 1000; // Subtotal if Blockchain is checked
     }  
        else if(document.getElementById("Autonomous Things").checked) {
         argsubtotal = 2000; // Subtotal if Autonomous Things is checked
     }     
        else if(document.getElementById("Immersive Experience").checked) {
         argsubtotal = 3000; // Subtotal if Immersive Experience is checked
     }     
        
    
    calcDisVatTotal(argsubtotal);
}


function calcDisVatTotal(parmSubTotal){
    
    
    // Declaring variables
    var Subtotal = parmSubTotal;
    var vatAmt;
    var discountAmt;
    var TotalPrice;
    
    // calculate discount amount
    discountAmt = (parmSubTotal * .1);
    
    // calculate vat amount
    vatAmt = (parmSubTotal * .2);
    
    // calculate total amount
    TotalPrice = (parmSubTotal + vatAmt - discountAmt);
    
    //pass all the values on
    display(Subtotal , vatAmt , discountAmt , TotalPrice);
}

    //Function to display all the value passed on
    function display(parm1 , parm2 , parm3 , parm4){

     // subtotal
     document.getElementById("Subtotal").value = parm1; 
     
     //  vat
     document.getElementById("Vat").value = parm2;
     
     //  discount 
     document.getElementById("Discount").value = parm3; 
     
     //  total
     document.getElementById("Total").value = parm4;
     
     enablebtnProceed();
}

// Enable proceed button
function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

// Disable proceed button
function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}



