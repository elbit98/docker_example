$(document).ready(function () {
	toggleChats();
	toggleFaq();
	customFormElements();
	tabs();
	slickSliders();
	customPopups();
	mobileEvents();
})
$(window).load(function () {
	scrollBar();
})

function scrollBar() {
	var scrollbarSettings =  {
		mouseWheelPixels: 10,
		scrollInertia: 10
	};

	$(".js-chat-scrollbar").mCustomScrollbar(scrollbarSettings).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});
	$(".js-scrollbar").mCustomScrollbar(scrollbarSettings);
}

function toggleChats() {
	$(".js-show-chat-row").click(function (e) {
		e.preventDefault();
		if($(this).closest(".js-before-chat-row").next(".js-chat-row").hasClass("_opened")){
			$(this).closest(".js-before-chat-row").next(".js-chat-row").toggleClass("_opened")
		} else {
			$(".js-chat-row").removeClass("_opened");
			$(this).closest(".js-before-chat-row").next(".js-chat-row").addClass("_opened");
		}
	});
}

function toggleFaq() {
	$(".js-show-faq-content").click(function (e) {
		e.preventDefault();
		if($(this).closest(".js-faq-item").hasClass("_opened")){
			$(this).closest(".js-faq-item").toggleClass("_opened")
		} else {
			$(".js-faq-item").removeClass("_opened");
			$(this).closest(".js-faq-item").addClass("_opened");
		}
	});
}

function customFormElements() {
	$(".js-q-select").styler({});
	$('.js-q-select-multiple').multiselect({
		columns: 1,
		search : false,
		texts: {
			placeholder    : 'Выберите значение', // text to use in dummy input
			search         : 'Поиск',         // search input placeholder text
			selectedOptions: ' выбрано',      // selected suffix text
			selectAll      : 'Выбрать все',     // select all text
			unselectAll    : 'Убрать все',   // unselect all text
			noneSelected   : 'Нет выбранных'   // None selected text
		},
		minHeight: 30,
		maxHeight: 300
	});

	$(".js-q-datepicker").datepicker().datepicker("setDate", new Date());
}
function tabs(){
	$(".js-tab-link").click(function(){
		var tab_id = $(this).attr("data-tab"),
			tab_content__id = $(this).attr("data-content-id");

		$(this).closest(".js-q-tabs").find(".js-tab-link").removeClass("_active");
		$("#" + tab_content__id + " .q-tabs__content--item").removeClass("_active");

		$(this).addClass("_active");
		$("#" + tab_content__id +" #" + tab_id).addClass("_active");
	})
}

function slickSliders() {
    $(".js-partners-slider").slick({
        dots: false,
        infinite: true,
        swipe: true,
        speed: 500,
		autoplay: true,
		autoplaySpeed: 3000,
        slidesToShow: 8,
        slidesToScroll: 1,
        responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 6
				}
			},
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 5
				}
			},
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 6
				}
			},
			{
				breakpoint: 720,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 340,
				settings: {
					slidesToShow: 2
				}
			}],
        cssEase: 'linear',
        adaptiveHeight: true,
        prevArrow: false,
        nextArrow: false
    });
}

function customPopups(){
	$(".js-show-q-create-message-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-create-message-popup").addClass("_opened");
	});
	$(".js-show-q-create-project-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-create-project-popup").addClass("_opened");
	});
	$(".js-show-q-subscriptions-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-subscriptions-popup").addClass("_opened");
	});
	$(".js-show-q-edit-email").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-edit-email").addClass("_opened");
	});
	$(".js-show-q-view-task-admin-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-view-task-admin-popup").addClass("_opened");
	});
	$(".js-show-q-view-task-user-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-view-task-user-popup").addClass("_opened");
	});
	$(".js-show-q-settings-main-page-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-settings-main-page-popup").addClass("_opened");
	});
	$(".js-show-q-edit-user-project-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-edit-user-project-popup").addClass("_opened");
	});
	$(".js-show-q-statistic-user-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-statistic-user-popup").addClass("_opened");
	});
	$(".js-show-q-export-to-file-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-export-to-file-popup").addClass("_opened");
	});
	$(".js-show-q-my-invitation-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-q-my-invitation-popup").addClass("_opened");
	});

    $(".js-close-popup").click(function (e) {
		$("html").removeClass("_opened-popup");
		$(".q-popup").removeClass("_opened");
    });

	$(".q-popup").click(function (e) {
		if (!$(".js-q-popup-holder").is(e.target) && $(".q-popup").has(e.target).length === 0)
		{
			$("html").removeClass("_opened-popup");
			$(".q-popup").removeClass("_opened");
		}
	});

	$(".js-toggle-actions-cities").click(function (e) {
		e.preventDefault();
		$(".js-actions-cities").toggleClass("_opened");
	});

	$(".js-open-video-popup").click(function (e) {
		e.preventDefault();
		$("html").addClass("_opened-popup");
		$(".js-video-popup").addClass("_opened");

		var videoId = $(this).attr("data-video-id"),
			videoUrl = "https://www.youtube.com/embed/" + videoId + "?autoplay=1&autohide=1",
			iframe = '<iframe class="q-youtube" src="'+ videoUrl +'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';

		$(".js-video-container").html(iframe);
	});

	$(".js-video-popup").click(function (e) {
		if (!$(".js-video-popup .js-q-popup-holder").is(e.target))
		{
			$(".js-video-container").html(".");
		}
	});

	$(".js-show-compare-popup").click(function (e) {
		e.preventDefault();
		$(".js-compare-popup").addClass("_opened");
	});
	$(".js-close-compare-popup").click(function (e) {
		e.preventDefault();
		$(".js-compare-popup").removeClass("_opened");
	});

}

function mobileEvents(){
	$(".js-toggle-mobile-menu").click(function (e) {
		e.preventDefault();
		$("html").toggleClass("_opened-menu");
	});
}

