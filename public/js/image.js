$('#fx').keyup(function () {
    var value=$('#fx').val();
    if (value >= 100) {
        $("#img100").show();
        $("#img200").hide();
    }
    
    if (value >= 500){
        $("#img200").show();
        $("#img100").hide();
    }

});