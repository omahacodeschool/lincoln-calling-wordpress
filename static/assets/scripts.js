window.addEventListener("load", function(){

	function showMenu(e){
		var menuBlock = this.childNodes[1];
		menuBlock.style.top = menuHeight.toString() + "px";
		
		this.addEventListener("mouseout", function(){ hideMenu(menuBlock) });
	}

	function hideMenu(menu){
		menu.style.top = "";
	}

	var menuHeight = document.getElementsByClassName("navigationList")[0].clientHeight;

	var dropDownLink = document.getElementsByClassName("hasDropDown");

	for (var i = 0; i < dropDownLink.length; i++){
		dropDownLink[i].addEventListener("mouseover", showMenu);
		// dropDownLink[i].addEventListener("mouseout", hideMenu);
	}
	
});