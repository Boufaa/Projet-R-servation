//Select element function
const selectElement = function(element){
	return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggler.addEventListener('click', function (){
	body.classList.toggle('open');
});

// Scroll reveal
window.sr = ScrollReveal();
sr.reveal('.animate-left', {
	origin: 'left',
	duration: 1000,
	distance: '25rem',
	delay: 300
});
sr.reveal('.animate-right', {
	origin: 'right',
	duration: 1000,
	distance: '25rem',
	delay: 600
});
sr.reveal('.animate-top', {
	origin: 'top',
	duration: 1000,
	distance: '25rem',
	delay: 600
});
sr.reveal('.animate-bottom', {
	origin: 'bottom',
	duration: 1000,
	distance: '25rem',
	delay: 600
});

/*lightbox*/
const lightboxContainer=document.querySelector(".lightbox");
const lightboxImg=document.querySelector(".lightbox-img");
const portfolioItems=document.querySelector(".box.A").children;
const portfolioItems1=document.querySelector(".box.C").children;
const portfolioItems2=document.querySelector(".box.E").children;
const portfolioItems3=document.querySelector(".box.F").children;
const portfolioItems4=document.querySelector(".box.G").children;
const portfolioItems5=document.querySelector(".box.J").children;
let index;
let imgSrc;


lightboxContainer.addEventListener("click",function(event){
	if (event.target!=lightboxImg) {
		lightBox();
	}
})




	for (let i=0; i<portfolioItems.length; i++){
		portfolioItems[i].querySelector(".fas").addEventListener("click",function(){
			index=i;
			changeImage();
			lightBox();
		})
		portfolioItems1[i].querySelector(".fas").addEventListener("click",function(){
			index=i;
			changeImage1();
			lightBox();
		})
		portfolioItems2[i].querySelector(".fas").addEventListener("click",function(){
			index=i;
			changeImage2();
			lightBox();
		})
		portfolioItems3[i].querySelector(".fas").addEventListener("click",function(){
			index=i;
			changeImage3();
			lightBox();
		})
		portfolioItems4[i].querySelector(".fas").addEventListener("click",function(){
			index=i;
			changeImage4();
			lightBox();
		})
		portfolioItems5[i].querySelector(".fas").addEventListener("click",function(){
			index=i;
			changeImage5();
			lightBox();
		})
	}

	function lightBox(){
		lightboxContainer.classList.toggle("open");
	}

	function changeImage(){
		imgSrc=portfolioItems[index].querySelector("img").getAttribute("src");
		lightboxImg.src=imgSrc;
	}
	function changeImage1(){
		imgSrc=portfolioItems1[index].querySelector("img").getAttribute("src");
		lightboxImg.src=imgSrc;
	}
	function changeImage2(){
		imgSrc=portfolioItems2[index].querySelector("img").getAttribute("src");
		lightboxImg.src=imgSrc;
	}
	function changeImage3(){
		imgSrc=portfolioItems3[index].querySelector("img").getAttribute("src");
		lightboxImg.src=imgSrc;
	}
	function changeImage4(){
		imgSrc=portfolioItems4[index].querySelector("img").getAttribute("src");
		lightboxImg.src=imgSrc;
	}
	function changeImage5(){
		imgSrc=portfolioItems5[index].querySelector("img").getAttribute("src");
		lightboxImg.src=imgSrc;
	}

	


	
	

	


