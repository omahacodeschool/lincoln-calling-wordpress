window.addEventListener("load", function(){

	const imageStrip = document.getElementsByClassName('js-imageStrip')[0];
	const widthOfContainer = document.getElementsByClassName('js-slideShow')[0].offsetWidth;
	const maxPos = widthOfContainer * imageStrip.children.length;

	const controls = document.getElementsByClassName("slideShowControls")[0].children;
	const links = document.getElementsByClassName("slideShowArticles")[0].children;

	imageStrip.addEventListener("mouseover", clear);
	imageStrip.addEventListener("mouseout", intSet);

	var currentPos = 0;
	var state = 0;
	var slideshow;

	intSet();

	function playSlideShow(){
		currentPos += widthOfContainer;
		state += 1;
		checkPos();
		checkstate();
		moveStrip();
		moveControl();
	};

	function moveStrip(){
		imageStrip.style.right = currentPos +"px";
	}

	function checkPos(){
		if (currentPos >= maxPos){ currentPos = 0 };
	}

	function checkstate(){
		if (state >= 4){ state = 0 };
	}

	function moveControl(){
		controls[state].classList.toggle("slideShow__control--hover");
		links[state].classList.toggle("slideShow__article--hover");
		// Timeout can be glitchy
		setTimeout( untoggle, 1900);
	}

	function untoggle(){
		controls[state].classList.toggle("slideShow__control--hover");
		links[state].classList.toggle("slideShow__article--hover");
	}

	function clear(){
		clearInterval(slideshow);		
	}

	function intSet(){
		slideshow = setInterval( playSlideShow, 2000);
	}

});