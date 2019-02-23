function login() {
  var user = document.getElementById("username").value;
  var pass = document.getElementById("password").value;
  var message = document.getElementById("message");
  if (user === "" || pass === "") {
    message.innerHTML = "Plz Enter Required Fields";
    return false;
  }
}

$(document).ready(function() {
  $(".btn_cat").click(function() {
    $(".CatDropDown").fadeToggle("fast", "swing");
  });

  $("section").click(function() {
    $(".CatDropDown").fadeOut("fast", "swing");
  });

  $("#heart-fav").click(function() {
    $(this).toggleClass("red-heart");
  });
});

//var chatButton = document.getElementsByClassName("chat");
