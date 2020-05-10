// ABOUT PAGE GALLERY

document
	.querySelector(".gallery-bottom")
	.addEventListener("click", function (e) {
		let galleryTopIMG = document.querySelector(".gallery-top-img");
		let galleryActiveIMG = document.querySelector(".gallery-active-img");
		if (e.target.src) {
			galleryTopIMG.src = e.target.src;
			galleryActiveIMG.classList.remove("gallery-active-img");
			e.target.classList.add("gallery-active-img");
		}
	});
