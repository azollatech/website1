// Hamburger button
var $hamburger = $(".hamburger");
$hamburger.on("click", function(e) {
	if ($hamburger.hasClass("is-active")) {
		closeNav($hamburger);
	} else {
		openNav($hamburger);
	}
	$hamburger.toggleClass("is-active");
});

$("#sidenav-overlay").click(function() {
	closeNav($hamburger);
	$hamburger.toggleClass("is-active");
});

$(".sidenav-item").click(function() {
	closeNav($hamburger);
	$hamburger.toggleClass("is-active");
});

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav($hamburger) {
	$("#sidenav").addClass("active");
	$("#sidenav-overlay").addClass("active");
	// document.getElementById("main").style.marginLeft = "250px";
	$hamburger.addClass("opened");
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav($hamburger) {
	$("#sidenav").removeClass("active");
	$("#sidenav-overlay").removeClass("active");
	// document.getElementById("main").style.marginLeft = "0";
	$hamburger.removeClass("opened");
}
