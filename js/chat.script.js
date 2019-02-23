$(".chat")
  .$("a")
  .click(function() {
    var getUser = $(".chat")
      .$("a")
      .val();
    console.log(getUser);
  });

$(".closeChat").click(function() {
  $(".Wechat").hide();
});
