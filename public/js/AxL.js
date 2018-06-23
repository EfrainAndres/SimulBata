function sumar() {

  var total = 0;

  $(".monto").each(function() {

    if (isNaN(parseFloat($(this).val()))) {

      total += 0;

    } else {

      m1 = document.getElementById("txt_campo_1").value;
      m2 = document.getElementById("txt_campo_2").value;
      r = m1*m2;

    }

  });

  //alert(total);
  document.getElementById('spTotal').innerHTML = r;

}