function validate() {
  var password = document.getElementsByClassName("password").value;
  var confirmPassword = document.getElementsByClassName("confirm-password").value;
  var ErrorMsg = document.getElementsByClassName("ErrorMsgHolder");

  if(password!=confirmPassword){
    ErrorMsg.innerHTML("Wrong password");
  }
  else{
    
  }

}