/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


			$(function(){
				$('#images').exposure({carouselControls : true,
					imageControls : true,
					pageSize : 5,
					slideshowControlsTarget : '#slideshow',
					onThumb : function(thumb) {
						var li = thumb.parents('li');				
						var fadeTo = li.hasClass('active') ? 1 : 0.3;
						
						thumb.css({display : 'none', opacity : fadeTo}).stop().fadeIn(200);
						
						thumb.hover(function() { 
							thumb.fadeTo('fast',1); 
						}, function() { 
							li.not('.active').children('img').fadeTo('fast', 0.3); 
						});
					},
					onImage : function(image, imageData, thumb) {
						// Check if wrapper is hovered.
						var hovered = $('.exposureWrapper').hasClass('exposureHover');
						
						// Fade out the previous image.
						$('.exposureWrapper > .exposureLastImage').stop().fadeOut(500, function() {
							$(this).remove();
						});
						
						// Fade in the current image.
						image.hide().stop().fadeIn(1000);
						
						if ($.exposure.showThumbs && thumb && thumb.length) {
							thumb.fadeTo('fast', 1).addClass('selected');
						}
					},
					onCarousel : function(firstImage, lastImage) {
						$('.exposureThumbs li').hide().children('img.selected').stop().css('opacity', 0.3).removeClass('selected');
					},
					onSlideshowPlayed : function() {
						$('.exposurePauseSlideshow').css('display','inline');
					}
				});
			});
