$(document).ready(function(){

    $('#inputGroupSelect01').on('change',function(){
        var selectValor = '#' + $(this).val();
        $('#pai').children('div').hide();
        $('#pai').children(selectValor).show();

    });

});