'use strict';

jQuery(document).ready(function() {
	
	$("#slider-container").owlCarousel({
		// Наиболее важные особенности owl
    items : 5,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : true,
    itemsScaleUp : false,
     
    //Базовая скорость
    slideSpeed : 200,
    paginationSpeed : 800,
    rewindSpeed : 1000,
     
    //Авто-прокрутка
    autoPlay : false,
    stopOnHover : false,
     
    // Навигация
    navigation : false,
    navigationText : ["prev","next"],
    rewindNav : true,
    scrollPerPage : false,
     
    // Пагинация
    pagination : true,
    paginationNumbers: false,
     
    // Отзывчивость
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
     
    // CSS стили
    baseClass : "owl-carousel",
    theme : "owl-theme",
     
    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
     
    // Авто-высота
    autoHeight : false,
     
    //JSON
    jsonPath : false,
    jsonSuccess : false,
     
    // События мышки
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,
     
    //Transitions
    transitionStyle : false,
     
    // Другое
    addClassActive : false,
     
    // Функции обратного вызова
    beforeUpdate : false,
    afterUpdate : false,
    beforeInit: false,
    afterInit: false,
    beforeMove: false,
    afterMove: false,
    afterAction: false,
    startDragging : false,
    afterLazyLoad : false
	});
});