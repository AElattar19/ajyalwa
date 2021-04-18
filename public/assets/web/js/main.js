//init wow.js
new WOW().init();

$(function () {
  // menu button toggler
  $(".header .navbar-toggler").on("click", function () {
    $(".header .navbar-toggler").toggleClass("active-m");
  });

  $(window).on("scroll", () => {
    // $(".header nav").removeClass("fixed-top");
  });

  // counter animation achievements
  let achievementsTop = $(".achievements").offset().top - window.innerHeight;
  let scrollOnce = false;
  $(window).on("scroll", () => {
    if ($(window).scrollTop() > achievementsTop && !scrollOnce) {
      scrollOnce = true;
      $(".achievements [data-count]").each((i, el) => {
        let countTo = +$(el).attr("data-count");
        var elem = $(el);

        $({ countNum: +elem.text() }).animate(
          { countNum: countTo },
          {
            duration: +elem.attr("data-duration") || 1500,
            easing: "swing",
            step: function () {
              elem.text(Math.floor(this.countNum));
            },
            complete: function () {
              if (elem.attr("data-plus") == "true") {
                elem.text(this.countNum + " + ");
              } else {
                elem.text(this.countNum);
              }
            },
          }
        );
      });
    }
  });
});

//Scroll back to top
var backToTopHtml = `
  <div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
  `;

$("main").after(backToTopHtml);

(function ($) {
  "use strict";

  $(document).ready(function () {
    "use strict";

    var progressPath = document.querySelector(".progress-wrap path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "stroke-dashoffset 10ms linear";
    var updateProgress = function () {
      var scroll = $(window).scrollTop();
      var height = $(document).height() - $(window).height();
      var progress = pathLength - (scroll * pathLength) / height;
      progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 550;
    jQuery(window).on("scroll", function () {
      if (jQuery(this).scrollTop() > offset) {
        jQuery(".progress-wrap").addClass("active-progress");
      } else {
        jQuery(".progress-wrap").removeClass("active-progress");
      }
    });
    jQuery(".progress-wrap").on("click", function (event) {
      event.preventDefault();
      jQuery("html, body").animate({ scrollTop: 0 }, duration);
      return false;
    });
  });
})(jQuery);
