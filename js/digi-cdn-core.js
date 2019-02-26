$(".side-nav-label").click(function(event) {
  $(".side-nav").slideToggle();
});

$(document).foundation({
  equalizer: {
    act_on_hidden_el: true,
    equalize_on_stack: true
  },
  accordion: {
    multi_expand: true
  }
});
$(window).load(function() {
  $("body").removeClass("preload");
  $("a#website-feedback").attr(
    "href",
    $("a#website-feedback").attr("href") + document.URL
  );
});

var interval;
function yourfunction() {
  if ($(".gsc-results-wrapper-visible").css("position")) {
    $(".gsc-results-wrapper-visible").css("position", "initial");
    $(".overlay-container.search").hide();
    $(".overlay-container.search").get(0).offsetHeight;
    $(".overlay-container.search").show();
    clearInterval(interval);
  }
}

$("#menu, #menu + span").click(function(event) {
  event.preventDefault();
  toggleOverlay("search");
  SetupOverlay("menu");
});

$("#search").click(function(event) {
  event.preventDefault();
  $(".overlay-container.search").one(
    "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
    function() {
      $("input.gsc-input").focus();
      interval = window.setInterval(yourfunction, 1000);
    }
  );
  toggleOverlay("menu");
  if ($(".overlay-container.search").length != 0) {
    SetupOverlay("search");
  } else {
    $(".overlay-container.tier-search").slideToggle();
  }
});

$(".fa-close").click(function(event) {
  event.preventDefault();
  closeOverlay();
});

$(document).on("click", ".clickable", function() {
  closeOverlay();
});

function SetupOverlay(identifier) {
  var overlayContainer = ".overlay-container." + identifier;
  $(overlayContainer).one("transitionend", function() {
    $("body").css("overflow", "hidden");
    $("body").css("position", "fixed");
  });
  $(overlayContainer).css("transform", "translateX(0)");
  $(".banner-wrapper").addClass("clickable");
}

function toggleOverlay(identifier) {
  if ($(".overlay-container.search").length != 0) {
    if (
      $(".overlay-container." + identifier).position().left != $(window).width()
    ) {
      $(".overlay-container." + identifier).css(
        "transform",
        "translateX(100%)"
      );
    }
  }
}

function closeOverlay() {
  $(".overlay-container").css("transform", "translateX(100%)");
  $("body").css("overflow-y", "auto");
  $("body").css("position", "static");
  $(".banner-wrapper").removeClass("clickable");
}

var GSEReady = function() {
  if (document.readyState == "complete") {
    renderSearch();
  } else {
    google.setOnLoadCallback(function() {
      renderSearch();
    }, true);
  }
};

var renderSearch = function() {
  google.search.cse.element.render({
    div: "cse"
  });
  $("input.gsc-input").attr("placeholder", "Search ...");
  $(".gsc-search-button input")
    .attr("src", "https://digicdn.fiu.edu/v1/_assets/images/search.png")
    .attr("alt", "Search");
  $(".gsc-branding").remove();
  $("#cse table,.gssb_c")
    .removeAttr("cellspacing")
    .removeAttr("cellpadding");

  $(".gsc-search-button input").on("click", function() {
    if (typeof ga !== "undefined") {
      ga("send", "pageview", "/?q=" + $("#gsc-i-id1").val());
    }

    if (typeof dataLayer !== "undefined") {
      dataLayer.push({
        event: "VirtualPageview",
        virtualPageURL: "/?q=" + $("#gsc-i-id1").val(),
        virtualPageTitle: "Search"
      });
    }
  });

  $("input.gsc-input").keyup(function(e) {
    if (e.keyCode == 13 || e.which == 13) {
      if (typeof ga !== "undefined") {
        ga("send", "pageview", "/?q=" + $("#gsc-i-id1").val());
      }

      if (typeof dataLayer !== "undefined") {
        dataLayer.push({
          event: "VirtualPageview",
          virtualPageURL: "/?q=" + $("#gsc-i-id1").val(),
          virtualPageTitle: "Search"
        });
      }
    }
  });
};

window.__gcse = {
  parsetags: "explicit",
  callback: GSEReady
};

(function() {
  var cx = gseID;
  var gcse = document.createElement("script");
  gcse.type = "text/javascript";
  gcse.async = true;
  gcse.src = "https://cse.google.com/cse.js?cx=" + cx;
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(gcse, s);
})();

// Smooth Scroll
$(
  'a[href*=#]:not([href=#]):not(".accordion-anchor"):not("[role=\'tab\']"):not(".accordion-link")'
).click(function() {
  if (
    location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") ||
    location.hostname == this.hostname
  ) {
    var target = $(this.hash);
    target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
    if (target.length) {
      $("html,body").animate(
        {
          scrollTop: target.offset().top
        },
        1000
      );
      // Skip to and focus on main section for accessibility
      if ($(this).hasClass("skip-main-content")) {
        $("#main-content")
          .attr("tabindex", -1)
          .focus();
      }
      return false;
    }
  }
});
