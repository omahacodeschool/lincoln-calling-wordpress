window.addEventListener("load", function(){

	const imageStrip = document.getElementsByClassName('js-imageStrip')[0];
	const container = document.getElementsByClassName('js-slideShow')[0];
	const controls = document.getElementsByClassName("slideShowControls")[0].children;
	const links = document.getElementsByClassName("slideShowArticles")[0].children;

	var widthOfContainer = container.offsetWidth;
	var maxPos = widthOfContainer * imageStrip.children.length;
	var currentPos = 0;
	var state = 0;
	var slideshow;

	document.addEventListener('visibilitychange', pause);
	window.addEventListener("resize", defineVars);
	container.addEventListener("mouseover", clear);
	container.addEventListener("mouseout", intSet);

	addUserHighlights();
	addUserUnhighlight();
	intSet();

	// Sets the auto-play interval for the side show
	function intSet(){
		slideshow = setInterval( playSlideShow, 2000);
	}

	// Plays the slide show forward one instance
	function playSlideShow(){
		incrementSlide();
		checkValues();
		moveSlideShow();
	}

	// Updates values when a slide increments
	function incrementSlide(){
		currentPos += widthOfContainer;
		state++;
	}

	// Checks if the position and state values are valid
	function checkValues(){
		checkPos();
		checkstate();
	}

	// Handles the slide show moving forward
	//
	// index - Integer of the state 
	function moveSlideShow(index=state){
		var pos = index * widthOfContainer;
		moveStrip(pos);
		moveControl(index);
	}

	// Checks the is the image roll's position doesn't exceed the max
	function checkPos(){
		if (currentPos >= maxPos){ currentPos = 0 };
	}

	// Checks the is the state doesn't exceed the max
	function checkstate(){
		if (state >= 4){ state = 0 };
	}

	// Moves the image roll
	//
	// pos - Integer
	function moveStrip(pos){
		imageStrip.style.right = pos +"px";
	}

	// Moves the highlight to the controls/buttons
	//
	// index - Integer
	function moveControl(index){
		untoggle();
		controls[index].classList.add("slideShow__control--hover");
		links[index].classList.add("slideShow__article--hover");
	}

	// Removes the highlighting class from all
	function untoggle(){
		for (var i = 0; i < imageStrip.children.length; i++){
			controls[i].classList.remove("slideShow__control--hover");
			links[i].classList.remove("slideShow__article--hover");
		}
	}

	// Clears the slide show interval
	function clear(){
		clearInterval(slideshow);		
	}

	// Adds hover events for each link and control
	function addUserHighlights(){
		for (var i=0; i < links.length; i++){
			links[i].addEventListener("mouseover", userToggle);
			controls[i].addEventListener("mouseover", userToggle);
		}
	}

	// Adds mouse out events for each link and control
	function addUserUnhighlight(){
		for (var i=0; i < links.length; i++){
			links[i].addEventListener("mouseout", untoggle);
			controls[i].addEventListener("mouseout", untoggle);
		}
	}

	// Delegates when user hovers on an item
	function userToggle(el){
		var index = findElementIndex(el.target);
		untoggle();
		moveSlideShow(index);
	}

	// Finds the index, in relation to parent, of the element hovered on
	//
	// el - the Event
	function findElementIndex(el){
		var children = el.parentElement.children;
		for (var i=0; i < children.length; i++){
			if (children[i] == el){
				return i;
			}
		}
	}

	// Stops the interval when the user is away
	function pause(){
		if (document.hidden) {
			clear();
		} else {
			intSet();
		}
	}

	// Defines the vars subject to window size change
	function defineVars(){
		widthOfContainer = container.offsetWidth;
		maxPos = widthOfContainer * imageStrip.children.length;
	}

});