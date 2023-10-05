// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement("script");

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
// after the API code downloads.
var playerList = [];

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
}

$(document).ready(function () {
  $(document).on("click", ".btn-play", function (event) {
    event.preventDefault();
    for (var i = 0; i < playerList.length; i++) {
      playerList[i].stopVideo();
    }
    targetDiv = $(this).parent(".box-video");
    videoId = $(this).attr("data-video-id");
    var player;
    player = new YT.Player(targetDiv[0], {
      // height: '390',
      // width: '1006',
      videoId: videoId,
      playerVars: {
        playsinline: 1,
      },
      events: {
        onReady: onPlayerReady,
        onStateChange: function (event) {
          var currentUrl = event.target.getVideoUrl();
          if (event.data == YT.PlayerState.PLAYING) {
            for (var i = 0; i < playerList.length; i++) {
              if (currentUrl != playerList[i].getVideoUrl()) {
                playerList[i].stopVideo();
              }
            }
          }
        },
      },
    });
    playerList.push(player);
    // $(this).remove();
  });

  var viewportWidth = $(window).width();
  $(window).on("resize", function () {
    viewportWidth = $(window).width();
  });

  const lazyContent = new LazyLoad({
    // use_native: true // <-- there you go
  });

  // menu-scroll
  $(window).scroll(function () {
    var yTop = $(this).scrollTop();
    if (viewportWidth >= 1024) {
      if (yTop != 0) {
        $("header").addClass("scroll");
      } else {
        $("header").removeClass("scroll");
      }
    }
  });

  if (viewportWidth >= 1024) {
    $("header .toggle-menu span").on("click", function () {
      $("header .secondary-menu").slideDown("slow");
    });

    $("header .close span").on("click", function () {
      $("header .secondary-menu").slideUp("fast");
    });
  } 
  else {
    $("header .toggle-menu span").on("click", function () {
      $("header .menu-mobile").addClass("translate");
      $("header .overflow").addClass("visibility");
    });
  }

  $("header .close-mobile").on("click", function () {
    $("header .menu-mobile").removeClass("translate");
    $("header .overflow").removeClass("visibility");
  });

  //accordion menu
  $("header .menu-item-has-children").each(function () {
    $(this)
      .children("a")
      .on("click", function (e) {
        e.preventDefault();
      });
  });

  if (viewportWidth < 1024) {
    $("header .menu-item-has-children").each(function () {
      $(this)
        .children("a")
        .on("click", function (e) {
          e.preventDefault();
          $(this).next(".sub-menu").slideToggle();
          $(this).toggleClass("rotate");
        });
    });
  }

  //slide new product
  $(".new-product .slide-product").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    variableWidth: true,
    nextArrow: $(".new-product .arrow-right span"),
    prevArrow: $(".new-product .arrow-left span"),
  });

  //slide relation cate
  $(".relation-cate .slide-relation").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: $(".relation-cate .arrow-right span"),
    prevArrow: $(".relation-cate .arrow-left span"),
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });

  //slide gallerys
  $(".project .block-content").each(function (index, project) {
    var $slider = $(project).find(".slide-gallerys");
    var $next = $(project).find(".arrow-right");
    var $prev = $(project).find(".arrow-left");

    $slider.slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      variableWidth: true,
      nextArrow: $next,
      prevArrow: $prev,
      autoplay: true,
      autoplaySpeed: 3000,
      pauseOnHover: true,
    });
  });

  //slide leader
  $(".leader .slide").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    fade: true,
    speed: 500,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: true,
  });

  //slide flower-shop
  var lengthCol = $(".flower-shop .row .col").length;
  if (lengthCol > 3) {
    $(".flower-shop .row").slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
          },
        },
      ],
    });
  }

  // accordion faq
  $(".faq .question-wrap").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).next(".contents").slideUp();
      $(this).removeClass("click");
    } else {
      $(".faq .question-wrap").removeClass("active");
      $(this).addClass("active");
      $(".faq .contents").slideUp();
      $(".faq .question-wrap").removeClass("click");
      $(this).next(".contents").slideDown();
      $(this).addClass("click");
    }
  });

  //accordion menu footer
  if (viewportWidth < 1024) {
    $("footer .title-menu-wrap").on("click", function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).next(".menu").slideUp();
        $(this).removeClass("img-rotate");
      } else {
        $("footer .title-menu-wrap").removeClass("active");
        $(this).addClass("active");
        $("footer .menu").slideUp();
        $("footer .title-menu-wrap").removeClass("img-rotate");
        $(this).next(".menu").slideDown();
        $(this).addClass("img-rotate");
      }
    });
  }

  // load more blog-post
  if ($(".blog-post .wrapper").children().length <= 1) {
    $("#loadmore").css("display", "none");
  }
  $(".blog-post .row").css("display", "none");
  $(".blog-post .row").slice(0, 1).show();
  $("#loadmore").on("click", function (e) {
    e.preventDefault();
    $(".blog-post .row:hidden").slice(0, 1).slideDown();
    if ($(".blog-post .row:hidden").length == 0) {
      $("#loadmore").fadeOut("slow");
    }
  });

  // load more project
  if ($(".project .block-wrap").children().length <= 1) {
    $(".project .btn-loadmore").css("display", "none");
  }
  $(".project .block-content").css("display", "none");
  $(".project .block-content").slice(0, 1).show();
  $("#load-more").on("click", function (e) {
    e.preventDefault();
    $(".project .block-content:hidden").slice(0, 1).slideDown();
    if ($(".project .block-content:hidden").length == 0) {
      $(".project .btn-loadmore").fadeOut("slow");
    }
  });

  // load more review product
  if ($(".details-products .commentlist").children().length <= 4) {
    $("#see-review").css("display", "none");
  }
  $(".details-products #reviews .commentlist li.review").hide();
  $(".details-products #reviews .commentlist li.review").slice(0, 4).show();
  $("#see-review").on("click", function (e) {
    e.preventDefault();
    $(".details-products #reviews .commentlist li.review:hidden")
      .slice(0, 2)
      .slideDown();
    if (
      $(".details-products #reviews .commentlist li.review:hidden").length == 0
    ) {
      $("#see-review").fadeOut("slow");
    }
  });

  // show form-search
  $("header .search .background").on("click", function () {
    $("header .form-deskop").toggleClass("form-show");
  });

  //submit form search
  $("header .icon-search").on("click", function () {
    $("#search-deskop").submit();
    $("search-mobile").submit();
  });

  $('.search-page .icon-search').on('click', function () {
    $("#search-show").submit();
  })

  //login my-account

  $(".my-account .btn-transfer .btn-account").on("click", function (e) {
    e.preventDefault();
    $(".my-account .btn-transfer .btn-account").removeClass("btn-active");
    $(this).addClass("btn-active");
    if ($(".btn-transfer .btn-account-login").hasClass("btn-active")) {
      $(".my-account .woocommerce-form-login").removeClass("form-hide");
    } else {
      $(".my-account .woocommerce-form-login").addClass("form-hide");
    }
    if ($(".btn-transfer .btn-account-register").hasClass("btn-active")) {
      $(".my-account .woocommerce-form-register").removeClass("form-hide");
    } else {
      $(".my-account .woocommerce-form-register").addClass("form-hide");
    }
  });

  // masonry
  $("#modalCollection").on("shown.bs.modal", function () {
    $(".images-mansory").masonry({
      itemSelector: ".image-mansory",
    });
  });

  // popup image -zoom
  var slideGallerys = $(".project .slide-gallerys .image-slide");
  var imgPopup = $(".image-zoom");
  var popupImage = $(".image-zoom img");
  var closeBtn = $(".close-modal-zoom");

  // handle events
  slideGallerys.on("click", function () {
    var img_datasrc = $(this).children("img").attr("data-src");
    var img_src = $(this).children("img").attr("src");
    imgPopup.children("img").attr("data-src", img_datasrc);
    imgPopup.children("img").attr("src", img_src);
  });

  //zoom image
  $(".image-zoom")
    // tile mouse actions
    .on("mouseover", function () {
      $(this)
        .children("img")
        .css({ transform: "scale(" + $(this).attr("data-scale") + ")" });
    })
    .on("mouseout", function () {
      $(this).children("img").css({ transform: "scale(1)" });
    })
    .on("mousemove", function (e) {
      $(this)
        .children("img")
        .css({
          "transform-origin":
            ((e.pageX - $(this).offset().left) / $(this).width()) * 100 +
            "% " +
            ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +
            "%",
        });
    });

  //simpleParallax for image
var imageParallax = document.getElementsByClassName("img-transition");
new simpleParallax(imageParallax);

  //scroll reverall characters
  function myCallback (el) {
    el.classList.add('count-characters');
  }
  ScrollReveal().reveal('.characters', { afterReveal: myCallback });

});
