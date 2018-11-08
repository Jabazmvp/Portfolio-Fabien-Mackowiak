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
  var parallax = document.querySelector("#rowobjectifs");
  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y) {
      window.addEventListener('scroll', () => {
    parallax.style.backgroundPositionY = -y / 7  + "px";
  });
  }
  });

  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 1470) {
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

  function manageDiv(num) {
    var str = ".text_" + num;
    if ($(str).css("display") !== "none") {
      $(".all_texts").stop().delay(250).hide(0);
      $(".text_0").show(0);
    } else {
      $(".all_texts").stop().delay(250).hide(0);
      $(str).show(0);
    };
  };

  $(".icon_div").click(function () {
    $(".all_texts").stop();
    $(".text_container").addClass("text_container_changing");
    setTimeout(function () {
      $(".text_container").removeClass("text_container_changing");
    }, 500)
    if (!$(this).hasClass("icon_div_clicked")) {
      $(".icon_div").removeClass("icon_div_clicked");
      $(this).addClass("icon_div_clicked");
    } else if ($(this).hasClass("icon_div_clicked")) {
      $(this).removeClass("icon_div_clicked");
    }
    var idElt = $(this).attr('id');
  manageDiv(idElt);
  });





}); // onReadyEnd
