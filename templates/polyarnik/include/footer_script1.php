  <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/index.min.js?rev=@@hash"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=d6b60b93-65c1-4f52-89f6-61ff8865d33c" type="text/javascript"></script>
    <script type="text/javascript">
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
        // ... more custom settings?
    });

    function setSelectionRange(input, selectionStart, selectionEnd) {
        if (input.setSelectionRange) {
            input.focus();
            input.setSelectionRange(selectionStart, selectionEnd);
        } else if (input.createTextRange) {
            var range = input.createTextRange();
            range.collapse(true);
            range.moveEnd('character', selectionEnd);
            range.moveStart('character', selectionStart);
            range.select();
        }
    }

    function setCaretToPos(input, pos) {
        setSelectionRange(input, pos, pos);
    }


    $('input[type="tel"]').click(function(e) {
        setCaretToPos($(this)[0], 3);
    });



    jQuery(function($) {
        $.mask.definitions['q'] = '[1, 2, 3, 4, 5, 6, 9]';
        $('input[type="tel"]').mask("+7(q99) 999-99-99");
    });

    $('.showMoreGalerry').on('click', showMoreGalerry);
    $('.burger, menu .close, menu a').on('click', toggleMobileMenu);
    $('aside a').on('click', function() {
        $('aside a').removeClass('active');
        $(this).addClass('active');
    });

    function showMoreGalerry() {
        $hidden_images_counter = 0;
        $hidden_images = $('#s09').find('a[data-fancybox].hidden');

        if ($($hidden_images).length >= 4) {

            $.each($hidden_images, function(index, val) {
                ++$hidden_images_counter;

                if ($hidden_images_counter <= 4) {
                    $($hidden_images[index]).slideDown();
                    $($hidden_images[index]).removeClass('hidden');

                    if ($('#s09').find('a[data-fancybox].hidden').length <= 4) {
                        $('.showMoreGalerry').hide() // убираем кнопку
                    } // if
                } // if
            }); // each
        } // if
    }


    window.onload = function() {
        document.getElementById('popup-bg').onclick = function(e) { if (e.target != this) { return true; } popup(-1); }
    }

    function popup(nm, e) {
        popupElm = document.getElementById("popup-bg");
        if (nm == -1) {
            popupElm.classList.remove('visible');
            document.querySelector('body').style.overflow = 'auto';
            document.querySelector('body').style.overflowX = 'hidden';
        } else {
            elm = popupElm.getElementsByClassName('popup');
            if (typeof nm != 'undefined')
                for (var i = elm.length - 1; i >= 0; i--) {
                    if (elm[i].id == 'popup' + nm) {
                        elm[i].classList.add('visible');
                        popupElm.classList.add('visible');
                        document.querySelector('body').style.overflow = 'hidden';

                        if (nm == 6 && typeof e !== 'undefined') {
                            $(elm).find('[name="comment"]').val($(e).parents('.good').find('.title').text())
                        }
                    } else {
                        elm[i].classList.remove('visible');
                    }
                }
            else {
                popupElm.classList.add('visible');
                document.querySelector('body').style.overflow = 'hidden';
            }
        }
    }

    function toggleMobileMenu() {
        $('menu').toggleClass('active');
        $('body').toggleClass('open_menu')
    }



    if (document.documentElement.clientWidth < 640) {
        $('#s09 .gallery a').removeClass('hidden');

        var $status1 = $('#s03 .pagingInfo');
        var $slickElement1 = $('#s03 .flex .col.mob ul');

        $slickElement1.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status1.html("<span>" + i + "</span>" + '/' + slick.slideCount);
        });

        $slickElement1.slick({
            infinite: true,
            adaptiveHeight: true,
        });

        var $status4 = $('#s05 .pagingInfo');
        var $slickElement4 = $('#s05 .catalog');

        $slickElement4.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status4.html("<span>" + i + "</span>" + '/' + slick.slideCount);
        });

        $slickElement4.slick({
            infinite: true,
            adaptiveHeight: true,
        });


        var $status5 = $('#s07 .pagingInfo');
        var $slickElement5 = $('#s07 .white_block_container');

        $slickElement5.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status5.html("<span>" + i + "</span>" + '/' + slick.slideCount);
        });

        $slickElement5.slick({
            infinite: true,
            rows: 4,
        });

        //setTimeout(function(){
        //  $('#s07 .slick-list').css('overflow', 'visible')
        // },1000)



        // gallery
        var $status6 = $('#s09 .pagingInfo');
        var $slickElement6 = $('#s09 .gallery');

        $slickElement6.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status6.html("<span>" + i + "</span>" + '/' + slick.slideCount);
        });

        $slickElement6.slick({
            infinite: true,
        });


    } // endif


    var $status2 = $('#s010 .pagingInfo');
    var $slickElement3 = $('.serts');

    $slickElement3.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.html("<span>" + i + "</span>" + '/' + slick.slideCount);
    });

    $slickElement3.slick({
        infinite: true,
        slidesToShow: 4,

        responsive: [{

            breakpoint: 1040,
            settings: {
                slidesToShow: 3,
            }

        }, {

            breakpoint: 980,
            settings: {
                slidesToShow: 2,
                //dots: true
            }

        }, {

            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                //dots: true
            }

        }, {

            breakpoint: 300,
            settings: "unslick" // destroys slick

        }]
    });


    $(function() {
        var wrapper = $(".file_upload"),
            inp = wrapper.find("input"),
            btn = wrapper.find(".button"),
            lbl = wrapper.find("mark");

        inp.focus(function() {
            wrapper.addClass("focus");
        }).blur(function() {
            wrapper.removeClass("focus");
        });

        var file_api = (window.File && window.FileReader && window.FileList && window.Blob) ? true : false;

        inp.change(function() {
            var file_name;
            if (file_api && inp[0].files[0])
                file_name = inp[0].files[0].name;
            else
                file_name = inp.val().replace("C:\\fakepath\\", '');

            if (!file_name.length)
                return;

            if (lbl.is(":visible")) {
                lbl.text(file_name);;
            } else
                btn.text(file_name);
        }).change();

    });
    $(window).resize(function() {
        $(".file_upload input").triggerHandler("change");
    });

    $(document).ready(function() {

        $("form").submit(function() {
            $this = $(this);
            $(this).find('[name="AntiSpam"]').val('AntiSpam');
            let action = $($this).attr('action');

            $.ajax({
                type: "POST",
                url: action,
                data: $($this).serialize()
            }).done(function() {

                if ($($this).hasClass('popup6')) {
                    popup(4)
                } else {
                    popup(2)
                }
            });

            return false;
        });
    });


    $("a.scrollto").click(function() {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        $("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 500);
        return false;
    });

    if (document.documentElement.clientWidth < 1000) {
        // var $status7 = $('#catalog .pagingInfo');
        // var $slickElemen7 = $('.catalog');

        // $slickElemen7.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
        //     var i = (currentSlide ? currentSlide : 0) + 1;
        //     $status7.html("<span>" + i + "</span>" + '/' + slick.slideCount);
        // });

        // $slickElemen7.slick({
        //      infinite: true,
        // });
    }


    ymaps.ready(function() {
        var myMap = new ymaps.Map('map', {
                center: [52.274144, 104.217113],
                zoom: 15
            }, {
                searchControlProvider: 'yandex#search'
            }),


            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: '',
                balloonContent: ''
            }, {
                // Опции.
                iconLayout: 'default#image',
                iconImageHref: '<?=SITE_TEMPLATE_PATH?>/assets/img/marker.png',
                iconImageSize: [67, 76],
                iconImageOffset: [-33, -67]
            });

        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable('scrollZoom');
        myMap.controls.remove('trafficControl').remove('rulerControl');
        myMap.controls.remove('searchControl');
        if (document.documentElement.clientWidth < 500) {
            myMap.behaviors.disable('drag');
            myMap.behaviors.enable('multiTouch');
        }
    });
    </script>

          <script src="<?=SITE_TEMPLATE_PATH?>/assets/<?=CURRENT_DIR?>js/script.js?rev=@@hash"></script>     