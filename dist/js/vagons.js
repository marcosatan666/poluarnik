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
                    url: path,
                    type: 'POST',
                    data: "import_elements=" + settings.import_data,
                    dataType: 'json',
                    success: settings.callBack
                });
                console.log(_data);
                return false;
            },
            testCallback: function(data, status, jqXHR) {
                console.log(data);
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


var vagonSlider = $("#j-vagon_head_slider");

vagonSlider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    fade: true,
    autoplaySpeed: 600,

});



vagonSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

    $('.slide-title').removeClass("active");
    $('.slide-title:eq(' + currentSlide + ')').addClass("active");



});

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



Array.prototype.slice.call(document.querySelectorAll('#s02 .block:nth-of-type(1) .header, #s02 .block:nth-of-type(2) .header, #s02 .block:nth-of-type(3) .header')).forEach(function(a) { // СЃРµР»РµРєС‚РѕСЂС‹ Р±Р»РѕРєРѕРІ, РєРѕС‚РѕСЂС‹Рµ Р±СѓРґСѓС‚ С„РёРєСЃРёСЂРѕРІР°С‚СЊСЃСЏ. РњРѕР¶РµС‚ Р±С‹С‚СЊ РєР°Рє РѕРґРёРЅ Р±Р»РѕРє, С‚Р°Рє РґРІР° Рё Р±РѕР»РµРµ
    var b = null,
        P = 0;

    window.addEventListener('scroll', Ascroll, false);
    document.body.addEventListener('scroll', Ascroll, false);

    function Ascroll() {

        if ($(window).outerWidth() > 812) {
            if (b == null) {
                var Sa = getComputedStyle(a, ''),
                    s = '';
                // for (var i = 0; i < Sa.length; i++) {
                //     if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                //         s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
                //     }
                // }
                b = document.createElement('div');
                b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                a.insertBefore(b, a.firstChild);
                var l = a.childNodes.length;
                for (var i = 1; i < l; i++) {
                    b.appendChild(a.childNodes[1]);
                }
                //a.style.height = b.getBoundingClientRect().height + 'px';
                //a.style.padding = '0';
                //a.style.border = '0';
            }
            var Ra = a.getBoundingClientRect(),
                R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('#s02 .block:nth-of-type(1) .footer').getBoundingClientRect().top - 100);
            if ((Ra.top - P) <= 0) {
                if ((Ra.top - P) <= R) {
                    b.className = 'stop';
                    b.style.top = -R + 'px';
                    b.style.left = 0;
                } else {
                    b.className = 'sticky';
                    b.style.top = P + 'px';
                    b.style.left = Ra.left + 'px';
                }
            } else {
                b.className = '';
                b.style.top = '';
                b.style.left = '';
            }
            window.addEventListener('resize', function() {
                a.children[0].style.width = getComputedStyle(a, '').width;
                b.style.left = (b.className == 'sticky' ? (a.getBoundingClientRect().left + 'px') : '0');
            }, false);
        }
    }
})