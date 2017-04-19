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
		detectScreenSize(this);
	}

// Functions!

	// Detects the screen size to disable the modal on small screens.
	function detectScreenSize(clickedElement){
		var screenWidth = window.innerWidth;
		if(screenWidth <= "700"){
			return false;
		}
		else {
			fillModal(clickedElement);
			modalBackground.style.display = "flex";
		}
	}

	// Fills the modal with relevant information.
	function fillModal(clickedElement){
		fillImage(clickedElement);
		fillDescription(clickedElement);
		fillHeader(clickedElement);
		fillSocials(clickedElement);
		prepForNextPrev(clickedElement);
	}

	// Fills artist image.
	function fillImage(clickedElement){
		var artistImageURL = clickedElement.parentNode.dataset.artistFullImage;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';
	}

	// Fills artist description.
	function fillDescription(clickedElement){
		var siteLink = clickedElement.parentNode.dataset.artistSiteLink;
		var siteText = clickedElement.parentNode.dataset.artistWebsiteName;
		var fullLink = "<a href='" + siteLink + "' class='webLink'>" + siteText + "</a>";
		var artistDescription = clickedElement.parentNode.dataset.artistDescription;
		artistSummary.innerHTML = fullLink + "<br>" + artistDescription;
	}

	// Fills artist name.
	function fillHeader(clickedElement){
		var artistName = clickedElement.parentNode.dataset.artistName;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';
	}

	// Fills artist social icons.
	function fillSocials(clickedElement){

		// Defining Artist socials
		var artistInstagram = clickedElement.parentNode.dataset.artistInstagram;
		var artistSnapchat = clickedElement.parentNode.dataset.artistSnapchat;
		var artistFacebook = clickedElement.parentNode.dataset.artistFacebook;
		var artistTwitter = clickedElement.parentNode.dataset.artistTwitter;
		var artistSoundcloud = clickedElement.parentNode.dataset.artistSoundcloud;
		
		checkForEmptySocials(artistInstagram, artistSnapchat, artistFacebook, artistTwitter, artistSoundcloud);
	}

	// If social links are empty, the icon will not be displayed.
	function checkForEmptySocials(artistInstagram, artistSnapchat, artistFacebook, artistTwitter, artistSoundcloud){
		checkInstagram(artistInstagram);
		checkSnapchat(artistSnapchat);
		checkFacebook(artistFacebook);
		checkTwitter(artistTwitter);
		checkSoundcloud(artistSoundcloud);
	}

	// If instagram link is empty, do not display instagram icon.
	function checkInstagram(artistInstagram){
		if(artistInstagram === ""){
			instagram.style.display = "none";
		}
		else {
			instagram.style.display = "inline-block";
			instagram.href = artistInstagram;
		}
	}

	// If snapchat link is empty, do not display snapchat icon.
	function checkSnapchat(artistSnapchat){
		if(artistSnapchat === ""){
			snapchat.style.display = "none";
		}
		else {
			snapchat.style.display = "inline-block";
			snapchat.href = artistSnapchat;
		}
	}

	// If facebook link is empty, do not display facebook icon.
	function checkFacebook(artistFacebook){
		if(artistFacebook === ""){
			facebook.style.display = "none";
		}
		else {
			facebook.style.display = "inline-block";
			facebook.href = artistFacebook;
		}
	}

	// If twitter link is empty, do not display twitter icon.
	function checkTwitter(artistTwitter){
		if(artistTwitter === ""){
			twitter.style.display = "none";
		}
		else {
			twitter.style.display = "inline-block";
			twitter.href = artistTwitter;
		}
	}

	// If soundcloud link is empty, do not display soundcloud icon.
	function checkSoundcloud(artistSoundcloud){
		if(artistSoundcloud === ""){
			soundcloud.style.display = "none";
		}
		else {
			soundcloud.style.display = "inline-block";
			soundcloud.href = artistSoundcloud;
		}
	}


	// Function to close the modal.
	function closeModal(){
		modalBackground.style.display = "none";
	}


	

	// Preparing Next and Previous buttons to work for the current modal.
	function prepForNextPrev(clickedElement){

		removeListenersNext(nextButton);
		removeListenersPrev(prevButton);

		var nextButton = document.getElementsByClassName("nextButton")[0];
		var prevButton = document.getElementsByClassName("prevButton")[0];
		
		checkFirstLast(nextButton, prevButton, clickedElement);

		var originalArtist = clickedElement.parentNode;

		addButtonListeners(nextButton, prevButton, originalArtist);
	}

	// Adds event listeners to next/previous buttons.
	function addButtonListeners(nextButton, prevButton, originalArtist){
		nextButton.addEventListener("click", function(){ fillNextModal(originalArtist); });
		prevButton.addEventListener("click", function(){ fillPrevModal(originalArtist); });
	}

	// Fills the modal when the user pushes "next".
	function fillNextModal(originalArtist){

		// Fills artist image.
		var artistImageURL = originalArtist.nextElementSibling.dataset.artistFullImage;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';

		// Fills artist description.
		var siteLink = originalArtist.nextElementSibling.dataset.artistSiteLink;
		var siteText = originalArtist.nextElementSibling.dataset.artistWebsiteName;
		var fullLink = "<a href='" + siteLink + "' class='webLink'>" + siteText + "</a>";
		var artistDescription = originalArtist.nextElementSibling.dataset.artistDescription;
		artistSummary.innerHTML = fullLink + "<br>" + artistDescription;

		// Fills artist name.
		var artistName = originalArtist.nextElementSibling.dataset.artistName;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';

		// Sets new point of origin.
		var newOriginal = originalArtist.nextSibling.nextSibling.childNodes[1];

		// Refill socials with the correct ones for the "next" artist.
		fillSocials(newOriginal);

		// Prepares Next and Previous buttons in the modal.
		prepForNextPrev(newOriginal);
		
	}

	// Fills the modal when the user pushes "previous".
	function fillPrevModal(originalArtist){
		
		// Fills artist image.
		var artistImageURL = originalArtist.previousElementSibling.dataset.artistFullImage;
		artistImage.innerHTML = '<img src="' + artistImageURL + '">';

		// Fills artist description.
		var siteLink = originalArtist.previousElementSibling.dataset.artistSiteLink;
		var siteText = originalArtist.previousElementSibling.dataset.artistWebsiteName;
		var fullLink = "<a href='" + siteLink + "' class='webLink'>" + siteText + "</a>";
		var artistDescription = originalArtist.previousElementSibling.dataset.artistDescription;
		artistSummary.innerHTML = fullLink + "<br>" + artistDescription;

		// Fills artist name.
		var artistName = originalArtist.previousElementSibling.dataset.artistName;
		artistTitle.innerHTML = '<h1>' + artistName + '</h1>';

		// Sets new point of origin.
		var newOriginal = originalArtist.previousElementSibling.childNodes[1];

		// Refill socials with the correct ones for the "previous" artist.
		fillSocials(newOriginal);

		// Prepares Next and Previous buttons in the modal.
		prepForNextPrev(newOriginal);
	}

	// Removes all event listeners from the next button to prevent stacking.
	function removeListenersNext(nextButton){
		var nb = document.getElementsByClassName("nextButton")[0];
		var nextClone = nb.cloneNode(true);
		nb.parentNode.replaceChild(nextClone, nb);
	}

	// Removes all event listeners from the previous button to prevent stacking.
	function removeListenersPrev(prevButton){
		var pb = document.getElementsByClassName("prevButton")[0];
		var prevClone = pb.cloneNode(true);
		pb.parentNode.replaceChild(prevClone, pb);
	}

	// Checks to see if we are on the first or last artist, and hides the next
	// or previous button if we are.
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

