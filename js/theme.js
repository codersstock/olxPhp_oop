function login() {

    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;
    var message = document.getElementById("message");
    if (user === "" || pass === "") {
        message.innerHTML = "Plz Enter Required Fields";
        return false;
    }

}




