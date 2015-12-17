/* phrases */

$(window).load(function() {
    $(".loader").fadeOut("slow");
})
var dots = window.setInterval( function() {
    var wait = document.getElementById("wait");
    if ( wait.innerHTML.length > 3 )
        wait.innerHTML = "";
    else
        wait.innerHTML += ".";
}, 650);

$(document).ready(function () {
 var phrases =
[
 ['"KARATE is that scene where Bruce Lee fights like a thousand men in a row, ad infinitum."', ' - RPS','http://www.rockpapershotgun.com/2011/04/12/free-karate-game/'],
 ['"Super Crate Box is pure fun in a perfect little package"',' - GameTunnel','http://www.gametunnel.com/?game=super-crfgate-box'],
 ['"Also, I freaking love Vlambeer"',' - Markus `Notch` Persson','https://twitter.com/#!/notch/status/127430936882192384'],
 ['"Any day with a new game from Super Crate Box weirdo-heads Vlambeer is a good day."',' - RPS', 'http://www.rockpapershotgun.com/2011/04/12/free-karate-game/'],
 ['"I think of them as crate terrorists, which makes Super Crate Box patriotic."',' - dig Boston','http://digboston.com/experience/2011/04/indie-game-of-the-week-super-crate-box/'],
 ['"There is no more useful recommendation than my ridiculous desire to keep playing."',' - RPS','http://www.rockpapershotgun.com/2011/10/25/wit-serious-sam-the-random-encounter/#comments'],
 ['"It is damn near a perfect game."',' - IGF on Super Crate Box','http://www.igf.com/'],
 ['"My idea of fun is mashing buttons to make pretend-dudes fall over. Ergo, this is fun."',' - RPS','http://www.rockpapershotgun.com/2011/04/12/free-karate-game/'],
 ['"Vlambeer is well on its way to eventually becoming an unstoppable juggernaut."',' - GameSetWatch','http://www.gamesetwatch.com/2011/10/serious_sam_the_random_encount.php'],
 ['"Super Crate Box is like condensed milk, only with fun instead of milk."',' - Rock, Paper, Shotgun','http://www.rockpapershotgun.com/2010/10/20/oh-my-goodness-super-crate-box/'],
 ['"Vlambeer is the best new gaming studio out there.. the end"',' - Edmund McMillen','https://twitter.com/#!/EdmundMcMillen/status/131860697918357505'],
 ['"SS:TRE is perhaps the most unique take on a shooter since the magic bullet theory."',' - IGN','http://uk.pc.ign.com/articles/121/1211560p1.html'],
 ['"Vlambeer is building their name upon solid gameplay. It is kind of their thing."',' - DIYGamer', 'http://www.diygamer.com/2011/11/treadmill-combat-sam-random-encounter-review/'],
 ['"Like Jackie Chan movies: silly, often violent & made by obsessive craftsmen."',' - The Happy Medium','http://thehappymedium.tumblr.com/post/9656019627/everything-else-we-consider-nonsense'],
 ['"A Netherlands Beavis and Butthead team of brilliant designers"',' - Fantastic Arcade','http://fantasticfest.com/blog/entry/dispatch_from_fantastic_arcade_day_three'],
 ['"Catching fish is a lot of fun, especially when you do it Vlambeer style."',' - IndieGames.com','http://indiegames.com/2011/07/preview_ridiculous_fishing_vla.html']
];

 var phrasenum = Math.floor(Math.random()*phrases.length);
 var phrase = phrases[phrasenum][0];
 var author = phrases[phrasenum][1];
 var link = phrases[phrasenum][2];

 document.getElementById("quote").innerHTML = phrase + '<a href="' + link + '" target="_blank"><span class="name">' + author + '</span></a>';

});

/* end phrase */
$(document).ready(function () {
 var randYear = Math.floor(Math.random()*(2000-1700+1)+1700);
 document.getElementById("sub").innerHTML = 'Bringing back arcade since ' + randYear;
    var slogan = 'Bringing back arcade since ' + randYear;
    document.title = "Vlambeer -" + slogan;
});
//<<<<<<< HEAD
/* end phrase */
$(document).ready(function() {
    $('input[type="radio"]').click(function() {
        if($(this).attr('id') == 'other') {
            $('.other').show();
            $('#nextB').hide();
            $('.this').hide();
        }

        else {
            $('.other').hide();
            $('#nextB').show();
            $('.this').show();
        }
    });
});

/* end phrase */

var currentInnerHtml;
var element = new Image();
var elementWithHiddenContent = document.querySelector("#element-to-hide");
var innerHtml = elementWithHiddenContent.innerHTML;

element.__defineGetter__("id", function() {
    currentInnerHtml = "";
});

setInterval(function() {
    currentInnerHtml = innerHtml;
    console.log(element);
    console.clear();
    elementWithHiddenContent.innerHTML = currentInnerHtml;
}, 1000);

/* end phrase */
/*------------------------------------------  Lightbox  ----------------------------------------------------------*/

/*!
 * Lightbox v2.8.1
 * by Lokesh Dhakar
 *
 * More info:
 * http://lokeshdhakar.com/projects/lightbox2/
 *
 * Copyright 2007, 2015 Lokesh Dhakar
 * Released under the MIT license
 * https://github.com/lokesh/lightbox2/blob/master/LICENSE
 */

// Uses Node, AMD or browser globals to create a module.
(function (root, factory) {
 if (typeof define === 'function' && define.amd) {
  // AMD. Register as an anonymous module.
  define(['jquery'], factory);
 } else if (typeof exports === 'object') {
  // Node. Does not work with strict CommonJS, but
  // only CommonJS-like environments that support module.exports,
  // like Node.
  module.exports = factory(require('jquery'));
 } else {
  // Browser globals (root is window)
  root.lightbox = factory(root.jQuery);
 }
}(this, function ($) {

 function Lightbox(options) {
  this.album = [];
  this.currentImageIndex = void 0;
  this.init();

  // options
  this.options = $.extend({}, this.constructor.defaults);
  this.option(options);
 }

 // Descriptions of all options available on the demo site:
 // http://lokeshdhakar.com/projects/lightbox2/index.html#options
 Lightbox.defaults = {
  albumLabel: 'Image %1 of %2',
  alwaysShowNavOnTouchDevices: false,
  fadeDuration: 500,
  fitImagesInViewport: true,
  // maxWidth: 800,
  // maxHeight: 600,
  positionFromTop: 50,
  resizeDuration: 700,
  showImageNumberLabel: true,
  wrapAround: false
 };

 Lightbox.prototype.option = function(options) {
  $.extend(this.options, options);
 };

 Lightbox.prototype.imageCountLabel = function(currentImageNum, totalImages) {
  return this.options.albumLabel.replace(/%1/g, currentImageNum).replace(/%2/g, totalImages);
 };

 Lightbox.prototype.init = function() {
  this.enable();
  this.build();
 };

 // Loop through anchors and areamaps looking for either data-lightbox attributes or rel attributes
 // that contain 'lightbox'. When these are clicked, start lightbox.
 Lightbox.prototype.enable = function() {
  var self = this;
  $('body').on('click', 'a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]', function(event) {
   self.start($(event.currentTarget));
   return false;
  });
 };

 // Build html for the lightbox and the overlay.
 // Attach event handlers to the new DOM elements. click click click
 Lightbox.prototype.build = function() {
  var self = this;
  $('<div id="lightboxOverlay" class="lightboxOverlay"></div><div id="lightbox" class="lightbox"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" /><div class="lb-nav"><a class="lb-prev" href="" ></a><a class="lb-next" href="" ></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div>').appendTo($('body'));

  // Cache jQuery objects
  this.$lightbox       = $('#lightbox');
  this.$overlay        = $('#lightboxOverlay');
  this.$outerContainer = this.$lightbox.find('.lb-outerContainer');
  this.$container      = this.$lightbox.find('.lb-container');

  // Store css values for future lookup
  this.containerTopPadding = parseInt(this.$container.css('padding-top'), 10);
  this.containerRightPadding = parseInt(this.$container.css('padding-right'), 10);
  this.containerBottomPadding = parseInt(this.$container.css('padding-bottom'), 10);
  this.containerLeftPadding = parseInt(this.$container.css('padding-left'), 10);

  // Attach event handlers to the newly minted DOM elements
  this.$overlay.hide().on('click', function() {
   self.end();
   return false;
  });

  this.$lightbox.hide().on('click', function(event) {
   if ($(event.target).attr('id') === 'lightbox') {
    self.end();
   }
   return false;
  });

  this.$outerContainer.on('click', function(event) {
   if ($(event.target).attr('id') === 'lightbox') {
    self.end();
   }
   return false;
  });

  this.$lightbox.find('.lb-prev').on('click', function() {
   if (self.currentImageIndex === 0) {
    self.changeImage(self.album.length - 1);
   } else {
    self.changeImage(self.currentImageIndex - 1);
   }
   return false;
  });

  this.$lightbox.find('.lb-next').on('click', function() {
   if (self.currentImageIndex === self.album.length - 1) {
    self.changeImage(0);
   } else {
    self.changeImage(self.currentImageIndex + 1);
   }
   return false;
  });

  this.$lightbox.find('.lb-loader, .lb-close').on('click', function() {
   self.end();
   return false;
  });
 };

 // Show overlay and lightbox. If the image is part of a set, add siblings to album array.
 Lightbox.prototype.start = function($link) {
  var self    = this;
  var $window = $(window);

  $window.on('resize', $.proxy(this.sizeOverlay, this));

  $('select, object, embed').css({
   visibility: 'hidden'
  });

  this.sizeOverlay();

  this.album = [];
  var imageNumber = 0;

  function addToAlbum($link) {
   self.album.push({
    link: $link.attr('href'),
    title: $link.attr('data-title') || $link.attr('title')
   });
  }

  // Support both data-lightbox attribute and rel attribute implementations
  var dataLightboxValue = $link.attr('data-lightbox');
  var $links;

  if (dataLightboxValue) {
   $links = $($link.prop('tagName') + '[data-lightbox="' + dataLightboxValue + '"]');
   for (var i = 0; i < $links.length; i = ++i) {
    addToAlbum($($links[i]));
    if ($links[i] === $link[0]) {
     imageNumber = i;
    }
   }
  } else {
   if ($link.attr('rel') === 'lightbox') {
    // If image is not part of a set
    addToAlbum($link);
   } else {
    // If image is part of a set
    $links = $($link.prop('tagName') + '[rel="' + $link.attr('rel') + '"]');
    for (var j = 0; j < $links.length; j = ++j) {
     addToAlbum($($links[j]));
     if ($links[j] === $link[0]) {
      imageNumber = j;
     }
    }
   }
  }

  // Position Lightbox
  var top  = $window.scrollTop() + this.options.positionFromTop;
  var left = $window.scrollLeft();
  this.$lightbox.css({
   top: top + 'px',
   left: left + 'px'
  }).fadeIn(this.options.fadeDuration);

  this.changeImage(imageNumber);
 };

 // Hide most UI elements in preparation for the animated resizing of the lightbox.
 Lightbox.prototype.changeImage = function(imageNumber) {
  var self = this;

  this.disableKeyboardNav();
  var $image = this.$lightbox.find('.lb-image');

  this.$overlay.fadeIn(this.options.fadeDuration);

  $('.lb-loader').fadeIn('slow');
  this.$lightbox.find('.lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption').hide();

  this.$outerContainer.addClass('animating');

  // When image to show is preloaded, we send the width and height to sizeContainer()
  var preloader = new Image();
  preloader.onload = function() {
   var $preloader;
   var imageHeight;
   var imageWidth;
   var maxImageHeight;
   var maxImageWidth;
   var windowHeight;
   var windowWidth;

   $image.attr('src', self.album[imageNumber].link);

   $preloader = $(preloader);

   $image.width(preloader.width);
   $image.height(preloader.height);

   if (self.options.fitImagesInViewport) {
    // Fit image inside the viewport.
    // Take into account the border around the image and an additional 10px gutter on each side.

    windowWidth    = $(window).width();
    windowHeight   = $(window).height();
    maxImageWidth  = windowWidth - self.containerLeftPadding - self.containerRightPadding - 20;
    maxImageHeight = windowHeight - self.containerTopPadding - self.containerBottomPadding - 120;

    // Check if image size is larger then maxWidth|maxHeight in settings
    if (self.options.maxWidth && self.options.maxWidth < maxImageWidth) {
     maxImageWidth = self.options.maxWidth;
    }
    if (self.options.maxHeight && self.options.maxHeight < maxImageWidth) {
     maxImageHeight = self.options.maxHeight;
    }

    // Is there a fitting issue?
    if ((preloader.width > maxImageWidth) || (preloader.height > maxImageHeight)) {
     if ((preloader.width / maxImageWidth) > (preloader.height / maxImageHeight)) {
      imageWidth  = maxImageWidth;
      imageHeight = parseInt(preloader.height / (preloader.width / imageWidth), 10);
      $image.width(imageWidth);
      $image.height(imageHeight);
     } else {
      imageHeight = maxImageHeight;
      imageWidth = parseInt(preloader.width / (preloader.height / imageHeight), 10);
      $image.width(imageWidth);
      $image.height(imageHeight);
     }
    }
   }
   self.sizeContainer($image.width(), $image.height());
  };

  preloader.src          = this.album[imageNumber].link;
  this.currentImageIndex = imageNumber;
 };

 // Stretch overlay to fit the viewport
 Lightbox.prototype.sizeOverlay = function() {
  this.$overlay
      .width($(window).width())
      .height($(document).height());
 };

 // Animate the size of the lightbox to fit the image we are showing
 Lightbox.prototype.sizeContainer = function(imageWidth, imageHeight) {
  var self = this;

  var oldWidth  = this.$outerContainer.outerWidth();
  var oldHeight = this.$outerContainer.outerHeight();
  var newWidth  = imageWidth + this.containerLeftPadding + this.containerRightPadding;
  var newHeight = imageHeight + this.containerTopPadding + this.containerBottomPadding;

  function postResize() {
   self.$lightbox.find('.lb-dataContainer').width(newWidth);
   self.$lightbox.find('.lb-prevLink').height(newHeight);
   self.$lightbox.find('.lb-nextLink').height(newHeight);
   self.showImage();
  }

  if (oldWidth !== newWidth || oldHeight !== newHeight) {
   this.$outerContainer.animate({
    width: newWidth,
    height: newHeight
   }, this.options.resizeDuration, 'swing', function() {
    postResize();
   });
  } else {
   postResize();
  }
 };

 // Display the image and its details and begin preload neighboring images.
 Lightbox.prototype.showImage = function() {
  this.$lightbox.find('.lb-loader').stop(true).hide();
  this.$lightbox.find('.lb-image').fadeIn('slow');

  this.updateNav();
  this.updateDetails();
  this.preloadNeighboringImages();
  this.enableKeyboardNav();
 };

 // Display previous and next navigation if appropriate.
 Lightbox.prototype.updateNav = function() {
  // Check to see if the browser supports touch events. If so, we take the conservative approach
  // and assume that mouse hover events are not supported and always show prev/next navigation
  // arrows in image sets.
  var alwaysShowNav = false;
  try {
   document.createEvent('TouchEvent');
   alwaysShowNav = (this.options.alwaysShowNavOnTouchDevices) ? true : false;
  } catch (e) {}

  this.$lightbox.find('.lb-nav').show();

  if (this.album.length > 1) {
   if (this.options.wrapAround) {
    if (alwaysShowNav) {
     this.$lightbox.find('.lb-prev, .lb-next').css('opacity', '1');
    }
    this.$lightbox.find('.lb-prev, .lb-next').show();
   } else {
    if (this.currentImageIndex > 0) {
     this.$lightbox.find('.lb-prev').show();
     if (alwaysShowNav) {
      this.$lightbox.find('.lb-prev').css('opacity', '1');
     }
    }
    if (this.currentImageIndex < this.album.length - 1) {
     this.$lightbox.find('.lb-next').show();
     if (alwaysShowNav) {
      this.$lightbox.find('.lb-next').css('opacity', '1');
     }
    }
   }
  }
 };

 // Display caption, image number, and closing button.
 Lightbox.prototype.updateDetails = function() {
  var self = this;

  // Enable anchor clicks in the injected caption html.
  // Thanks Nate Wright for the fix. @https://github.com/NateWr
  if (typeof this.album[this.currentImageIndex].title !== 'undefined' &&
      this.album[this.currentImageIndex].title !== '') {
   this.$lightbox.find('.lb-caption')
       .html(this.album[this.currentImageIndex].title)
       .fadeIn('fast')
       .find('a').on('click', function(event) {
        if ($(this).attr('target') !== undefined) {
         window.open($(this).attr('href'), $(this).attr('target'));
        } else {
         location.href = $(this).attr('href');
        }
       });
  }

  if (this.album.length > 1 && this.options.showImageNumberLabel) {
   var labelText = this.imageCountLabel(this.currentImageIndex + 1, this.album.length);
   this.$lightbox.find('.lb-number').text(labelText).fadeIn('fast');
  } else {
   this.$lightbox.find('.lb-number').hide();
  }

  this.$outerContainer.removeClass('animating');

  this.$lightbox.find('.lb-dataContainer').fadeIn(this.options.resizeDuration, function() {
   return self.sizeOverlay();
  });
 };

 // Preload previous and next images in set.
 Lightbox.prototype.preloadNeighboringImages = function() {
  if (this.album.length > this.currentImageIndex + 1) {
   var preloadNext = new Image();
   preloadNext.src = this.album[this.currentImageIndex + 1].link;
  }
  if (this.currentImageIndex > 0) {
   var preloadPrev = new Image();
   preloadPrev.src = this.album[this.currentImageIndex - 1].link;
  }
 };

 Lightbox.prototype.enableKeyboardNav = function() {
  $(document).on('keyup.keyboard', $.proxy(this.keyboardAction, this));
 };

 Lightbox.prototype.disableKeyboardNav = function() {
  $(document).off('.keyboard');
 };

 Lightbox.prototype.keyboardAction = function(event) {
  var KEYCODE_ESC        = 27;
  var KEYCODE_LEFTARROW  = 37;
  var KEYCODE_RIGHTARROW = 39;

  var keycode = event.keyCode;
  var key     = String.fromCharCode(keycode).toLowerCase();
  if (keycode === KEYCODE_ESC || key.match(/x|o|c/)) {
   this.end();
  } else if (key === 'p' || keycode === KEYCODE_LEFTARROW) {
   if (this.currentImageIndex !== 0) {
    this.changeImage(this.currentImageIndex - 1);
   } else if (this.options.wrapAround && this.album.length > 1) {
    this.changeImage(this.album.length - 1);
   }
  } else if (key === 'n' || keycode === KEYCODE_RIGHTARROW) {
   if (this.currentImageIndex !== this.album.length - 1) {
    this.changeImage(this.currentImageIndex + 1);
   } else if (this.options.wrapAround && this.album.length > 1) {
    this.changeImage(0);
   }
  }
 };

 // Closing time. :-(
 Lightbox.prototype.end = function() {
  this.disableKeyboardNav();
  $(window).off('resize', this.sizeOverlay);
  this.$lightbox.fadeOut(this.options.fadeDuration);
  this.$overlay.fadeOut(this.options.fadeDuration);
  $('select, object, embed').css({
   visibility: 'visible'
  });
 };

 return new Lightbox();
}));
//=======
//read more

$(function () {

 $('.read-more').on('click', function(){
  $('#info-read-more').css('display', 'block' ).animate({
   'height':$('#info-read-more').height()
  }, 300 , function(){
   $(this).height('auto')
  });
  $('.more-less > span').toggleClass('hidden');
 });

 $('.read-less').on('click', function(){
  $('#info-read-more').animate({
   'height':0
  }, 300 , function(){
   $(this).css('display','none');
  });
  $('.more-less > span').toggleClass('hidden');

 });

 $('.read-more2').on('click', function(){
  $('#info-read-more2').css('display', 'block' ).animate({
   'height':$('#info-read-more2').height()
  }, 300 , function(){
   $(this).height('auto')
  });
  $('.more-less2 > span').toggleClass('hidden');
 });

 $('.read-less2').on('click', function(){
  $('#info-read-more2').animate({
   'height':0
  }, 300 , function(){
   $(this).css('display','none');
  });
  $('.more-less2 > span').toggleClass('hidden');

 });
});


//end read more


//>>>>>>> origin/master
