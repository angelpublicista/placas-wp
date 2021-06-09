jQuery(function ($) {
	$('.pl-slick-products').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: `<button class='pl-slick-arrow pl-slick-arrow__prev'>
            <i class="fas fa-chevron-left"></i>
        </button>`,
        nextArrow: `<button class='pl-slick-arrow pl-slick-arrow__next'>
            <i class="fas fa-chevron-right"></i>
        </button>`,
        dots: true,
        autoplay: true,
        autoplaySpeed: 7000,
        responsive: [
            {
                breakpoint: 567,
                settings: {
                    arrows: false,
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.single-product .wpd-buttons-wrap-simple .wpc-customize-product').html(`<i class="fas fa-pen"></i> <span class="btn-text">Diseñar</span>`)

    $('.sidebar-main .widget_product_categories .cat-parent').append('<button type="button" class="icon-more-cat"><i class="fas fa-plus"></i></button>')

    $('.sidebar-main .widget_product_categories .cat-parent .icon-more-cat').click(function(e) {
        e.preventDefault()
        $(this).parent().find('.children').slideToggle();
    })
});