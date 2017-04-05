window.addEventListener("load", function(){

	function showMenu(e){
		var menuBlock = this.childNodes[3];
		menuBlock.style.top = menuHeight.toString() + "px";


		
		menuBlock.addEventListener("mouseout", function(){ hideMenu(menuBlock) });
	}

	function hideMenu(menu){
		menu.style.top = "";
	}

	var menuHeight = document.getElementsByClassName("js-navigationList")[0].clientHeight;

	var dropDownLink = document.getElementsByClassName("js-hasDropDown");

	for (var i = 0; i < dropDownLink.length; i++){
		dropDownLink[i].addEventListener("mouseover", showMenu);
	}
	
});