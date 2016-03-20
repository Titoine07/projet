
$(document).ready(function () {


    var vid = document.getElementById("bgvid");
    /* 	var pauseButton = document.querySelector("#polina button"); */

    function vidFade() {
	vid.classList.add("stopfade");
    }

    vid.addEventListener('ended', function ()
    {
	// only functional if "loop" is removed 
	vid.pause();
	// to capture IE10
	vidFade();
    });

    /* 
     pauseButton.addEventListener("click", function() {
     vid.classList.toggle("stopfade");
     if (vid.paused) {
     vid.play();
     pauseButton.innerHTML = "Pause";
     } else {
     vid.pause();
     pauseButton.innerHTML = "Paused";
     }
     })
     */

    $('a[href*="#"]').click(function () {
	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	    if (target.length) {
		$('html, body').animate({
		    scrollTop: target.offset().top
		}, 800);
		return false;
	    }
	}
    });

    /*    Adjust scroll position to a closest div   */
    var items = $(".adjusting");
    var animating = false;

    $(window).scroll(function () {
	clearTimeout($.data(this, 'scrollTimer'));
	if (!animating) {
	    $.data(this, 'scrollTimer', setTimeout(function () {
		items.each(function (key, value) {
		    if ($(window).scrollTop() < $(value).offset().top + 120 && $(window).scrollTop() > $(value).offset().top - 150) {
			animating = true;
			$('body').animate({scrollTop: $(value).offset().top + 'px'}, 700);
			setTimeout(function () {
			    animating = false;
			}, 100);
			return false;
		    }
		});
	    }, 1000));
	}
    });





});
