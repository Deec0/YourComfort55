
// Attach photo
document.addEventListener("DOMContentLoaded", () => {

	const forms = document.getElementById("reviewForm");
	const inputFile = document.querySelectorAll(".upload-file__input");

	/////////// Кнопка «Прикрепить файл» ///////////
	inputFile.forEach(function (el) {
		let textSelector = document.querySelector(".upload-file__text");
		let fileList;

		// Событие выбора файла(ов)
		el.addEventListener("change", function (e) {

			// создаём массив файлов
			fileList = [];
			for (let i = 0; i < el.files.length; i++) {
				fileList.push(el.files[i]);
			}

			// вызов функции для каждого файла
			fileList.forEach(file => {
				uploadFile(file);
			});
		});

		// Проверяем размер файлов и выводим название
		const uploadFile = (file) => {

			// файла <5 Мб
			if (file.size > 5 * 1024 * 1024) {
				alert("Файл должен быть не более 5 МБ.");
				return;
			}

			// Показ загружаемых файлов
			if (file && file.length > 1) {
				if (file.length <= 4) {
					textSelector.textContent = `Выбрано ${file.length} файла`;
				}
				if (file.length > 4) {
					textSelector.textContent = `Выбрано ${file.length} файлов`;
				}
			} else {
				textSelector.textContent = file.name;
			}
		}
	});

});

if (document.getElementById('header') !== null) {
	let header = document.querySelector('#header');

	// Fixed Header
	window.onscroll = function showHeader() {
		if (window.pageYOffset > 700) {
			header.classList.add('header-fixed');
		} else {
			header.classList.remove('header-fixed');
		}
	}
}

$.fn.serializeObject = function () {
	var o = {};
	var a = this.serializeArray();
	$.each(a, function () {
		if (o[this.name] !== undefined) {
			if (!o[this.name].push) {
				o[this.name] = [o[this.name]];
			}
			o[this.name].push(this.value || "");
		} else {
			o[this.name] = this.value || "";
		}
	});
	return o;
};

$(document).ready(function () {
	// Smooth scroll to element
	$("[data-scroll]").on("click", function (event) {
		event.preventDefault();

		let elementID = $(this).data('scroll');
		let elementOffset = $(elementID).offset().top;

		$("html, body").animate({
			scrollTop: elementOffset + 1
		}, 300);
	});

	// Animation burger
	$(function () {
		$('.nav-button').click(function (event) {
			$('.nav-anim').toggleClass('open-nav');
			$('#header').toggleClass('open-nav');
		})
	});

	// Close mobile menu on click link
	$(function () {
		let mobileMenu = $('#navToggle');
		let mobileMenuLink = mobileMenu.find('a');
		mobileMenuLink.click(function (event) {
			mobileMenu.removeClass('show');
			$('.nav-anim').removeClass('open-nav');
			$('#header').removeClass('open-nav');
		})
	});

	// Toggle content in a modal Auth and Reg
	$(function () {
		if ($('#modalAuthContent').length) {
			$('#modalRegContent').hide();
			$('#modalRegLink').click(function (event) {
				$('#modalAuthContent').hide();
				$('#modalRegContent').show();
			})
			$('#modalAuthLink').click(function (event) {
				$('#modalRegContent').hide();
				$('#modalAuthContent').show();
			})
			$("#modalAuth").on("hidden.bs.modal", function () {
				$('#modalAuthContent').show();
				$('#modalRegContent').hide();
			});
		}
	});

	// Swiper
	if ($('.reviews__slider').length) {
		new Swiper('.reviews__slider', {
			slidesPerView: 1,
			simulateTouch: true,
			spaceBetween: 20,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			breakpoints: {
				576: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 36,
				},
			}
		});
		$(function () {
			var reviewLength = $('.reviews-slider__slide.swiper-slide').length;
			if ($(window).width() >= 576) {
				if (reviewLength == 1)
					$('.reviews-slider__wrapper').css('justify-content', 'center');
			}
			if ($(window).width() >= 768) {
				if (reviewLength == 1 || reviewLength == 2)
					$('.reviews-slider__wrapper').css('justify-content', 'center');
			}
		});
	}
	if ($('.team__slider').length) {
		new Swiper('.team__slider', {
			slidesPerView: 1,
			simulateTouch: true,
			spaceBetween: 22,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			breakpoints: {
				576: {
					slidesPerView: 2,
					spaceBetween: 22,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 22,
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 40,
				},
			}
		});
	}
	if ($('.certificates__slider').length) {
		new Swiper('.certificates__slider', {
			slidesPerView: 1,
			simulateTouch: true,
			spaceBetween: 21,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev'
			},
			breakpoints: {
				576: {
					slidesPerView: 2,
					spaceBetween: 21,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 21,
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 21,
				},
			}
		});
	}

	// Fancybox
	if ($('.reviews-slider__img').length) {
		$('.reviews-slider__img').fancybox({
			arrows : false,
			buttons : [
				'zoom',
				'close'
			],
		});
	}
	if ($('.team-slider__img').length) {
		$('.team-slider__img').fancybox({
			arrows : false,
			buttons : [
				'zoom',
				'close'
			],
		});
	}
	if ($('.certificates-slider__img').length) {
		$('.certificates-slider__img').fancybox({
			arrows : false,
			buttons : [
				'zoom',
				'close'
			],
		});
	}

	// Load more text
	if ($('.reviews-slider__comment').length) {
		(function ($) {
			$.fn.shorten = function (settings) {
				var config = {
					showChars: 130,
					ellipsesText: "...",
					moreText: "еще",
					lessText: "скрыть"
				};
				if (settings) {
					$.extend(config, settings);
				}

				$(document).off("click", '.morelink');
				$(document).on({
					click: function () {
						var $this = $(this);
						if ($this.hasClass('less')) {
							$this.removeClass('less');
							$this.html(config.moreText);
						} else {
							$this.addClass('less');
							$this.html(config.lessText);
						}
						$this.parent().prev().toggle();
						$this.prev().toggle();
						return false;
					}
				}, '.morelink');

				return this.each(function () {
					var $this = $(this);
					if ($this.hasClass("shortened")) return;
					$this.addClass("shortened");
					var content = $this.html();
					if (content.length > config.showChars) {
						var c = content.substr(0, config.showChars);
						var h = content.substr(config.showChars, content.length - config.showChars);
						var html = c + '<span class="moreellipses">' + config.ellipsesText + ' </span><span class="morecontent"><span>' + h + '</span> <a href="#" class="morelink">' + config.moreText + '</a></span>';
						$this.html(html);
						$(".morecontent span").hide();
					}
				});

			};

		})($);
		$(".reviews-slider__comment").shorten();
	}

	// API Yandex Maps
	if ($('#map').length) {
		ymaps.ready(function () {
			var myMap = new ymaps.Map('map', {
				center: [55.010354, 73.333816],
				zoom: 17
			}),

			// Создаём макет содержимого.
			MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
				'<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
			),

			myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
				hintContent: 'ВашКомфорт55',
				balloonContent: 'г. Омск, ул. Красный Путь, 143а, оф. 110, 1 этаж'
			}, {
				// Опции.
				// Необходимо указать данный тип макета.
				iconLayout: 'default#image',
			});

			myMap.controls
				.remove('rulerControl')
				.remove('zoomControl')
				.remove('searchControl')
				.remove('trafficControl')
				.remove('fullscreenControl')
				.remove('geolocationControl')
				.remove('typeSelector');

			if ($(window).width() <= 1024) {
				myMap.controls.add('geolocationControl', {
					float: 'none',
					position: {
						top: '25px',
						right: '12px'
					}
				});
				myMap.controls.add('zoomControl', {
					size: 'small',
					float: 'none',
					position: {
						top: '70px',
						right: '12px'
					}
				});
			}
			else {
				myMap.behaviors.disable([
					// 'drag',
					'scrollZoom'
				]);
				myMap.controls.add('geolocationControl', {
					float: 'none',
					position: {
						top: '50px',
						right: '30px'
					}
				});
				myMap.controls.add('zoomControl', {
					size: 'small',
					float: 'none',
					position: {
						top: '100px',
						right: '30px'
					}
				});
			}

			myMap.geoObjects
				.add(myPlacemark)
		});
	}
});