$( document ).ready(() => {
  $(document).scroll(function() {
    const y = $(this).scrollTop();
    if (y > 450) {
      $(".navigation-button").removeClass("navigation-button-off");
  } else {
    $(".navigation-button").addClass("navigation-button-off");
  }
  });

  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y) {
      console.log(y)}
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

  $(document).scroll(function() {
    const y = $(this).scrollTop();
    if (y > 2400) {
      $(".barre-contact").removeClass("barre-hide");
  } else {
    $(".barre-contact").addClass("barre-hide");
  }
  });

  // Parallax !
  var parallax = document.querySelector("#main");
  $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 1080) {
      window.addEventListener('scroll', () => {
    parallax.style.backgroundPositionY = 500 + -y / 5  + "px";
  });
  }
  });


}); // onReadyEnd
