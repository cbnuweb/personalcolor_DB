// donutchart
google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Type', 'People in Korea'],
    ['Spring Warm', 22],
    ['Summer Cool', 41.6],
    ['Autumn Warm', 6.96],
    ['Winter Cool', 24.9]
  ]);

  var options = {
    pieHole: 0.4,
    colors:['#FFC846', '#AECDFF', '#FF9614', '#FF4646'],
    pieSliceTextStyle: {color: '#FFF0F0', fontSize:20,fontName : 'cutefont'},
    backgroundColor: 'transparent',
    legend: { textStyle: { color: '#828282',  fontSize: 15, bold:true, fontName : 'cutefont'} },
    chartArea: { left:100, 'width': '100%'},
  };

  var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
  chart.draw(data, options);
}

function drawMap(){
  var mapCanvas = document.getElementById("map");
  var Cbnu = new google.maps.LatLng(36.62983570213899, 127.45603965851362); //충북대학
  var ColorAzit = new google.maps.LatLng(36.62347622576889, 127.42385836219606); //컬러아지트
  var Jenaraum = new google.maps.LatLng(36.63311035228879, 127.45741017385666); //제나라움
  var Bnc = new google.maps.LatLng(36.59897093498828, 127.45585057068558); //비앤씨컬러


  var mapOptions = {
    center: Cbnu,
    zoom: 13,
  };

  var map = new google.maps.Map(mapCanvas, mapOptions);

  var marker = new google.maps.Marker({
    position:Cbnu,
    animation: google.maps.Animation.BOUNCE,
    icon: '../img/cbnu.png'
  });
  marker.setMap(map);

  // var info = new google.maps.InfoWindow({
  //   content: "충북대학교"
  // });
  // info.open(map,marker);

  var c1 = new google.maps.Circle({
    center: Cbnu,
    radius: 150,
    strokeColor: "#FF9100",
    strokeOpacity: 0.9,
    strokeWeight: 3,
    fillColor: "#FF9100",
    fillOpacity: 0.3
  });
  c1.setMap(map);

  var marker2 = new google.maps.Marker({
    position:ColorAzit,
    animation: google.maps.Animation.BOUNCE,
  });
  marker2.setMap(map);

  // var info2 = new google.maps.InfoWindow({
  //   content: "컬러아지트",
  // });
  // info2.open(map,marker2);

  var c2 = new google.maps.Circle({
    center: ColorAzit,
    radius: 150,
    strokeColor: "#8AE634",
    strokeOpacity: 0.9,
    strokeWeight: 2,
    fillColor: "#8AE634",
    fillOpacity: 0.3
  });
  c2.setMap(map);

  var marker3 = new google.maps.Marker({
    position:Jenaraum,
    animation: google.maps.Animation.BOUNCE,
  });
  marker3.setMap(map);

  // var info3 = new google.maps.InfoWindow({
  //   content: "제나라움",
  // });
  // info3.open(map,marker3);

  var c3 = new google.maps.Circle({
    center: Jenaraum,
    radius: 150,
    strokeColor: "#228B22",
    strokeOpacity: 0.9,
    strokeWeight: 2,
    fillColor: "#228B22",
    fillOpacity: 0.3
  });
  c3.setMap(map);

  var marker4 = new google.maps.Marker({
    position:Bnc,
    animation: google.maps.Animation.BOUNCE,
  });
  marker4.setMap(map);

  // var info4 = new google.maps.InfoWindow({
  //   content: "비앤씨컬러",
  // });
  // info4.open(map,marker4);

  var c4 = new google.maps.Circle({
    center: Bnc,
    radius: 150,
    strokeColor: "#288CD2",
    strokeOpacity: 0.9,
    strokeWeight: 2,
    fillColor: "#288CD2",
    fillOpacity: 0.3
  });
  c4.setMap(map);
}
