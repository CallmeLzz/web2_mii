
$(function() {
    $('#safety').click(function () {
        $('.panel .active').removeClass('active');
        $(this).addClass('active');
        $('#collapse2').removeClass('in1');
        $('#collapse3').removeClass('in1');
          if ($('#collapse1').hasClass('in'))
        {
            $('#collapse1').addClass('in1');
        }
        document.getElementById('op-minus-1').style.display = 'block';
        document.getElementById('op-plus-1').style.display = 'none';
        document.getElementById('op-minus-2').style.display = 'none';
        document.getElementById('op-plus-2').style.display = 'block';
        document.getElementById('op-minus-3').style.display = 'none';
        document.getElementById('op-plus-3').style.display = 'block';
    });
    $('#quality').click(function () {
        $('.panel .active').removeClass('active');
        $(this).addClass('active'); 
        $('#collapse1').removeClass('in1');
        $('#collapse3').removeClass('in1');
          if ($('#collapse2').hasClass('in'))
        {
            $('#collapse2').addClass('in1');
        }
        document.getElementById('op-minus-2').style.display = 'block';
        document.getElementById('op-plus-2').style.display = 'none';
        document.getElementById('op-minus-1').style.display = 'none';
        document.getElementById('op-plus-1').style.display = 'block';
        document.getElementById('op-minus-3').style.display = 'none';
        document.getElementById('op-plus-3').style.display = 'block';
    });
    $('#integrity').click(function () {
        $('.panel .active').removeClass('active');
        $(this).addClass('active');
        $('#collapse2').removeClass('in1');
        $('#collapse1').removeClass('in1');
          if ($('#collapse3').hasClass('in'))
        {
            $('#collapse3').addClass('in1');
        }
        document.getElementById('op-minus-3').style.display = 'block';
        document.getElementById('op-plus-3').style.display = 'none';
        document.getElementById('op-minus-1').style.display = 'none';
        document.getElementById('op-plus-1').style.display = 'block';
        document.getElementById('op-minus-2').style.display = 'none';
        document.getElementById('op-plus-2').style.display = 'block';
    });
});
