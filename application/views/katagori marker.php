Skip to content
Why GitHub? 
Enterprise
Explore 
Marketplace
Pricing 
Search

Sign in
Sign up
0 0 0 wahyualdika/mapdayah
 Code  Issues 0  Pull requests 0  Projects 0  Insights
Join GitHub today
GitHub is home to over 36 million developers working together to host and review code, manage projects, and build software together.

mapdayah/resources/views/welcome.blade.php
@wahyualdika wahyualdika First commit Map Dayah
b356a78 on Dec 4, 2018
290 lines (247 sloc)  9.89 KB
    
@extends('layouts.map.master')

@section('page-css')
	<link href="{!! URL::asset('assets/admin/global/plugins/select2/css/select2.min.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! URL::asset('assets/admin/global/plugins/select2/css/select2-bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />

	<style type="text/css">
        html, body, .page-wrapper {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map{
            margin-top: 0px;
        }
		
		.page-wrapper #map {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
		}
		.selector {
			width: 200px;
			top: 80px;
			left: 20px;
			position:fixed;
			z-index: 1031;
		}
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 5px;
        }
        td, th {
            border: 0px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        #legend {
            font-family: Arial, sans-serif;
            background: #fff;
            width: 200px;
            height: 200px;
            bottom: 30px;
            right: 30px;
            border: 3px solid #000;
            z-index: 1031;
            position:absolute;
        }
        #legend h3 {
            text-align: center;
            margin-top: 0;
        }
        #legend img {
            vertical-align: middle;
            margin-left: 8px;
        }
    </style>
@endsection

@section('content')

	<div id="map"></div>
    <div id="legend"><h3>Legenda</h3></div>
	<div class="selector">
		<select id="dayah-selector" name="state" style="width: 200px">
			<option value=""></option>
			@foreach($datas as $data)
                <option value="{{ $data->id }}">{{ $data->Nama }},{{ $data->Kecamatan}},<br>{{ $data->Kabupaten }}  </option>
			@endforeach
		</select>
	</div>

@endsection

@section('page-js')
	<script src="{!! URL::asset('assets/admin/global/plugins/select2/js/select2.full.min.js') !!}" type="text/javascript"></script>

	<script>
        var koorDinas;
		var array = [];
		var lastOpenedInfoWindow;
        var iconBase = 'http://localhost/laravel/icon/';
		var customLabelandIcon = {
		    'BP/TPA':{
                name: 'BP/TPA',
                icon: iconBase + 'TPA.png'
            },
			Salafiyah: {
                name: 'Salafiyah',
                icon: iconBase + 'salahi.png'
			},
			Terpadu: {
                name: 'Terpadu',
                icon: iconBase + 'modern.png'
			},
			'-': {
                name: 'Tidak ada tipe',
			 	icon: iconBase + 'tidakAdaTipe.png'
			}
		};
		window.initMap = function() {
		    koorDinas = new google.maps.LatLng(5.562626,95.324298);
            var map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 5.5566183, lng: 95.3224493},
				zoom: 9,
                disableDefaultUI: true,
                mapTypeId:'satellite',
                mapTypeControl: true,
                mapTypeControlOptions: {
                    mapTypeId: ['satellite','roadmap'],
                    style: google.maps.MapTypeControlStyle.DEFAULT,
                    position:google.maps.ControlPosition.LEFT_BOTTOM
                }
			});
            //marker for dinas pendidikan
            var markerDinas = new google.maps.Marker({
                map: map,
                position: koorDinas
//                label: label.label,
//                icon: icon.icon
            });
            var contentString1 = '<div>'+'<p>Dinas Pendidikan</p>'+'</div>'+
                                 '<div>'+'<p>Jl. Pelangi Mulia, Kuta Alam,Banda Aceh,Aceh 24415</p>'+'</div>';
            markerDinas.content = contentString1;
            var infowindow1 = new google.maps.InfoWindow({
                maxWidth:200
            });
            google.maps.event.addListener(markerDinas, 'click', function () {
                closeinfowindows();
                infowindow1.setContent(contentString1);
                infowindow1.open(this.getMap(), this);
                lastOpenedInfoWindow = infowindow1;
            });
            google.maps.event.addListener(map, 'click', function () {
                closeinfowindows();
            });
            new google.maps.event.trigger( markerDinas, 'click' );
            function closeinfowindows() {
                if (lastOpenedInfoWindow) {
                    lastOpenedInfoWindow.close();
                }
            }
            //end marker for dinas pendidikan
			@foreach($datas as $data)
				var id = "{{ $data->id }}";
				array[id] = [];
                array[id]['id'] = id;
				array[id]['nama'] = "{{ $data->Nama }}";
				array[id]['tipe'] = "{{ $data->Tipe }}";
				array[id]['kecamatan'] = "{{ $data->Kecamatan }}";
                array[id]['kabupaten'] = "{{ $data->Kabupaten }}";
				array[id]['desa'] = "{{ $data->Desa }}";
                array[id]['jumlahSantri'] = "{{ $data->Jumlah_Santri }}";
                array[id]['jumlahUstad'] = "{{ $data->Jumlah_Ustad }}";
                array[id]['keteranganDayah'] = "{{ $data->keterangan_dayah }}";
				array[id]['gambarDayah'] = "{{ $data->thumbnail }}";
				array[id]['gambarPimpinan'] = "{{ $data->pemimpinDayah }}";
                array[id]['pimpinan'] = "{{ $data->Pimpinan }}";
				array[id]['x']    = "{{ $data->KoordinatX }}";
				array[id]['y']    = "{{ $data->KoordinatY }}";
				setMarker(map, array[id]);
			@endforeach
            var legend = document.getElementById('legend');
            for (var key in customLabelandIcon) {
                var type = customLabelandIcon[key];
                var name = type.name;
                var icon = type.icon;
                var div = document.createElement('div');
                div.innerHTML = '<img src="' + icon + '"> ' + name;
                legend.appendChild(div);
            }
		function setMarker(map, data) {
            point = new google.maps.LatLng(data['y'], data['x']);
            var label = customLabelandIcon[data['tipe']] || {};
            var icon = customLabelandIcon[data['tipe']] || {};
            var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: label.label,
                icon: icon.icon
            });
            var contentString =
                '<div style="position: relative;top: 10px;"><table>'+
                '<h3 style="font-weight: bold">Dayah '+data['nama']+'<h3>'+
                '<p> Desa '+data['desa']+' Kecamatan '+data['kecamatan']+' Kabupaten '+data['kabupaten']+'</p>'+
                '<a href="http://localhost/laravel/mapdayah/home/pictures/'+ data['id']+ '">'+'<img src="' + data['gambarDayah'] + '" style="margin-right: 10px" width="150" height="150"/>'+'</a>'+
                '<a href="http://localhost/laravel/mapdayah/home/pictures/'+ data['id']+ '">'+'<img src="' + data['gambarPimpinan'] + '" width="150" height="150"/>'+'</a>'+
                '<tr>'+'<td>Tipe</td>'+'<td>' +data['tipe']+'</td>'+'</tr>'+
                '<tr>'+'<td>Jumlah Santri</td>'+'<td>' +data['jumlahSantri']+'</td>'+'</tr>'+
                '<tr>'+'<td>Jumlah Ustad</td>'+'<td>' +data['jumlahUstad']+'</td>'+'</tr>'+
                '<tr>'+'<td>Keterangan Dayah</td>'+'<td>' +data['keteranganDayah']+'</td>'+'</tr>'+
                '<tr>'+'<td>Pimpinan Dayah</td>'+'<td>' +data['pimpinan']+'</td>'+'</tr>'+
                '</table>'+
                '<a href="http://localhost/laravel/mapdayah/home/profil/'+ data['id']+ '"class="btn btn-success" style="margin-right: 10px">Profil Dayah'+'</a>'+
                '<a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194" class="btn btn-danger"> Video Dayah'+ '</a>'+
                '</div>';
            marker.content = contentString;
            var infowindow = new google.maps.InfoWindow({
                maxWidth:500
               // pixelOffset: new google.maps.Size(0,35)
            });
            google.maps.event.addListener(marker, 'click', function () {
                closeLastOpenedInfoWindow();
                infowindow.setContent(this.content);
                infowindow.open(this.getMap(), this);
                lastOpenedInfoWindow = infowindow;
            });
            google.maps.event.addListener(map, 'click', function () {
                closeLastOpenedInfoWindow();
            });
            data['marker'] = marker;
            }
        function closeLastOpenedInfoWindow() {
            if (lastOpenedInfoWindow) {
                lastOpenedInfoWindow.close();
            }
        }
        function geocodeLatLng(geocoder, map) {
            var id = document.getElementById('dayah-selector').value;
            var latlng = {lat: parseFloat(array[id]['y']), lng: parseFloat(array[id]['x'])};
            geocoder.geocode({'location': latlng}, function (results, status) {
                if (status === 'OK') {
                    if (results[1]) {
                        map.setZoom(10);
                        map.setCenter({lat: parseFloat(array[id]['y']), lng: parseFloat(array[id]['x'])});
                        new google.maps.event.trigger( array[id]['marker'], 'click' );
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }
        $(document).ready(function() {
            $('#dayah-selector').select2({
                placeholder: 'Cari Dayah',
                width: '350px'
            }).on("change", function() {
                var geocoder = new google.maps.Geocoder;
                geocodeLatLng(geocoder, map);
            });
        });
		};
	</script>

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD9bv3LMpE_D6_WLvmuMtp_ueQc1Bb_eo&callback=initMap" type="text/javascript"></script>
@endsection
© 2019 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
