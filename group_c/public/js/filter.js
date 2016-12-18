$(function () {
    $("#slider-range").slider({
        range: true,
        min: 2,
        max: 35,
        values: [2, 35],
        slide: function (event, ui) {
            $("#amount").html("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
            $("#amount1").val(ui.values[ 0 ]);
            $("#amount2").val(ui.values[ 1 ]);
        }
    });
    $("#amount").html("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
});