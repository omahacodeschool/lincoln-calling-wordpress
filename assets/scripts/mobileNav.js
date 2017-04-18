window.addEventListener("load", function(){
	var burgerIcon = document.getElementsByClassName("burger")[0];
	var mobileNav = document.getElementsByClassName("js-mobileNav")[0];
	var mobileSubNav = document.getElementsByClassName("js-mobileSubNav");
	var hasSubNav = document.getElementsByClassName("js-hasSubNav");

	mobileNav.style.display = "none";
	hideAllSubNavs();

	function hideAllSubNavs(){
		for (var i = 0; i < mobileSubNav.length; i++){
			mobileSubNav[i].style.display = "none";
		}
	}

	for (var i = 0; i < hasSubNav.length; i++){
		hasSubNav[i].addEventListener("click", showHideSubNav);
	}

	burgerIcon.addEventListener("click", showHideNav);

	function showHideNav(){
		
		if (mobileNav.style.display === "none"){
			showNav();
		}
		else {
			hideNav();
		}
	}

	function showNav(){
		mobileNav.style.display = "block";
	}

	function hideNav(){
		mobileNav.style.display = "none";
		hideAllSubNavs();
	}


	function showHideSubNav(e){
		e.preventDefault();
		var mySubNav = this.parentElement.childNodes[3];
		if (mySubNav.style.display === "none"){
			showSubNav(mySubNav);
		}
		else {
			hideSubNav(mySubNav);
		}
	}

	function showSubNav(mySubNav){
		mySubNav.style.display = "block";
	}

	function hideSubNav(mySubNav){
		mySubNav.style.display = "none";
	}
});




