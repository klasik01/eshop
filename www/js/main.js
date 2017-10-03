
$(document).ready(function () {
    $(".subMenuItem").click(function () {
        window.document.location = $(this).data("href");
    });



    $('.btn_filter').on('click', function () {
        var $target = $(this).data('target');
        var $typ = $(this).data('type');
        if ($target !== 'vsechny') {
            $('.polozka').css('display', 'none');
            $('.polozka[data-status="' + $target + '"]').fadeIn('slow');
            $('.polozka[data-typ="' + $typ + '"]').fadeIn('slow');
        } else {
            $('.polozka').css('display', 'none').fadeIn('slow');
        }
    });
});


