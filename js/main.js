$(document).ready(() => {
    let MaxStrItem = document.getElementsByClassName('strength-item');

    function strengthItem(iter) {
        new CircleType(document.getElementsByClassName('strItem-firstText')[iter]).radius(94);
        new CircleType(document.getElementsByClassName('strItem-secondText')[iter]).dir(-1).radius(88);
    }

    for (let i = 0; i < MaxStrItem.length; i++) {
        strengthItem(i);
    }

    let choose = $('.choose');
    let activeBar = $('.active-bar');

    for (let i = 0; i < choose.length; i++) {
        $(choose[i]).click(function () {
            $(activeBar[i]).addClass('bottom-bar');
            $(choose[i]).addClass('font');

            for (let j = 0; j < choose.length; j++) {
                if (i !== j) {
                    $(activeBar[j]).removeClass('bottom-bar');
                    $(choose[j]).removeClass('font');
                }
            }
        })
    }

    function products(id, slidesNumber) {
        $('#' + id + ' .products').slick({
            centerMode: true,
            centerPadding: '50%',
            slidesToShow: 1,
            asNavFor: '#' + id + ' .products-nav',
            variableWidth: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '80px',
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '0',
                        slidesToShow: 1,
                    }
                }
            ]
        });
        $('#' + id + ' .products-nav').slick({
            slidesToShow: slidesNumber,
            slidesToScroll: slidesNumber,
            asNavFor: '#' + id + ' .products',
            dots: false,
            centerMode: false,
            infinite: false,
            focusOnSelect: true
        });
    }

    products('white-container', 3);
    products('black-container', 6);
    products('green-container', 5);
    products('mixes-container', 6);
    products('oolong-container', 3);

    choose.click((e) => {
        let currentElement = $(e.target);
        $('.products-container').hide();

        let id = currentElement.data('id');     //<--
        $('#' + id).show();

        choose.removeClass('active');
        currentElement.addClass('active');

        $('#' + id + ' .products').slick('refresh');
        $('#' + id + ' .products-nav').slick('refresh');
    })

    let showSelectBlock = $('#fir-input .reserve-first-select');
    let orderButton = $('#order-button');
    let selectItem = '.select-item';
    let order = $('#order');
    let reserveSelectRight = $('#order-button .reserve-select-right');

    let massiveReserveSelectRight = '.reserve-select-right';
    let reserveInternBlock = $('.reserve-first-select .select-item-internBlock');
    let textSelectItemMassive = [
        $('#white-reserve .text-select-item'),
        $('#black-reserve .text-select-item'),
        $('#green-reserve .text-select-item'),
        $('#mixes-reserve .text-select-item'),
        $('#oolong-reserve .text-select-item'),
    ]


    showSelectBlock.hide();
    orderButton.addClass('all-grid-col');

    orderButton.click(() => {
        reserveInternBlock.hide();


        reserveSelectRight.toggleClass('rotate');
        order.toggleClass('radius-botrl');

        if (showSelectBlock.css('display') !== 'none') {
            showSelectBlock.hide();
        } else {
            showSelectBlock.show();
        }
        for (let i = 0; i < $(selectItem).length; i++) {
            $($(selectItem)[i]).click(() => {

                let selectImg = $(selectItem + ' ' + massiveReserveSelectRight);
                $(selectImg[i]).toggleClass('rotate');


                if ($(reserveInternBlock[i]).css('display') === 'none') {
                    $(reserveInternBlock[i]).show();
                } else {
                    $(reserveInternBlock[i]).hide();
                }

                for (let j = 0; j < $(selectItem).length; j++) {
                    if (i !== j) {
                        $(reserveInternBlock[j]).hide();
                        $(selectImg[j]).removeClass('rotate');
                    }
                }
                let textSelectItem = $(textSelectItemMassive[i]);

                for (let j = 0; j < $(textSelectItemMassive[i]).length; j++) {
                    $(textSelectItem[j]).on('click', () => {
                        if (order.val() !== $(textSelectItem[j]).text()) {
                            order.val($(textSelectItem[j]).text());
                            order.addClass('color-green');
                        }
                    });
                }
            });
        }
    });

    order.on('keypress', () => {
        if ($('#order.color-green')) {
            order.removeClass('color-green');
        }
    });

    let reserveError = $('.reserve-error');
    let count = $('#count');
    let name = $('#name');
    let phone = $('#phone');
    let massiveError = [order, count, name, phone];

    let carouselContainerMassive = [
        $('#white1'),$('#white2'),$('#white3'),$('#black1'),$('#black2'),
        $('#black3'),$('#black4'),$('#black5'),$('#black6'),$('#green1'),
        $('#green2'),$('#green3'),$('#green4'),$('#green5'),$('#mixes1'),
        $('#mixes2'),$('#mixes3'),$('#mixes4'),$('#mixes5'),$('#mixes6'),
        $('#oolong1'),$('#oolong2'),$('#oolong3')
    ]

    let content = $('.open-modal');

    function carouselContainerBtnClick(i) {
        $(carouselContainerMassive[i]).on('click', () => {
            let orderNewValue = $(carouselContainerMassive[i]).attr('data-value');
            order.val(orderNewValue);
            order.addClass('color-green');
        });
    }

    for (let i = 0; i < carouselContainerMassive.length; i++) {
        carouselContainerBtnClick(i);
    }

    $('.product-content-submit').click(() => {
        $('#reservation-container').css('display', 'grid');
        reserveError.hide();
        for (let i = 0; i < reserveError.length; i++) {
            $(massiveError[i]).removeClass('border-error');
        }
    });

    $('#reservation-cancel-close, #reservation-container').click((e) => {
        if (e.target.id === 'reservation-container' || e.target.id === 'reservation-cancel-close') {
            //Ajax content: mail.php (error), without PHP-SERVER
            $('#reservation-container').hide();
        }
    });

    $('#reserve-button > button').click(() => {

        function reserveErrorFunct(nameVal, int) {
            //nameVal это массив со всеми инпутами
            $(reserveError[int]).hide();
            nameVal.removeClass('border-error');
            if (!nameVal.val()) {
                $(reserveError[int]).show();
                nameVal.addClass('border-error');
            }
        }

        if (order.val() && count.val() && name.val() && phone.val()) {
            //Ajax content: mail.php (success), without PHP-SERVER
            $('#reservation-sent').show();
            $('#reservation').addClass('background-sent');
            $('#reservation-content').hide();

            $.ajax({
                type: 'post',
                url: 'mail.php',
                data: 'name=' + name.val() + '&order=' + order.val() + '$count=' + count.val() + '&phone=' + phone.val(),
                success: () => {
                    //$('#reservation-sent').show();
                    //$('#reservation').addClass('background-sent');
                    //$('#reservation-content').hide();
                },
                error: () => {
                    //$('#reservation-container').hide();
                    //alert('Ошибка бронирования. Свяжитесь с нами по номеру телефона.');
                }
            });
        } else {
            for (let i = 0; i < reserveError.length; i++) {
                reserveErrorFunct($(massiveError[i]), i);
            }
            reserveInternBlock.removeClass('border-error');
            showSelectBlock.removeClass('border-error');
            if (!order.val()) {
                showSelectBlock.addClass('border-error');
                reserveInternBlock.addClass('border-error');
            }
        }
    });

    let sharesInput = $('.shares-input-block .shares-input');
    let textError = $('.text-error');

    $('.shares-button').on('click', () => {
        sharesInput.removeClass('border-discount-error');
        sharesInput.removeClass('shares-red-input');
        textError.hide();

        if (sharesInput.val()) {
            //Ajax content: discountMail.php (success), without PHP-SERVER
            $('#shares-form').hide();
            $('#shares-true-discount').css('display', 'flex');

            $.ajax({
                type: "POST",
                url: "discountMail.php",
                data: 'discount=' + sharesInput.val(),
                success: () => {
                    //$('#shares-form').hide();
                    //$('#shares-true-discount').css('display', 'flex');
                }
            });
        } else {
            sharesInput.addClass('border-error');
            textError.show();
            // sharesInput.addClass('shares-red-input');
        }
    });

    new WOW({
        animateClass: 'animate__animated'
    }).init();

    let textLeftContainer = $('#properties-show-text-container .text-left-container');
    let textRightContainer = $('#properties-show-text-container .text-right-container');
    let animationCircleMax = $('.animation-circle-max');
    let circleMinLayer = $('.layer');

    let massivePropertyCircle768 = [
        $('#property1'),
        $('#property2'),
        $('#property3'),
        $('#property4'),
        $('#property5'),
        $('#property6')
    ];
    let massivePropertyText768 = [
        $(textLeftContainer[0]),
        $(textLeftContainer[1]),
        $(textLeftContainer[2]),
        $(textRightContainer[0]),
        $(textRightContainer[1]),
        $(textRightContainer[2])
    ];

    let propertiesShowTextContainer = $('#properties-show-text-container');
    let maxlengthProperties = textLeftContainer.length + textRightContainer.length;
    propertiesShowTextContainer.hide();

    function showHideProperty(int) {
        $(massivePropertyCircle768[int]).on('click', () => {
            $('#property-center img').hide();
            $('#property-center').hide();
            propertiesShowTextContainer.css('display', 'flex');
            $(massivePropertyText768[int]).show();

            for (let j = 0; j < maxlengthProperties; j++) {
                if (int !== j) {
                    $(massivePropertyText768[j]).hide();
                }
            }
        });
    }

    function showHideAnimationClick(int) {
        $(massivePropertyCircle768[int]).on('click', () => {
            $(animationCircleMax[int]).show();
            $(circleMinLayer[int]).show();
            for (let j = 0; j < animationCircleMax.length; j++) {
                if (int !== j) {
                    $(animationCircleMax[j]).hide();
                    $(circleMinLayer[j]).hide();
                }
            }
        });
    }

    $(animationCircleMax[0]).show();
    $(circleMinLayer[0]).show();

    for (let i = 0; i < maxlengthProperties; i++) {
        showHideProperty(i);
        showHideAnimationClick(i);
    }

    //Cover image, start tea video

    let collectPhotoVideo = $('#collect-photo-video');
    let collectVideoIframe = $('#collect-video iframe');

    collectPhotoVideo.on('click', () => {
        //Cover Image
        collectPhotoVideo.hide();
        $('.rightbot-image .collect-circle img').hide();

        //Start Youtube-Video
        console.log(collectVideoIframe[0].src); //url video
        collectVideoIframe[0].src += "?autoplay=1";//autoplay video
    });

    //left_menu open/close
    let leftMenu = $('.left_menu');
    let opacity_fon = $('.opacity_fon');
    let leftMenuOpen = $('.left_menu__open');

    leftMenuOpen.on('click',() => {
        leftMenuOpen.addClass('active');
        leftMenu.addClass('active');
        opacity_fon.addClass('active');
    })

    $('#js_of, #js_lmc').on('click',(e) => {
        if (e.target.id === 'js_of' || e.target.id === 'js_lmc') {
            leftMenuOpen.removeClass('active');
            leftMenu.removeClass('active');
            opacity_fon.removeClass('active');
        }
    })

    //menu-adaptive burger -767

    // document.getElementById('burger').onclick = function () {
    //     document.getElementById('menu-items').classList.add('open');
    // };
    // document.querySelectorAll('#menu-items > *').forEach((item) => {
    //     item.onclick = () => {
    //         document.getElementById('menu-items').classList.remove('open');
    //     }
    // });

    let menuItem = $('#menu-items');
    $('#burger').on('click',() => {
        menuItem.addClass('open');
    })

    $('#menu-close, #menu-items').on('click',(e) => {
        if (e.target.id === 'menu-close' || e.target.id === 'menu-items' || e.target.className === 'menu-item') {
            menuItem.removeClass('open');
        }
    })

    //Scroll top effect

    const scrollPercent = document.getElementById('scroll-percent');

    function returnScrollPercent(ScrollTopPx) {
        let bodyHeight = document.body.offsetHeight;
        let windowHeight = window.innerHeight;

        //scrollPresent / (marimeBody - marimeWindow) * 100
        let resultPercent = ScrollTopPx / (bodyHeight - windowHeight) * 100;
        return Math.round(resultPercent);
    }

    let ScrollTopPx = window.scrollY;
    scrollPercent.style.width = returnScrollPercent(ScrollTopPx) + '%';

    window.addEventListener('scroll',() => {
        let ScrollTopPx = window.scrollY;
        scrollPercent.style.width = returnScrollPercent(ScrollTopPx) + '%';
    });

});