window.addEventListener("load", function(){
	var listItems = document.getElementsByClassName("cat-item");
	// console.log(listItems);

	for (i = 0; i < listItems.length; i++){

		// If the navigation item has a dropdown menu, add the down caret in the nav bar.
		if (listItems[i].getElementsByTagName('ul').length >= 1) {
			addCaret(listItems, i);
		}

		// If the navigation link is "newsletter", add the envelope.
		if (listItems[i].childNodes[0].innerHTML.toLowerCase() == "newsletter") {
			addEnvelope(listItems, i);
		}
	}

	function addCaret(listItems, i){
		var navLink = listItems[i].childNodes[0].innerHTML;
		listItems[i].childNodes[0].innerHTML = navLink + ' <i class="fa fa-caret-down navDownArrow" aria-hidden="true"></i>';
	}

	function addEnvelope(listItems, i) {
		var newsletter = listItems[i].childNodes[0].innerHTML;
		listItems[i].childNodes[0].innerHTML = '<i class="fa fa-envelope-o newsletterLink" aria-hidden="true"></i>' + newsletter;
	}
});