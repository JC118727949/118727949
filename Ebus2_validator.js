 /* global $ */

// Checkingheck the textboxes information
    function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    var Mobile = document.getElementById("Mobile").value;
    var name = document.getElementById("name").value;
    
         
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


      //Proceed button
      function enablebtnPurchase(){
      $('#btnPurchase').prop('disabled',false);
}

       //Disable the proceed button
       function disablebtnPurchase(){
       $('#btnPurchase').prop('disabled',true);
}

