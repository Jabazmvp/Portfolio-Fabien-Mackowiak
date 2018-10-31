$( document ).ready(() => {

  window.addEventListener("load", () =>{
    $(".loader").fadeOut(400);
    $("html").css("height","auto");
  });
  var carousel = $(".carousel"),
      currdeg  = 0;

  $(".next").on("click", { d: "n" }, rotate);
  $(".prev").on("click", { d: "p" }, rotate);

  function rotate(e){
    if(e.data.d=="n"){
      currdeg = currdeg - 60;
    }
    if(e.data.d=="p"){
      currdeg = currdeg + 60;
    }
    carousel.css({
      "-webkit-transform": "rotateY("+currdeg+"deg)",
      "-moz-transform": "rotateY("+currdeg+"deg)",
      "-o-transform": "rotateY("+currdeg+"deg)",
      "transform": "rotateY("+currdeg+"deg)"
    });
  }

  $('#div-white-arrow').on('click', () => {

    var target = $("#row1");

    $('html, body').stop().animate({
      scrollTop: $(target).offset().top
    }, 1000);
  });

  // Parallax !
  var parallax = document.querySelector("#main");
  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 1080) {
      window.addEventListener('scroll', () => {
    parallax.style.backgroundPositionY = 220 + -y / 11  + "px";
  });
  }
  });

  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 2100) {
      $(".separation").addClass("separation_open");
  } else {
      $(".separation").removeClass("separation_open");
  }
});

  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 1320) {
      console.log(y);
  }});

  $(".icon_div").click(function () {

    if (!$(this).hasClass("icon_div_clicked")) {
      $(".icon_div").removeClass("icon_div_clicked");
      $(this).addClass("icon_div_clicked");
    } else if ($(this).hasClass("icon_div_clicked")) {
      $(this).removeClass("icon_div_clicked");
      return console.log("0");
    }
    var idElt = $(this).attr('id');

    switch (idElt) {
      case "0":
        console.log("BASE");
        break;
      case "1":
        $(".all_texts").fadeOut(400, function () {
          $(".text_1").fadeIn(400);
        });
        break;
        case "2":
        $(".all_texts").fadeOut(200, function () {
          $(".text_2").fadeIn(200);
        });
          break;
      default:
    }
  });



}); // onReadyEnd
