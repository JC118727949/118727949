 /* global $ */

// function to check the textboxes info
function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    var Mobile = document.getElementById("Mobile").value;
    var name = document.getElementById("name").value;
    
    // if statement for error handling 
    if (name==""){
        alert("Please enter your name");
    }
   else if (Mobile==""){
        alert("Please enter your Email");
   }
    else if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
}

//function thta enables the proceed button
function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

//function that disables the proceed button
function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}

