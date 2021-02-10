console.log('pavs');
document.addEventListener("DOMContentLoaded", function () {
    if (md.mobile()) {
        $("#moduli_advantages .fade-box").each(function (i, e) {
            var eHtml = $(e);
            $("#mobAdvSlider").append(eHtml);
        })
        numSlider('mobAdvSlider');
    }
})