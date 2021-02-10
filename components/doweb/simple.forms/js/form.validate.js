/*forms*/
formValidateInit();
function formValidateInit() {
  $(document).ready(function () {
    var validateParams = {
      ignore: [],
      submitHandler: function (form) {
        $.ajax({
          url: "/local/components/doweb/simple.forms/ajax/send.php",
          type: "post",
          dataType: "json",
          data: $(form).serialize() + "&action=send",
          error: function (data) {
            console.log(data);
          },
          success: function (data) {
            $.fancybox.close();
            $.fancybox.open({
              src: $(data.message).css("display", "inline-block"),
              type: "inline",
              touch: true,
            });
            if (data.success === true) {
              $(form)[0].reset();
            }
          },
        });
      },
      errorPlacement: function () {},
      highlight: function (element, errorClass, validClass) {
        var _element = $(element);
        var container;
        if (_element.is("textarea")) {
          _element.addClass("error");
        } else if (_element.attr("type") === "checkbox") {
          _element.parents(".checkbox").addClass("error");
        } else if (_element.is("select")) {
          _element.next(".select2").addClass("error");
        } else {
          _element.addClass("error");
        }
      },
      unhighlight: function (element, errorClass, validClass) {
        var _element = $(element);
        var container;
        if (_element.is("textarea")) {
          _element.removeClass("error");
        } else if (_element.attr("type") === "checkbox") {
          _element.parents(".checkbox").removeClass("error");
        } else if (_element.is("select")) {
          _element.next(".select2").removeClass("error");
        } else {
          _element.removeClass("error");
        }
      },
      errorElement: "span",
      focusInvalid: false,
    };

    $("form").each(function () {
      $(this).validate(validateParams);
    });

    /*Ajax forms*/
    $( document ).ajaxComplete(function() {
    
        $('#formAjax').validate(validateParams);
    
    
    });
    
  });
}



