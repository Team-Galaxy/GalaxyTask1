var confirmtext = document.getElementById("ConfirmPassword"),
passwordText = document.getElementById("EnterPassword"),
submitButton = document.getElementById("submitButton"),
matchText = document.getElementById("matchText"),
lengthErr = document.getElementById("lengthErr")
function checkLength() {
    if(passwordText.value.length>=8){
        lengthErr.style.visibility="hidden"
    }
}
function checksimilar(){
    if(passwordText.value != confirmtext.value){
        submitButton.setAttribute("disabled", "disabled")
        matchText.style.visibility="visible"
    }
    if(passwordText.value === confirmtext.value){
        submitButton.removeAttribute("disabled")
        matchText.style.visibility="hidden"
    }
}