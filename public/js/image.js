$('#fx').keyup(function () {
    var value=$('#fx').val();
    if (value <= 20) {
        $("#img10").show();
        $("#img20").hide();
        $("#img50").hide();
        $("#img100").hide();
        $("#img200").hide();
        $("#img500").hide();
    }
    
    if (value >= 20){
        $("#img10").hide();
        $("#img20").show();
        $("#img50").hide();
        $("#img100").hide();
        $("#img200").hide();
        $("#img500").hide();
    }

    if (value >= 50){
        $("#img10").hide();
        $("#img20").hide();
        $("#img50").show();
        $("#img100").hide();
        $("#img200").hide();
        $("#img500").hide();
    }

    if (value >= 100){
        $("#img10").hide();
        $("#img20").hide();
        $("#img50").hide();
        $("#img100").show();
        $("#img200").hide();
        $("#img500").hide();
    }

    if (value >= 200){
        $("#img10").hide();
        $("#img20").hide();
        $("#img50").hide();
        $("#img100").hide();
        $("#img200").show();
        $("#img500").hide();
    }

    if (value >= 500){
        $("#img10").hide();
        $("#img20").hide();
        $("#img50").hide();
        $("#img100").hide();
        $("#img200").hide();
        $("#img500").show();
    }

});

$('#txt_campo_2').keyup(function () {
    var value1=$('#txt_campo_1').val(),
    value2=$('#txt_campo_2').val();

    r= value1*value2;

    if (r <= 20) {
        $("#img10-1").show();
        $("#img20-1").hide();
        $("#img50-1").hide();
        $("#img100-1").hide();
        $("#img200-1").hide();
        $("#img500-1").hide();
    }
    
    if (r >= 20){
        $("#img10-1").hide();
        $("#img20-1").show();
        $("#img50-1").hide();
        $("#img100-1").hide();
        $("#img200-1").hide();
        $("#img500-1").hide();
    }

    if (r >= 50){
        $("#img10-1").hide();
        $("#img20-1").hide();
        $("#img50-1").show();
        $("#img100-1").hide();
        $("#img200-1").hide();
        $("#img500-1").hide();
    }

    if (r >= 100){
        $("#img10-1").hide();
        $("#img20-1").hide();
        $("#img50-1").hide();
        $("#img100-1").show();
        $("#img200-1").hide();
        $("#img500-1").hide();
    }

    if (r >= 200){
        $("#img10-1").hide();
        $("#img20-1").hide();
        $("#img50-1").hide();
        $("#img100-1").hide();
        $("#img200-1").show();
        $("#img500-1").hide();
    }

    if (r >= 500){
        $("#img10-1").hide();
        $("#img20-1").hide();
        $("#img50-1").hide();
        $("#img100-1").hide();
        $("#img200-1").hide();
        $("#img500-1").show();
    }

});
$("#downlight_room").on('change',function(){
    var tipo = $('select[name="downlight_room"]').val();

    if (tipo == 100) {
        $("#imgCorredor").show();
        $("#imgVestidor").hide();
        $("#imgEscalera").hide();
        $("#imgBano").hide();
        $("#imgBodega").hide();
    }
    
    if (tipo == 150){
        $("#imgCorredor").hide();
        $("#imgVestidor").show();
        $("#imgEscalera").hide();
        $("#imgBano").hide();
        $("#imgBodega").hide();
    }

    if (tipo == 160){
        $("#imgCorredor").hide();
        $("#imgVestidor").hide();
        $("#imgEscalera").show();
        $("#imgBano").hide();
        $("#imgBodega").hide();
    }

    if (tipo == 250){
        $("#imgCorredor").hide();
        $("#imgVestidor").hide();
        $("#imgEscalera").hide();
        $("#imgBano").show();
        $("#imgBodega").hide();
    }

    if (tipo >= 400){
        $("#imgCorredor").hide();
        $("#imgVestidor").hide();
        $("#imgEscalera").hide();
        $("#imgBano").hide();
        $("#imgBodega").show();
    }

});