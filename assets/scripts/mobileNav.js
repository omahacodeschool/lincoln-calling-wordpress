window.addEventListener("load", function(){
	var burgerIcon = document.getElementsByClassName("burger")[0];
	var mobileNav = document.getElementsByClassName("js-mobileNavList")[0];
	var subNavs = document.getElementsByClassName("js-mobileSubNav");
	var snLinks = document.getElementsByClassName("js-hasSubNav");

	burgerIcon.addEventListener("click", showHideNav);
	addSubNavEvents();

	// Adds events to sub navs for show/hide
	function addSubNavEvents(){
		for (var i = 0; i < snLinks.length; i++){
			snLinks[i].addEventListener("click", showHideSubNav);
		}
	}

	// Determines to hide or show the main nav
	function showHideNav(){
		if ( !mobileNav.classList.contains("nav--extend") ){
			showNav();
		}
		else {
			hideNav();
		}
	}

	// Shows main nav
	function showNav(){
		mobileNav.classList.add("nav--extend");
	}

	// Hides main nav
	function hideNav(){
		mobileNav.classList.remove("nav--extend");	
		hideSubNavs();
	}

	// Hides / Shows the sub navs
	//
	// e - event of click on a anchor element
	function showHideSubNav(e){
		e.preventDefault();
		e.target.nextElementSibling.classList.toggle("nav--extend");
	}

	// Loops through the sub nav list elements and hides them
	function hideSubNavs(){
		for (var i = 0; i < subNavs.length; i++) {
			subNavs[i].classList.remove("nav--extend");
		}
	}

	// -----------------------------------------------------
	// var dontJump = document.getElementsByClassName("js-stopJump");
	// debugger;
	// for(var i = 0; i < dontJump.length; i++){
	// 	dontJump[i].addEventListener("click", stopJumper);
	// }

	// function stopJumper(e){
	// 	debugger;
	// 	e.preventDefault();
	// }
});




