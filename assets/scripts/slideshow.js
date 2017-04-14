window.addEventListener("load", function(){

	document.addEventListener('visibilitychange', function () {
	    if (document.hidden) {
	    	clear();
	    } else {
	    	intSet();
	    }
	});

	const imageStrip = document.getElementsByClassName('js-imageStrip')[0];
	const container = document.getElementsByClassName('js-slideShow')[0];

	// TODO: update these values when screen is resized
	const widthOfContainer = container.offsetWidth;
	const maxPos = widthOfContainer * imageStrip.children.length;
	//

	const controls = document.getElementsByClassName("slideShowControls")[0].children;
	const links = document.getElementsByClassName("slideShowArticles")[0].children;

	var currentPos = 0;
	var state = 0;
	var slideshow;

	container.addEventListener("mouseover", clear);
	container.addEventListener("mouseout", intSet);
	addUserHighlights();
	addUserUnhighlight();

	intSet();

	function intSet(){
		slideshow = setInterval( playSlideShow, 2000);
	}

	function playSlideShow(){
		incrementSlide();
		checkValues();
		moveSlideShow();
	}

	function incrementSlide(){
		currentPos += widthOfContainer;
		state++;
	}

	function checkValues(){
		checkPos();
		checkstate();
	}

	function moveSlideShow(index=state, autoOff=true){
		var pos = index * widthOfContainer;
		moveStrip(pos);
		moveControl(index, autoOff);
	}

	function checkPos(){
		if (currentPos >= maxPos){ currentPos = 0 };
	}

	function checkstate(){
		if (state >= 4){ state = 0 };
	}

	function moveStrip(pos){
		imageStrip.style.right = pos +"px";
	}

	function moveControl(index){
		untoggle();
		controls[index].classList.add("slideShow__control--hover");
		links[index].classList.add("slideShow__article--hover");
	}

	function untoggle(){
		for (var i = 0; i < imageStrip.children.length; i++){
			controls[i].classList.remove("slideShow__control--hover");
			links[i].classList.remove("slideShow__article--hover");
		}
	}

	function clear(){
		clearInterval(slideshow);		
	}

	function addUserHighlights(){
		for (var i=0; i < links.length; i++){
			links[i].addEventListener("mouseover", userToggle);
			controls[i].addEventListener("mouseover", userToggle);
		}
	}

	function addUserUnhighlight(){
		for (var i=0; i < links.length; i++){
			links[i].addEventListener("mouseout", untoggle);
			controls[i].addEventListener("mouseout", untoggle);
		}
	}

	function userToggle(el){
		var index = findElementIndex(el);
		untoggle();
		moveSlideShow(index);
	}

	function findElementIndex(el){
		var children = el.target.parentElement.children;
		for (var i=0; i < children.length; i++){
			if (children[i] == el.target){
				return i;
			}
		}
	}

});