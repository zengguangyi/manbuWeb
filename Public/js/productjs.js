$(function(){
	$('#dowebok').fullpage({
		'resize': false,
		'navigation': true,
		'verticalCentered': false,
	});
});

/*媒体查询 768px 调整文字*/
$(function(){
	var mx=window.matchMedia("(min-width: 768px)");
	if(mx.matches){
		$('#page1-ul').css({  //高于
			'padding-top':'30%'
		});
	}else{                    //低于
		$('#page1-ul').css({
			'padding-top':'5%'
		});
		$('#page1-iamge').css({
			'padding-top':'10%'
		});
		$('#page2-table').css({
			'padding-top':'2em'
		});
		$('#page2-image').css({
			'padding-top':'2em'
		});
	}
})

/*picPage页瀑布流*/
$(function(){

	var $grid = $('.grid').masonry({
		itemSelector: '.grid-item',
		columnWidth: '.grid-item',
		percentPosition: true
	});
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
    	$grid.masonry('layout');
    });

    $grid.on( 'click', '.grid-item', function() {
		// $(this).css("width","50%");	
    	// $(this).toggleClass('gigante');
        // trigger layout after item size changes
        $grid.masonry('layout');
    });
});

/*lightboxOptions*/
/**
*alwaysShowNavOnTouchDevices 	false 	If true, the left and right navigation arrows which appear on mouse hover when viewing image sets will always be visible on devices which support touch.
*fadeDuration 	500 	The time it takes for the Lightbox container and overlay to fade in and out, in milliseconds.
*fitImagesInViewport 	true 	If true, resize images that would extend outside of the viewport so they fit neatly inside of it. This saves the user from having to scroll to see the entire image.
*maxWidth 	  	If set, the image height will be limited to this number, in pixels. Aspect ratio will not be maintained.
*maxHeight 	  	If set, the image width will be limited to this number, in pixels. Aspect ratio will not be maintained.
*positionFromTop 	50 	The distance from top of viewport that the Lightbox container will appear, in pixels.
*resizeDuration 	700 	The time it takes for the Lightbox container to animate its width and height when transition between different size images, in milliseconds.
*showImageNumberLabel 	true 	If false, the text indicating the current image number and the total number of images in set (Ex. "image 2 of 4") will be hidden.
*wrapAround 	false 	If true, when a user reaches the last image in a set, the right navigation arrow will appear and they will be to continue moving forward which will take them back to the first image in the set.
**/
$(function(){
	lightbox.option({
			'alwaysShowNavOnTouchDevices': true,
			'resizeDuration': 200,
			'wrapAround': true

		})
});

/*媒体查询 width高于1366px 调整图片width百分比*/
$(function(){
	var mx=window.matchMedia("(min-width: 1366px)");
	if(mx.matches){
		$('#page1-iamge').css({
			'padding-top':'8em',
			'padding-left':'5em'
		});
	}else{
			
	}
})
/*媒体查询 width低于970px 调整图片width百分比*/
$(function(){
	var mx=window.matchMedia("(min-width: 970px)");
	if(mx.matches){
		// alert(window.innerWidth);
	}else{
		$('.grid-item').css("width","33.333%");	
	}
})
/*媒体查询 width低于768px 调整图片width百分比*/
$(function(){
	var mx=window.matchMedia("(min-width: 768px)");
	if(mx.matches){
		// alert(window.innerWidth);
	}else{
		$('.grid-item').css("width","50%");	
	}
})
