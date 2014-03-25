$(".profile-pic").hover(function() {
       $("#email").css('visibility','visible');
     });
    $(".profile-pic").mouseleave(function() {
      $("#email").css("visibility","hidden");
    });
    $("#email").hover(function() {
      $(this).css("visibility", "visible");
    });
    $("#email").mouseleave(function() {
      $(this).css("visibility", "hidden");
    });

    $('#myTab a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    });

    
