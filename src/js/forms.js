/*forms*/
$(document).ready(function() {
    var validateParams = {
        ignore: [],
        submitHandler: function(form) {
            return false;
            $.ajax({
                url: '/ajax/send.php',
                type: 'post',
                dataType: 'json',
                data: $(form).serialize(),
                error: function(data) {
                    console.log(data);
                },
                success: function(data) {
                    $.fancybox.close();
                    $.fancybox.open({
                        src: $(data.message).css('display', 'inline-block'),
                        type: 'inline',
                        touch: true
                    });
                    if (data.success === true) {
                        $(form)[0].reset();
                    }
                }
            });
        },
        errorPlacement: function() {},
        highlight: function(element, errorClass, validClass) {
            var _element = $(element);
            var container;
            if (_element.is('textarea')) {
                _element.parents('.texarea-wrap').addClass('error');
            } else if (_element.attr('type') === 'checkbox') {
                _element.parents('.checkbox').addClass('error');
            } else if (_element.is('select')) {
                _element.next('.select2').addClass('error');
            } else {
                _element.addClass('error')
            }
        },
        unhighlight: function(element, errorClass, validClass) {
            var _element = $(element);
            var container;
            if (_element.is('textarea')) {
                _element.parents('.texarea-wrap').removeClass('error');
            } else if (_element.attr('type') === 'checkbox') {
                _element.parents('.checkbox').removeClass('error');
            } else if (_element.is('select')) {
                _element.next('.select2').removeClass('error');
            } else {
                _element.removeClass('error')
            }
        },
        errorElement: 'span',
        focusInvalid: false
    }
    $('#CounsultForm').validate(validateParams);
});

/**/



// $(document).on('click', ".j-show-modal",function() {
//     var formId ="#"+$(this).attr('data-form');
//     console.log(formId);
//     $.fancybox.open({
//         src: $(formId),
//         type: 'inline',
//         touch: true
//     });
// })