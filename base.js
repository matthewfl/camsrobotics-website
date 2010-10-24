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
    $(".plist .page_item").hover(function () {
	$(".plist .children").css("display", "none");
	$(".children", this).css("display", "inline");
    });
    $(".plist").mouseleave(function () {
	$(".plist .children").css("display", "none");
    });
});