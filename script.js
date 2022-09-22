$("button").hover(function(){
    $(this).css("background-color", "#000000");
    }, function(){
    $(this).css("background-color", "#B59D5C");

  });

  $("button").hover(function(){
    $(this).css("color", "#B59D5C");
    }, function(){
    $(this).css("color", "#FFFFFF");

  });

  $('#appoiment').hover(
				
    function () {
       $(background).slideUp({"background-color":"black"});
    }, 

    function () {
       $(this).slideDown({"background-color":"#B59D5C"});
    })