function validate() {
  var password = document.getElementsByClassName("password").value;
  var confirmPassword = document.getElementsByClassName("confirm-password").value;
  var ErrorMsg = document.getElementsByClassName("ErrorMsgHolder");

  
  if (password != confirmPassword) {
    document.getElementById('ErrorMsgHolder').style.color = 'red';
    document.getElementById('ErrorMsgHolder').innerHTML = 'Use same password';
  }
}