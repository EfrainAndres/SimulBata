var last_area;
	var last_width_length;
		// Format the given number to the given precision:
	function format_number (number, precision) {
		if (number > Math.pow(10, precision)) {
			return number.toFixed(0);
		} else if (number == 1) {
			return number;
		} else {
			return number.toPrecision(precision);
		}
	}
	
    // The calculate downlights function:
  function calculate_downlights () {
    var width = Number(document.downlight_calculator.downlight_width.value);
    var length = Number(document.downlight_calculator.downlight_length.value);
    var area = Number(document.downlight_calculator.downlight_area.value);
		
		if (area && !last_area) {
			if (width || length) {
				alert ("The width and length fields will be cleared.");
				document.downlight_calculator.downlight_width.value = '';
				document.downlight_calculator.downlight_length.value = '';
				width = 0;
				length = 0;
			}
		} else if ((width + length) && !last_width_length) {
			if (area) {
				alert ("The area field will be cleared.");
				document.downlight_calculator.downlight_area.value = '';
				area = 0;
			}
		}
			// Update the last known values:
		last_area = area;
		last_width_length = width + length;
			// Calculate the area:
		if (width && length) {
				// Calculate the area:
			area = width * length;
		} else if (!area) {
			return;
		}
			// Check the area:
    if (area < 1) {
      alert ("The Area value is invalid!");
    }
			// Get the product:
		var dl_lumens = Number(document.downlight_calculator.downlight_product.value);
			// Get the room requirements:
		var lux_required = Number(document.downlight_calculator.downlight_room.value);
			// Calculate the quantity and actual lux:
		var lux = 0;
		var quantity = Math.floor (lux_required * area / dl_lumens);
		do {
			quantity ++;
			lux = (dl_lumens * quantity / area);
		} while (lux < lux_required);
			// Show the results:
    document.getElementById("res_downlights").innerHTML = "Se requiere un mínimo de "+format_number(quantity,0)+" luces"+".<br><br>La iluminación promedio será de "+format_number(lux,0)+" Lux.";
  }
  
    // The calculate lumens function:
		// For more info on the formulas, see: http://www.compuphase.com/electronics/candela_lumen.htm
  function calculate_lumens () {
    var angle = Number(document.lumens_lux_calculator.angle.value);
		if (angle > 180) angle = NaN;
    if (isNaN(angle)) {
      alert ("The Beam Angle value is invalid! Make sure it is a valid number no greater than 180 degrees.");
    }
    var distance = Number(document.lumens_lux_calculator.distance.value);
    if (isNaN(distance)) {
      alert ("The Distance value is invalid!");
    }
    var lux = Number(document.lumens_lux_calculator.lux.value);
    if (isNaN(lux)) {
      alert ("The Lumens value is invalid!");
    }
		var lumens_value = lux * 2 * Math.PI * Math.pow(distance, 2) * (1 - Math.cos(angle/2 * Math.PI/180));
    document.lumens_lux_calculator.lumens.value = ""+format_number(lumens_value,4);
  }
	
    // The calculate lux function:
  function calculate_lux () {
    var angle = Number(document.lumens_lux_calculator.angle.value);
		if (angle > 180) angle = NaN;
    if (isNaN(angle)) {
      alert ("The Beam Angle value is invalid! Make sure it is a valid number no greater than 180 degrees.");
    }
    var distance = Number(document.lumens_lux_calculator.distance.value);
    if (isNaN(distance)) {
      alert ("The Distance value is invalid!");
    }
    var lumens = Number(document.lumens_lux_calculator.lumens.value);
    if (isNaN(lumens)) {
      alert ("The Lumens value is invalid!");
    }		
		var lux_value = lumens / (2 * Math.PI * Math.pow(distance, 2) * (1 - Math.cos(angle/2 * Math.PI/180)));
    document.lumens_lux_calculator.lux.value = ""+format_number(lux_value,4);
  }
	
    // The calculate spread function:
  function calculate_spread () {
    var angle = Number(document.spread_calculator.spread_angle.value);
		if (angle >= 180) angle = NaN;
    if (isNaN(angle)) {
      alert ("The Beam Angle value is invalid! Make sure it is a valid number less than 180 degrees.");
    }
    var distance = Number(document.spread_calculator.spread_distance.value);
    if (isNaN(distance)) {
      alert ("The Distance value is invalid!");
    }
		var spread_value = 2 * distance * Math.tan(angle/2 * Math.PI/180);
		var area_value = Math.PI * Math.pow(spread_value/2,2);
    document.getElementById("res_spread").innerHTML  = "The resulting light spread is "+format_number(spread_value,3)+"m.<br>The coverage area is "+format_number(area_value,3)+"m<sup>2</sup>.";
  }