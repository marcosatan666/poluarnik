<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;
?>

<?include('functions.php');?>

    
                    <div class="filters row d-none d-lg-flex">
                       
                        <div class="block">
                            <p class="filter_title mb-0">!!!Количество человек</p>
                            <div class="checkboxes">
                            
                            <? foreach ($arResult['FILTER_PROPS']['people'] as $key => $value) {
                                echo getInputFilterChunk ($value);
                            }?>

                            </div>  
                        </div>
                        <div class="block">
                            <p class="filter_title mb-0">Длина</p>
                            <div class="checkboxes">
                            <? foreach ($arResult['FILTER_PROPS']['width'] as $key => $value) {
                                 echo getInputFilterChunk ($value);
                            }?>
                            </div>
                        </div>
                    </div> <!-- /.filters -->
                    
                    <div class="row goods">

                    <? foreach ($arResult['ITEMS'] as $item)
                        {   
                            getPropValue($item, 'RAZMER');?>

                            <div class="card col-md-4 loaded">
                                <div class="card-body shadow">
                                    <div class="title">
                                        <?=$item['NAME']?>
                                        <small><?=$item['PREVIEW_TEXT']?></small>
                                    </div>
                                    <p class="size"><strong>Размер</strong><?=$item['RAZMER']['VALUE']?></p>
                                    <div class="img-wrap"><img src="<?=$item['PRODUCT_PREVIEW']['SRC']?>" class="img-fluid" /></div>
                                    <div class="text-center">

                                    <input 
                                    type="button" 
                                    class="btn mb-3 btn-orange j-show-card col-12" 
                                    value="Посмотреть стоимость" 
                                    data-item-id="<?=$item['ID']?>"
                                    >
                                        <!-- <input type="button" class="btn mb-3 btn-orange" value="Посмотреть стоимость"> -->
                                    </div>
                                </div>
                            </div>

                      <?}?>
                    </div>
                    
                    <?$c_pages =$arResult['COUNT_PAGES']?>
                   
                    <div class="d-none d-lg-flex justify-content-center align-items-center numer-wrap">
                   
                        <?php if ($c_pages > 1) : ?>
                            <button class="arrow-l" data-for="plSlider" data-to="slickPrev" data-prev='<?=$arResult['PREV_PAGE']?>'>prev</button>
                        <?php endif ?>
                        
                            <div class="j-numerator my-4 text-center" data-slider="plSlider">
                            <span class="c_orange j-c_num"><?=$arResult['CURRENT_PAGE']?></span><i class="px-1">/</i><span class="j-c_count"><?=$c_pages?></span>
                            </div>
                        <?php if ($c_pages > 1) : ?>
                            <button class="arrow-r" data-for="plSlider" data-to="slickNext" data-next='<?=$arResult['NEXT_PAGE']?>'>next</button>
                            <!-- <div class="j-show_by"><span>Показывать по [6][12][24] все</span></div> -->
                        <?php endif ?>

                    </div>
            



<style>
    
    .numer-wrap {
        position: relative;
        z-index: 99;
    }

    /* .goods {
        -webkit-animation-name: slideInRight;
        animation-name: slideInRight;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes slideInRight {
        0% {
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            visibility: visible;
        }
        100% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        0% {
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            visibility: visible;
        }
        100% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    } */

    .slide-title{
        z-index: 99;
    }


</style>

                    
<script>
    document.addEventListener("DOMContentLoaded", function() {
    (function($) {
        var cache = [];
        jQuery.extend({
            shopRequest: function(settings) {
                if (typeof settings.callBack == 'undefined') {
                    alert('Callback function is undefined');
                }
                var path = settings.path,
                    _data = (typeof settings.data != 'undefined') ? settings.data : {};
                _data['_'] = Math.round(new Date().getTime());
                jQuery.ajax({
                    context: settings.context,
                    url: settings.path,
                    type: 'POST',
                    data: "action=show_ajax&fast_view=" + settings.el_id,
                    dataType: 'json',
                    success: settings.callBack
                });
                console.log(_data);
                return false;
            },
            testCallback: function(data, status, jqXHR) {

                $.fancybox.open(data.html);

            },
        });
    })(jQuery);


    var goodsList = [];
    $('.good').each(function(i, e) {
        //console.log(i);
        var arrGood = [];
        var good_name = $(this).find('.title').text();
        var good_size = $(this).find('.size').text(),
            good_siza_value = good_size.replace('Размер ', ''),
            good_section = $(this).parent().attr('data-post');
        var imageSrc = $(this).find('img').attr('data-src');
        var strTags = $(this).parent().attr('data-tag');
        var propsList = [];
        arrGood['name'] = good_name;
        $(this).find('.description_table tbody tr').each(function(i, e) {
            var propName = $(this).find('td:nth-child(1)').text();
            var proValue = $(this).find('td:nth-child(2)').html();
            propsList.push([propName, proValue, good_name]);
        })
        var scroll_list = $(this).find('.scroll_list li');
        var arrScrollList = [];
        scroll_list.each(function(i, e) {
            var thisText = $(this).text();
            arrScrollList.push(thisText);
        })
        propsList.push(['Размер', good_siza_value, good_name]);
        var arrTags = strTags.split(',');
        arrTags.forEach(function(item, i, arrTags) {
            propsList.push([item, 'Y', good_name]);
        });
        //console.log(propsList);
        //propsList.push(['tags', good_siza_value, good_name]);
        // arrGood['props'] = propsList;
        // //arrGood['scroll_list'] = scroll_list;
        // arrGood['tags'] = arrTags;
        // goodsList.push(arrGood);
        var json = {};
        json.name = good_name;
        json.section = good_section;
        //json.size = good_siza_value;
        json.imageSrc = imageSrc;
        json.tags = arrTags;
        json.props = propsList;
        json.scroll_list = JSON.stringify(arrScrollList);
        var myJsonString = JSON.stringify(json);
        if (i >= 60 && i < 80) {
            console.log(json);
            goodsList.push(myJsonString);
        }
    });
});


// var vagonSlider = $("#j-vagon_head_slider");

// vagonSlider.slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     autoplay: false,
//     arrows: false,
//     fade: true,
//     autoplaySpeed: 600,

// });

// $(".slide-title").on('click', function () {
//     $('.slide-title').removeClass("active");
//     let i =$(this).attr('data-slide');
//     $(this).addClass("active");

//     vagonSlider.slick('slickGoTo', i);
    
// })

$(".block ul").mouseenter(function() {
    $(".block ul").removeClass('active');
    $('.hide').fadeOut(0);
    var image_id = $(this).attr('data-id');

    $('.plus_block').removeClass('active');
    $('[data-id=' + image_id + ']').addClass('active');




    var el = $(this);
    el.addClass('active');
    el.find('.hide').fadeIn(300);

})



// Array.prototype.slice.call(document.querySelectorAll('#s02 .block:nth-of-type(1) .header, #s02 .block:nth-of-type(2) .header, #s02 .block:nth-of-type(3) .header')).forEach(function(a) { // СЃРµР»РµРєС‚РѕСЂС‹ Р±Р»РѕРєРѕРІ, РєРѕС‚РѕСЂС‹Рµ Р±СѓРґСѓС‚ С„РёРєСЃРёСЂРѕРІР°С‚СЊСЃСЏ. РњРѕР¶РµС‚ Р±С‹С‚СЊ РєР°Рє РѕРґРёРЅ Р±Р»РѕРє, С‚Р°Рє РґРІР° Рё Р±РѕР»РµРµ
//     var b = null,
//         P = 0;

//     window.addEventListener('scroll', Ascroll, false);
//     document.body.addEventListener('scroll', Ascroll, false);

//     function Ascroll() {

//         if ($(window).outerWidth() > 812) {
//             if (b == null) {
//                 var Sa = getComputedStyle(a, ''),
//                     s = '';
//                 // for (var i = 0; i < Sa.length; i++) {
//                 //     if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
//                 //         s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
//                 //     }
//                 // }
//                 b = document.createElement('div');
//                 b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
//                 a.insertBefore(b, a.firstChild);
//                 var l = a.childNodes.length;
//                 for (var i = 1; i < l; i++) {
//                     b.appendChild(a.childNodes[1]);
//                 }
//                 //a.style.height = b.getBoundingClientRect().height + 'px';
//                 //a.style.padding = '0';
//                 //a.style.border = '0';
//             }
//             var Ra = a.getBoundingClientRect(),
//                 R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('#s02 .block:nth-of-type(1) .footer').getBoundingClientRect().top - 100);
//             if ((Ra.top - P) <= 0) {
//                 if ((Ra.top - P) <= R) {
//                     b.className = 'stop';
//                     b.style.top = -R + 'px';
//                     b.style.left = 0;
//                 } else {
//                     b.className = 'sticky';
//                     b.style.top = P + 'px';
//                     b.style.left = Ra.left + 'px';
//                 }
//             } else {
//                 b.className = '';
//                 b.style.top = '';
//                 b.style.left = '';
//             }
//             window.addEventListener('resize', function() {
//                 a.children[0].style.width = getComputedStyle(a, '').width;
//                 b.style.left = (b.className == 'sticky' ? (a.getBoundingClientRect().left + 'px') : '0');
//             }, false);
//         }
//     }
// })

$('body').on('click', '.j-show-card', function (){
    
    var thisID = $(this).attr('data-item-id');

    $.shopRequest({
        context: $(window),
        path: "/ajax/els.php",
        callBack: $.testCallback,
        el_id:thisID
    });

   
});


console.log('here');

</script>