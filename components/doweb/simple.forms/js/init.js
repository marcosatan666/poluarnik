/**/
jQuery(function($) {
    //$("#date").mask("99/99/9999");
    $("[type=tel]").mask("+7 (999) 999-9999");
    //$("#tin").mask("99-9999999");
    //$("#ssn").mask("999-99-9999");
});

$(document).on('click', ".j-show-modal", function() {
    var formId = $(this).attr('data-form');
    $.fancybox.open({
        src: "/local/components/doweb/simple.forms/ajax/show.php",
        type: 'ajax',
        hideScrollbar: true,
        ajax: {
            settings: {
                type: "POST",
                data: {
                    action: "show",
                    form_id: "tenders",
                    form_template: "tenders",
                    btn_name: "Пригласить",
                    fancybox: true

                }
            }
        },
        touch: true
    });
})