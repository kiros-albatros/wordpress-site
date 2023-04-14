//import Swiper, { Navigation, Pagination } from "swiper";

document.addEventListener("DOMContentLoaded", function () {
	const body = document.querySelector("body");
	const screenWidth = window.screen.width;
	//	console.log(screenWidth);

	if (screenWidth < 656) {
		body.classList.add("touch");
	} else {
		body.classList.add("mouse");
	}

	const slider = document.querySelector(".slider");

	if (slider) {
		const swiperOnMain = new Swiper(".slider", {
			// Optional parameters
			loop: true,
			slidesPerView: 1,
			spaceBetween: 30,
			mousewheel: true,

			breakpoints: {
				640: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 4,
					spaceBetween: 30,
				},

				1400: {
					slidesPerView: 5,
					spaceBetween: 20,
				},
			},

			// Navigation arrows
			navigation: {
				nextEl: ".slider__arrow--next",
				prevEl: ".slider__arrow--prev",
			},
		});
	}

	const burger = document.querySelector(".header__burger");
	const menu = document.querySelector(".header__nav");
	const menuItems = document.querySelectorAll(".header__nav-link");
	const subMenus = document.querySelectorAll(".sub-menu");
	const parentMenuItems = document.querySelectorAll(
		".header__nav-item--parent > a"
	);
	//	console.log(parentMenuItems);

	if (subMenus) {
		subMenus.forEach((subMenu) => {
			subMenu.classList.remove("sub-menu");
			subMenu.classList.add("header__nav-sublist");
		});
	}

	if (burger && menu) {
		burger.addEventListener("click", function () {
			burger.classList.toggle("header__burger--opened");
			menu.classList.toggle("header__nav--opened");
		});

		for (let i = 0; i < parentMenuItems.length; i++) {
			parentMenuItems[i].addEventListener("click", function (e) {
				console.log("clicked");
				e.preventDefault();
				let subMenuItem = this.nextElementSibling;
				if (subMenuItem) {
					subMenuItem.classList.toggle("header__nav-sublist--shown");
				}
			});
		}
	}
});
