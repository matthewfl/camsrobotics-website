$(function () {
/*
    $(".plist .page_item").hover(function () {
	$(".children", this).animate({
	    "width": "auto",
	    "height": "auto",
	}, "slow").css({
	    "display":"inline",
	    "overflow": "hidden"
	});
    }, function () {
	$(".children", this).animate({
	    "width":"0px"
	},function () { $(this).css("display", "none"); });
    });
    //$(".plist .page_item .children").hide();

    */
    var timer;
    $("#topLinks > .page_item").hover(function () {
	$(".plist .children").css("display", "none");
	$(".children", this).css("display", "inline");
	clearTimeout(timer);
    });
    $(".plist").mouseleave(function () {
	timer = setTimeout('$(".plist .children").css("display", "none");', 600);
    });

});

