window.addEventListener("load", function(){

	// Defining all of our DOM elements.
	var modalBackground = document.getElementsByClassName("modalOverlay")[0];
	var artistImage = document.getElementsByClassName("artistModalImage")[0];
	var artistTitle = document.getElementsByClassName("artistName")[0];
	var artistSummary = document.getElementsByClassName("artistSummary")[0];

	var instagram = document.getElementsByClassName("instagramLink")[0];
	var snapchat = document.getElementsByClassName("snapchatLink")[0];
	var facebook = document.getElementsByClassName("facebookLink")[0];
	var twitter = document.getElementsByClassName("twitterLink")[0];
	var soundcloud = document.getElementsByClassName("soundcloudLink")[0];

	// Defining the areas that are clickable for the user to open the modal.
	var allArtistThumbnails = document.getElementsByClassName("artistThumbnail");
	var allArtistNames = document.getElementsByClassName("artist__name");

	// Defining "X" button to close modal.
	var xModal = document.getElementsByClassName("closeModal")[0];
	// Adding event listener to "X".
	xModal.addEventListener("click", closeModal);

	// Assigning an event listener to artist thumbnails and names.
	for (var i = 0; i < allArtistThumbnails.length; i++) {
		allArtistThumbnails[i].addEventListener("click", showModal);
		allArtistNames[i].addEventListener("click", showModal);
	}

	// After filling the modal, makes the modal visible.
	function showModal(e){
		e.preventDefault();
		fillModal(this);
		modalBackground.style.display = "flex";
	}

// Functions!

	// Fills the modal with relevant information.
	function fillModal(clickedElement){
		fillImage(clickedElement);
		fillDescription(clickedElement);
		fillHeader(clickedElement);
		fillSocials(clickedElement);
		prepForNextPrev(clickedElement);
	}

	function fillImage(clickedElement){
		// Fills artist image.
		var artistImageURL = clickedElement.parentNode.childNodes[3].innerHTML;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';
	}

	function fillDescription(clickedElement){
		// Fills artist description.
		var artistLink = clickedElement.parentNode.childNodes[7].innerHTML;
		var artistDescription = clickedElement.parentNode.childNodes[9].innerHTML;
		artistSummary.innerHTML = artistLink + "<br>" + artistDescription;
	}

	function fillHeader(clickedElement){
		// Fills artist name.
		var artistName = clickedElement.parentNode.dataset.artistName;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';
	}

	function fillSocials(clickedElement){
		// Fills artist social icons.
		// Defining Artist socials
		var artistInstagram = clickedElement.parentNode.childNodes[13].childNodes[1].innerHTML;
		var artistSnapchat = clickedElement.parentNode.childNodes[13].childNodes[3].innerHTML;
		var artistFacebook = clickedElement.parentNode.childNodes[13].childNodes[5].innerHTML;
		var artistTwitter = clickedElement.parentNode.childNodes[13].childNodes[7].innerHTML;
		var artistSoundcloud = clickedElement.parentNode.childNodes[13].childNodes[9].innerHTML;

		instagram.href = artistInstagram;
		snapchat.href = artistSnapchat;
		facebook.href = artistFacebook;
		twitter.href = artistTwitter;
		soundcloud.href = artistSoundcloud;
	}


	// Function to close the modal.
	function closeModal(){
		modalBackground.style.display = "none";
	}


	


	function prepForNextPrev(clickedElement){

		removeListenersNext(nextButton);
		removeListenersPrev(prevButton);

		var nextButton = document.getElementsByClassName("nextButton")[0];
		var prevButton = document.getElementsByClassName("prevButton")[0];
		
		checkFirstLast(nextButton, prevButton, clickedElement);

		var originalArtist = clickedElement.parentNode;

		addButtonListeners(nextButton, prevButton, originalArtist);
	}

	function addButtonListeners(nextButton, prevButton, originalArtist){
		nextButton.addEventListener("click", function(){ fillNextModal(originalArtist); });
		prevButton.addEventListener("click", function(){ fillPrevModal(originalArtist); });
	}

	function fillNextModal(originalArtist){

		// Fills artist image.
		var artistImageURL = originalArtist.nextSibling.nextSibling.childNodes[3].innerHTML;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';

		// Fills artist description.
		var artistLink = originalArtist.nextSibling.nextSibling.childNodes[7].innerHTML;
		var artistDescription = originalArtist.nextSibling.nextSibling.childNodes[9].innerHTML;
		artistSummary.innerHTML = artistLink + "<br>" + artistDescription;

		// Fills artist name.
		var artistName = originalArtist.nextSibling.nextSibling.childNodes[5].innerHTML;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';

		// Sets new point of origin.
		var newOriginal = originalArtist.nextSibling.nextSibling.childNodes[1];

		// Prepares Next and Previous buttons in the modal.
		prepForNextPrev(newOriginal);
		
	}

	function fillPrevModal(originalArtist){
		
		// Fills artist image.
		var artistImageURL = originalArtist.previousSibling.previousSibling.childNodes[3].innerHTML;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';

		// Fills artist description.
		var artistLink = originalArtist.previousSibling.previousSibling.childNodes[7].innerHTML;
		var artistDescription = originalArtist.previousSibling.previousSibling.childNodes[9].innerHTML;
		artistSummary.innerHTML = artistLink + "<br>" + artistDescription;

		// Fills artist name.
		var artistName = originalArtist.previousSibling.previousSibling.childNodes[5].innerHTML;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';

		// Sets new point of origin.
		var newOriginal = originalArtist.previousSibling.previousSibling.childNodes[1];

		// Prepares Next and Previous buttons in the modal.
		prepForNextPrev(newOriginal);
	}

	function removeListenersNext(nextButton){
		var nb = document.getElementsByClassName("nextButton")[0];
		var nextClone = nb.cloneNode(true);
		nb.parentNode.replaceChild(nextClone, nb);
	}

	function removeListenersPrev(prevButton){
		var pb = document.getElementsByClassName("prevButton")[0];
		var prevClone = pb.cloneNode(true);
		pb.parentNode.replaceChild(prevClone, pb);
	}

	function checkFirstLast(nextButton, prevButton, clickedElement){

		if(clickedElement.parentNode.previousElementSibling === null){
			prevButton.style.visibility = "hidden";
		}

		else if(clickedElement.parentNode.nextElementSibling === null){
			nextButton.style.visibility = "hidden";
		}

		else {
			prevButton.style.visibility = "visible";
			nextButton.style.visibility = "visible";
		}
	}
});

