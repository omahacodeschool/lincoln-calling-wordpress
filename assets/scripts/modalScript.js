window.addEventListener("load", function(){

	// Defining all of our DOM elements.
	var modalBackground = document.getElementsByClassName("modalOverlay")[0];
	var artistImage = document.getElementsByClassName("artistModalImage")[0];
	var artistTitle = document.getElementsByClassName("artistName")[0];
	var artistSummary = document.getElementsByClassName("artistSummary")[0];
	var artistWebsiteLink = document.getElementsByClassName("webLink")[0];

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
		var artistImageURL = clickedElement.parentNode.dataset.artistFullImage;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';
	}

	function fillDescription(clickedElement){
		// Fills artist description.
		artistWebsiteLink.href = clickedElement.parentNode.dataset.artistSiteLink;
		artistWebsiteLink.innerHTML = clickedElement.parentNode.dataset.artistWebsiteName;
		var artistDescription = clickedElement.parentNode.dataset.artistDescription;
		artistSummary.innerHTML = "<br>" + artistDescription;
	}

	function fillHeader(clickedElement){
		// Fills artist name.
		var artistName = clickedElement.parentNode.dataset.artistName;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';
	}

	function fillSocials(clickedElement){
		// Fills artist social icons.
		// Defining Artist socials
		var artistInstagram = clickedElement.parentNode.dataset.artistInstagram;
		var artistSnapchat = clickedElement.parentNode.dataset.artistSnapchat;
		var artistFacebook = clickedElement.parentNode.dataset.artistFacebook;
		var artistTwitter = clickedElement.parentNode.dataset.artistTwitter;
		var artistSoundcloud = clickedElement.parentNode.dataset.artistSoundcloud;

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
		var artistImageURL = originalArtist.nextElementSibling.dataset.artistFullImage;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';

		// Fills artist description.
		artistWebsiteLink.href = originalArtist.nextElementSibling.dataset.artistSiteLink;
		artistWebsiteLink.innerHTML = originalArtist.nextElementSibling.dataset.artistWebsiteName;
		var artistDescription = originalArtist.nextElementSibling.dataset.artistDescription;
		artistSummary.innerHTML = "<br>" + artistDescription;

		// Fills artist name.
		var artistName = originalArtist.nextElementSibling.dataset.artistName;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';

		// Sets new point of origin.
		var newOriginal = originalArtist.nextSibling.nextSibling.childNodes[1];

		// Prepares Next and Previous buttons in the modal.
		prepForNextPrev(newOriginal);
		
	}

	function fillPrevModal(originalArtist){
		
		// Fills artist image.
		var artistImageURL = originalArtist.previousElementSibling.dataset.artistFullImage;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';

		// Fills artist description.
		artistWebsiteLink.href = originalArtist.previousElementSibling.dataset.artistSiteLink;
		artistWebsiteLink.innerHTML = originalArtist.previousElementSibling.dataset.artistWebsiteName;
		var artistDescription = originalArtist.previousElementSibling.dataset.artistDescription;
		artistSummary.innerHTML = "<br>" + artistDescription;

		// Fills artist name.
		var artistName = originalArtist.previousElementSibling.dataset.artistName;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';

		// Sets new point of origin.
		var newOriginal = originalArtist.previousElementSibling.childNodes[1];

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

