$(document).ready(function () {

    var styleswitcherstr = ' \
		<h3>Style Switcher <a href="#"><i class="fa fa-arrows"></i></a></h3> \
		<div class="content"> \
		<h5>Choose Skin Color</h5> \
		<div class="switcher-box fixed"> \
		<a id="default" class="styleswitch color"></a> \
		<a id="blue" class="styleswitch color"></a> \
		</div><!-- End switcher-box --> \
		</div><!-- End content --> \
		';

    $(".switcher").prepend(styleswitcherstr);

});

/* Template Skins */

$(document).ready(function () {

    var cookieName = 'template-skin';

    function changeSkin(skin) {
        $.cookie(cookieName, skin);
        document.location.reload();
    }

    $("#default").click(function () {
        changeSkin('default');
    });
    $("#blue").click(function () {
        changeSkin('blue');
    });

});

/* Switcher */

$(document).ready(function () {
	
    $('.switcher').animate({
        left: '-200px'
    });

    $('.switcher h3 a').click(function (e) {
        e.preventDefault();
        var div = $('.switcher');
        if (div.css('left') === '-200px') {
            $('.switcher').animate({
                left: '20px'
            }, 300);
        } else {
            $('.switcher').animate({
                left: '-200px'
            }, 300);
        }
    });

});