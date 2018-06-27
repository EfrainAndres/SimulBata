
    var data = {
    labels: ['Estandar Incandescente', 'Halogena', 'Fluorescente Compacta', 'Tubo Fluorescente' , 'Led'],
    
    datasets: [
        {
        fillColor: "rgba(220,220,220,0.2)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data: [425,370,600,1150,470]
        },
        {
        fillColor: "rgba(100,220,220,0.7)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data: [710,845,900,1650,806]
        }
    ]
    };

    var context = document.querySelector('#graph').getContext('2d');
    new Chart(context).Line(data);
    