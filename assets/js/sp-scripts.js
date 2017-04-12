// Preloader
$(document).ready(function() {
  return $(window).load(function() {
    return $("body").addClass("loaded");
  });
});

/* Smooth transition anchor link
*/
$(function(){
  $('a[href*=#]').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
          var targetOffset = $target.offset().top;
          $('html,body').animate({scrollTop: targetOffset}, 700);
          return false;
      }
    }
  });
});


/* Replace all SVG images with inline SVG
*/
$("img.svg").each(function() {
  var $img = $(this),
  imgID = $img.attr("id"),
  imgClass = $img.attr("class"),
  imgURL = $img.attr("src");

  console.info(imgID + ", " + imgClass + ", " + imgURL);

  $.get(imgURL, function(data)
  {
    // Get the SVG tag, ignore the rest
    var $svg = $(data).find("svg");

    // Add replaced image’s ID to the new SVG
    if(typeof imgID !== "undefined")
    {
        $svg = $svg.attr("id", imgID);
    }
    // Add replaced image’s classes to the new SVG
    if(typeof imgClass !== "undefined")
    {
        $svg = $svg.attr("class", imgClass+" replaced-svg");
    }

    // Remove any invalid XML tags as per http://validator.w3.org
    $svg = $svg.removeAttr("xmlns:a");

    // Replace image with new SVG
    $img.replaceWith($svg);
  });
});

/* Bacground SVG animations
*/
$(window).scroll(function() {
  var theta = $(window).scrollTop() / 10 % Math.PI;
  $('.motiv-odd .path-cog').css({ transform: 'rotate(' + theta + 'rad)' });
  $('.motiv-even .path-cog').css({ transform: 'rotate(-' + theta + 'rad)' });
});

$(document).ready(function() {
  $(".topbar").scrollupbar();
  return $(window).load(function() {
    return $("body").addClass("loaded");
  });
});
