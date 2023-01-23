/*-----------------link scroll effect------------------*/
$(document).ready(function(){
	// Add smooth scrolling to all links
	$("a").on('click', function(event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function(){

				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		} // End if
	});
});
/*-----------------------------------------------------*/

/*-----------------nevjegyunk------------------*/
var nevjegy = document.getElementById("nevjegyunk");
var nevjegyBelso = document.getElementById("nevjegyBelso");

function openNevjegy() {
	nevjegyunk.style.visibility = 'visible';
	setTimeout(function () {
		nevjegyBelso.style.transform = 'rotateY(0deg)';
	}, 300);
}

nevjegy.addEventListener("click", closeNevjegy, false);
nevjegyBelso.addEventListener("click", function (e) {
	e.stopPropagation();
}, false);

function closeNevjegy(e) {
	nevjegyunk.style.visibility = 'hidden';
	nevjegyBelso.style.transform = 'rotateY(180deg)';
}
/*---------------------------------------------*/

/*-----------------gallery------------------*/
window.addEventListener("resize", initSwiperGallery, false);

var windowWidth = -100;
var swiperGallery = null;

function initSwiperGallery () {
	if(window.innerWidth < windowWidth-100 || window.innerWidth > windowWidth+100) {
		windowWidth = window.innerWidth;
		var sPView = 3;

		if (window.innerWidth < 500) {
			sPView = 1;
		} else if (window.innerWidth >= 500 && window.innerWidth < 992) {
			sPView = 2;
		}

		if (swiperGallery != null) {
			swiperGallery.destroy();
		}

		swiperGallery = new Swiper('.swiper-container', {
			slidesPerView: sPView,
			spaceBetween: 50,
			lazy: {
				loadPrevNext: true,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: false,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}
		});
	}
}

initSwiperGallery();
/*------------------------------------------*/

/*-------pswp full screen gallery--------*/
var pswpElement = document.querySelectorAll('.pswp')[0];

var gallery = null;

function loadGalleryFromIndex(index) {
	var options = {
	    index: index-1,
	    loop: false,
	    maxSpreadZoom: 0,
	    pinchToClose: true,
	};

	gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
	gallery.options.getDoubleTapZoom = function(isMouseClick, item) {
	    return item.initialZoomLevel;
	};

	console.log(gallery);

	gallery.init();
}
/*---------------------------------------*/

/*------------count up-------------*/
function countUP (parentAOS, element, to, suffix) {
	const options = {
		decimalPlaces: 0,
		suffix: suffix,
		startVal: 0,
		duration: 2.0,
		separator: "'",
		decimal: ",",
		useEasing: false,
	};

	let counter = new CountUp(element, to, options);
	var parent = document.getElementById(parentAOS);

	window.addEventListener("scroll", function () {
		setTimeout(function () {
			if (parent.classList.contains("aos-animate")) {
				counter.start();
			}
		}, 200);
	}, false);

	window.addEventListener("load", function () {
		if (parent.classList.contains("aos-animate")) {
			counter.start();
		}
	}, false);
}

countUP("choseUSCounter1AOS", "choseUSCounter1", 10, "+");
countUP("choseUSCounter2AOS", "choseUSCounter2", 100, "%");
countUP("choseUSCounter3AOS", "choseUSCounter3", 100, "+");
/*---------------------------------*/

/*------------form animation-------------*/
var formClass = document.getElementsByClassName("form");
var formPlusz = document.getElementsByClassName("areaForm");
var forms = [];

for(i = 0; i<formClass.length; i++)
	forms.push(formClass[i]);

for(i = 0; i<formPlusz.length; i++)
	forms.push(formPlusz[i]);

for(i = 0; i<forms.length; i++){
	forms[i].addEventListener("focusin", function(){formGetFocus(this);}, false);
	forms[i].addEventListener("focusout", function(){formLoseFocus(this);}, false);
}


function formGetFocus(x){
	x.previousElementSibling.style.color = "#5fa8d3";
}

function formLoseFocus(x){
	if(x.children[0].value == "")
		x.previousElementSibling.style.color = "";
}
/*---------------------------------------*/

/*----------fancy button click effect----------*/
var zIndex = 0;
function animateRipple (element, event) {
	/*if (element.children.length == 0) {
		zIndex = 0;
	} else {
		zIndex++;
	}*/

	var child = document.createElement("span");
	child.setAttribute("class", "ripple");
	child.setAttribute("style", "z-index: "+zIndex+"; left: calc("+event.layerX+"px - 0.5rem); top: calc("+event.layerY+"px - 0.5rem);");

	element.appendChild(child);

	child.onanimationend = function(event) {
		element.removeChild(child);
	};
}
/*---------------------------------------------*/

/*-----------------mailer------------------*/
var form = document.getElementById("kapcsolatUrlap");

form.addEventListener("submit", function (event) {
	event.preventDefault();
	const FD = new FormData(form);

	var object = {};
	FD.forEach(function(value, key){
	    object[key] = value;
	});
	var json = JSON.stringify(object);

	$.ajax({
		type: "POST",
		url: "/mailer/sendMailFromForm.php",
		data: json,
		success: function (data) {
      	},
	});

	document.getElementById("sikerult").style.visibility = "visible";
	form.reset();
});

function closeSuccess (element) {
	element.style.visibility = "hidden";
}
/*-----------------------------------------*/