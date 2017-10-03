$(function () {
    $.nette.init();
});
$(document).ready(function () {

    $('.star').on('click', function () {
        $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {
        $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function () {
        var $target = $(this).data('target');
        if ($target != 'all') {
            $('.table tr').css('display', 'none');
            $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
        } else {
            $('.table tr').css('display', 'none').fadeIn('slow');
        }
    });

});


$(document).ready(function () {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup(function () {
        var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each(function (i, val) {

            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if (inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Hledaný výraz: "'
                        + $(that).val()
                        + '"</strong></td></tr>');
            } else
            {
                $('.search-query-sf').remove();
            }

            if (rowText.indexOf(inputText) == -1)
            {
                //hide rows
                tableRowsClass.eq(i).hide();

            } else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if (tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">Nenalezeny žádné výsledky</td></tr>');
        }
    });

    $("a[data-confirm]").click(function (e) {
        if (!confirm($(this).data('confirm')))
            e.preventDefault();
    });


    $(".activation-product").on("change", function (event) {
        event.preventDefault();
        var id = $(this).attr('rel');
        var status = 0;
        var link = $(this).data("href");

        if (this.checked) {
            status = 1;
        } else {
            status = 0;
        }
        $.nette.ajax({
            type: "GET",
            url: link,
            data: {
                'id': id,
                'status': status
            }
        });
    });

});


tinymce.init({
    selector: "textarea[name=dlouhy_popis]",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    entities: "160,nbsp",
    entity_encoding: "named",
    entity_encoding: "raw"
});

tinymce.init({
    selector: "textarea[name=content]",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    entities: "160,nbsp",
    entity_encoding: "named",
    entity_encoding: "raw"
});

