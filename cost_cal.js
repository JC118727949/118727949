/* global $ */

//creating an if statement 
function calcSub(){

     //declaring our variabes
     var argsubtotal;
     
     //if statement 
    if(document.getElementById("Blockchain").checked) {
         argsubtotal = 1000; // subtotal if Blockchain is checked
     }  
        else if(document.getElementById("Autonomous Things").checked) {
         argsubtotal = 2000; // subtotal if Autonomous Things is checked
     }     
        else if(document.getElementById("Immersive Experience").checked) {
         argsubtotal = 3000; // subtotal if Immersive Experience is checked
     }     
        
    
    calcDisVatTotal(argsubtotal);
}

//Function to calculate discount, vat and total
function calcDisVatTotal(parmSubTotal){
    
    // declaring our variables
    var Subtotal = parmSubTotal;
    var vatAmt;
    var discountAmt;
    var TotalPrice;
    
    // calculate discount value
    discountAmt = (parmSubTotal * .1);
    
    // calculate vat value
    vatAmt = (parmSubTotal * .2);
    
    // calculate total
    TotalPrice = (parmSubTotal + vatAmt - discountAmt);
    
    //pass all the values
    display(Subtotal , vatAmt , discountAmt , TotalPrice);
}

//Function to display all the value passed through
function display(parm1 , parm2 , parm3 , parm4){

     // display subtotal
     document.getElementById("Subtotal").value = parm1; 
     
     // display vat
     document.getElementById("Vat").value = parm2;
     
     // display discount 
     document.getElementById("Discount").value = parm3; 
     
     // display total
     document.getElementById("Total").value = parm4;
     
     enablebtnProceed();
}

// function that enables proceed button
function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

// function that disables proceed button
function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}



