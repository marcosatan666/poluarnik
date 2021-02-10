(function() {
    "use strict";
    window.catFilter = function(params) {};

    window.catFilter.prototype = {
        sendRequest: function(params) {
            console.log(params);

            $.ajax({
                url: "/vagon-doma/",
                type: "POST",
                data: params,
                error: function(data) {
                    console.log(data);
                },
                success: function(data) {
                    $(".catalog main").html(data);
                    //scrollToElement('#s05');
                },
            });
        },
        getChecks: function() {
            var _propsFilter = [];
            $("[name=filter]").each(function(i, e) {
                if ($(e).prop("checked") === true) {
                    var thisID = $(e).attr("data-id");
                    _propsFilter.push(thisID);
                }
            });

            console.log(_propsFilter);

            return _propsFilter.join(",");
        },
    };
})();

var filter = new catFilter();

document.addEventListener("DOMContentLoaded", function() {
    var section_id = $(".j-filter-section.active").attr("data-section-id"),
        curpage = 1;

    $("body").on("click", "[name=filter]", function(e) {
        e.preventDefault();
        filter.sendRequest({
            section_id: section_id,
            start_from: curpage,
            filter: filter.getChecks(),
        });
    });
    $("body").on("click", "a[data-section-id]", function(e) {
        e.preventDefault();
        $("a[data-section-id]").removeClass("active");
        $(this).addClass("active");
        filter.sendRequest({
            section_id: $(this).attr("data-section-id"),
            start_from: curpage,
            filter: filter.getChecks(),
        });
    });

    $("body").on("click", "button[data-next]", function(e) {
        e.preventDefault();
        var nextPage = $(this).attr("data-next");

        //alert(nextPage);

        filter.sendRequest({
            section_id: section_id,
            start_from: nextPage,
            filter: filter.getChecks(),
        });

        //alert(nextPage);
    });
    // $(".j-numerator").next().on('click', function () {

    //     filter.sendRequest({
    //         section_id: section_id,
    //         start_from: curpage,
    //         filter: filter.getChecks()
    //     })
    // })

    // $("a[data-section-id]").on('click', function (e) {
    //     e.preventDefault();

    //     filter.sendRequest({
    //         section_id: section_id,
    //         start_from: curpage,
    //         filter: filter.getChecks()
    //     })
    // })

    // $("[name=filter]").on('click', function (e) {
    //     e.preventDefault();

    //     filter.sendRequest({
    //         section_id: section_id,
    //         start_from: curpage,
    //         filter: filter.getChecks()
    //     })
    // })


    $(window).on('click', '.j-show-card', function(){


      alert("is popup");


    })

});