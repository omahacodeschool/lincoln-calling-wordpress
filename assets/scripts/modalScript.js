window.addEventListener("load", function(){

	var modalBackground = document.getElementsByClassName("modalOverlay")[0];
	var artistImage = document.getElementsByClassName("artistModalImage")[0];
	var artistTitle = document.getElementsByClassName("artistName")[0];
	var artistSummary = document.getElementsByClassName("artistSummary")[0];

	var allArtistThumbnails = document.getElementsByClassName("artistThumbnail");
	var allArtistNames = document.getElementsByClassName("artist__name");

	for (var i = 0; i < allArtistThumbnails.length; i++) {
		allArtistThumbnails[i].addEventListener("click", showModal);
		allArtistNames[i].addEventListener("click", showModal);
	}

	function showModal(e){
		e.preventDefault();
		fillModal(this, e);
		modalBackground.style.display = "flex";
	}

	function fillModal(clickedElement, e){
		var artistImageURL = clickedElement.parentNode.childNodes[3].innerHTML;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';
		
		var artistDescription = clickedElement.parentNode.childNodes[7].innerHTML;
		artistSummary.innerHTML = artistDescription;
		
		var artistName = clickedElement.parentNode.childNodes[5].innerHTML;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';
	}
});