@extends('layouts.sbadmin')
@section('content')
    <style type="text/css">
      html, body { height: 100%;}
      #wrapper,
      #page-wrapper,
      #page-wrapper .container-fluid,
      .tes, .satu {
        height:  100%;
      }
      #page-wrapper {
        height: 1000px;
      }
      .tes {
        height: 82%;
      }
      .map-container {
        position: relative;
        height: 100%;
      }
      #map-canvas {width: 100%; height: 100%;}
    </style>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js??v=3&sensor=false&libraries=places"></script>
    <script type="text/javascript">
  var json_string = '[{"No":"2","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P1","name":"PKM . RUSUNAWA","address":"JL Cingised Komp. Rumah Susun RT 02\/06","telephone":"","class":"","kecamatan":"","latitude":"-6.92759300","longitude":"107.67718400","radius":"50.0","distance":"0"},{"No":"165","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P4","name":"Klinik Asri Husada III","address":"JL. Cisaranten Kulon No.127 Bandung","telephone":"","class":"","kecamatan":"","latitude":"-6.92829100","longitude":"107.68189500","radius":"50.0","distance":"0.5250658310172589"},{"No":"5","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P1","name":"PKM. ARCAMANIK","address":"JL. GOLF TIMUR III NO. 7","telephone":"","class":"","kecamatan":"","latitude":"-6.91787000","longitude":"107.67109300","radius":"50.0","distance":"1.2714435743342152"},{"No":"233","branch":"BANDUNG","kabupaten":"BANDUNG","type":"L4","name":"RS Al Islam","address":"Jl. Soekarno Hatta No. 644 Bandung - Jawa Barat","telephone":"022-7562046, 022-75105835","class":"B","kecamatan":"","latitude":"-6.93996700","longitude":"107.66879700","radius":"50.0","distance":"1.6561441134318815"},{"No":"4","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P1","name":"PKM. ANTAPANI","address":"JL. TERS. KEBAKTIAN","telephone":"","class":"","kecamatan":"","latitude":"-6.91742700","longitude":"107.66462600","radius":"50.0","distance":"1.7862719765625334"},{"No":"258","branch":"BANDUNG","kabupaten":"BANDUNG","type":"S1","name":"Apotek Netral Farma","address":"Jl. Rumah Sakit No. 60-62 Ujungberung Bandung","telephone":"","class":"","kecamatan":"","latitude":"-6.92543700","longitude":"107.69558600","radius":"50.0","distance":"2.0426154624388317"},{"No":"59","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P1","name":"PKM. RIUNG BANDUNG","address":"Jl. Komp. Riung Bandung Permai","telephone":"","class":"","kecamatan":"","latitude":"-6.94608300","longitude":"107.68279000","radius":"50.0","distance":"2.144200792366743"},{"No":"33","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P1","name":"PKM. GRIYA ANTAPANI","address":"JL. PLERED NO. 5 ANTAPANI","telephone":"","class":"","kecamatan":"","latitude":"-6.91583900","longitude":"107.65942600","radius":"50.0","distance":"2.3528000437332075"},{"No":"200","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P7","name":"BP MITRA MULYA","address":"JL A.H. NASUTION NO. 20 CIBIRU BANDUNG","telephone":"8122126543","class":"","kecamatan":"","latitude":"-6.90932400","longitude":"107.68914800","radius":"50.0","distance":"2.419702811248242"},{"No":"121","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P2","name":"DR. MAYRINA DAT MALEM","address":"JL BBK SARI NO. 48 KIARACONDONG BANDUNG","telephone":"81223300785","class":"","kecamatan":"","latitude":"-6.92489500","longitude":"107.65517900","radius":"50.0","distance":"2.4441444544407878"},{"No":"155","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P4","name":"KLINIK PRATAMA SEHATI","address":"JL. JEND. A.H. NASUTION NO.928 BLOK O BANDUNG","telephone":"81809027707","class":"","kecamatan":"","latitude":"-6.90909400","longitude":"107.68931300","radius":"50.0","distance":"2.4510303965780564"},{"No":"167","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P4","name":"Klinik Medika Antapani","address":"JL. Purwakarta No.3 Antapani Bandung","telephone":"","class":"","kecamatan":"","latitude":"-6.91730300","longitude":"107.65739900","radius":"50.0","distance":"2.462205956200539"},{"No":"152","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P4","name":"KLINIK HIKMAH","address":"JL. PESANTREN 8A SUKAMISKIN BANDUNG","telephone":"82129100020","class":"","kecamatan":"","latitude":"-6.90492900","longitude":"107.67721700","radius":"50.0","distance":"2.5167265090651623"},{"No":"219","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P7","name":"BP RAHARDJA","address":"JL. RAYA PURWAKARTA NO 328","telephone":"81321355812","class":"","kecamatan":"","latitude":"-6.91725000","longitude":"107.65646900","radius":"50.0","distance":"2.5560992446213957"},{"No":"19","branch":"BANDUNG","kabupaten":"BANDUNG","type":"P1","name":"PKM. CIJERAH","address":"JL. MEKARHEGAR I NO. 1","telephone":"","class":"","kecamatan":"","latitude":"-6.92587400","longitude":"107.70046000","radius":"50.0","distance":"2.5729090621531676"}]';

    var obj = JSON.parse(json_string);


    var map;
    var service;
    var marker = [];
    var infowindow = new google.maps.InfoWindow();

    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'http://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';

    function parseJson(json_string) {
        clearMarker();

        for (var i=1, len=obj.length; i < len; i++) {
          var mark = addMarker(obj[i].latitude, obj[i].longitude);
          var content = "[" + obj[i].type + "] " +obj[i].address+"<br>Telp."+obj[i].telephone;
          var name = obj[i].name;

          var newAnchor = $('<a>', {
                href: '#',
                class: 'list-group-item',
            }).html(
              '<h4 class="list-group-item-heading">'+name+'</h4><p class="list-group-item-text">'+content+'</p>'
            );
          newAnchor.click(function(e){
                e.preventDefault();
                newAnchor.addClass('active');
                google.maps.event.trigger(mark, 'click');
            });

          setInfoWindow(content, mark);
          $('.faskes-menu').append(newAnchor);

        };
    }

    function init_map() {
        var myLatLng = new google.maps.LatLng(-6.92759300, 107.67718400);

        var option = {zoom: 13, center: myLatLng};
        map = new google.maps.Map(document.getElementById('map-canvas'), option);
        google.maps.event.addListener(map, 'click', function(){
            infowindow.close();
        });

        parseJson(json_string);
    }

    function setInfoWindow(content, marker) {
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.close();
            infowindow.setContent(content);
            infowindow.open(map, marker);
        });
    }

    function mylistener(event) {
        document.getElementById("latitude").value = event.latLng.lat();
        document.getElementById("longitude").value = event.latLng.lng();
        setMarker(event.latLng.lat(),event.latLng.lng());
    }

    function searchLocation(queryText) {

        var request = {
            query : queryText
        };

        service = new google.maps.places.PlacesService(map);
        service.textSearch(request, searchCallback);
    }

    function searchCallback(results, status) {
        if(status == google.maps.places.PlacesServiceStatus.OK) {
            // Ser map center
            map.setCenter(results[0].geometry.location);
            document.getElementById("latitude").value = results[0].geometry.location.lat();
            document.getElementById("longitude").value = results[0].geometry.location.lng();
            setMarker(results[0].geometry.location.lat(),results[0].geometry.location.lng());
        }
    }

    function setMarker(lat,lng) {
        if(marker != undefined) {
            marker.setMap(null);
        } 

        var position = new google.maps.LatLng(lat,lng);

        marker = new google.maps.Marker({
              position: position,
              map: map,
              title: 'cobain'
          });

    }

    function addMarker(lat, lng) {
        var position = new google.maps.LatLng(lat,lng);

        newMark = new google.maps.Marker({
            position: position,
            map: map
        });

        marker.push(newMark);
        return newMark;
    }

    function clearMarker() {
        for (var i = marker.length - 1; i >= 0; i--) {
            marker[i].setMap(null);
        };
        marker.length = 0;
    }
  </script>

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
        Pencarian Lokasi Rujukan
      </h1>
      <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-desktop"></i> Bootstrap Elements
        </li>
      </ol>
    </div>
  </div>

  <div class="row tes">
    <div class="col-md-9 satu">
      <div class="map-container">
          <div id="map-canvas"></div>
      </div>
    </div>

    <style type="text/css">
    .faskes-menu {
      overflow-y: auto;
      max-height: 300px;
    }
    </style>

    <div class="col-md-3">
        <h3>Faskes Terdekat</h3>
        <div class="list-group faskes-menu"></div>
    </div>
  </div>

  <script type="text/javascript">
      init_map();
  </script>
@stop