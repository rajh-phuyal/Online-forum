
function validateForm(){
    var checkValidity = document.forms["user-inputs"]["username"].value;
    if (checkName == null || checkName == "" || !isNaN(checkName)){
        alert ("The username field is not a name! \n Please enter the correct name!");
        return false;
    }
}