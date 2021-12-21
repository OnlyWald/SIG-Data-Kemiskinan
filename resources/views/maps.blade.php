<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kemiskinan Jatim</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- API leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    {{-- JS shape file --}}
    @foreach ($dataes as $item)
        <script src="geojson/{{ $item->nama_kota }}.js"></script>
    @endforeach

    {{-- css file --}}
    <link rel="stylesheet" href="style.css">

    {{-- geocodrer --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
</head>
<body>
    {{-- Navigation Bar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="navbar position-relative d-flex justify-content-center ">
          <h3 class="mt-1">Sistem Informasi Geografis Pemetaan Kemiskinan Masyarakat Jawa Timur 2019</h3>
        </div>
    </nav>

    {{-- Map Container --}}    
    <div class="container mt-4">
        <div id="map" style="width: 100%; height: 460px;"></div>
    </div>

    <!-- Modal Donasi dan Data -->
    @foreach ($dataes as $item)
        <div class="modal fade" id="{{ $item->nama_kota }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Penduduk Kota {{ $item->nama_kota }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Jumlah Penduduk : {{ $item->jumlah_penduduk }}</p>
                    <p>Jumlah Penduduk Miskin : {{ $item->jumlah_penduduk_miskin }}</p>
                    <p>Persentase Penduduk Miskin : {{ round($item->jumlah_penduduk_miskin/$item->jumlah_penduduk*100, 2) }}%</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="donasi{{ $item->nama_kota }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Donasi Kota {{ $item->nama_kota }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/store">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formName" class="form-label">Nama Lengkap</label>
                            <input name="nama" type="text" class="form-control" id="formName" placeholder="Cth. Hadi Suwadi" required>
                            
                            <label for="formAddress" class="form-label">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="formAddress" required placeholder="Cth. Desa Doko RT 01 RW 01 Kec. Doko Kab. Blitar 66186">
                            
                            <label for="formPhone" class="form-label">Nomor Telepon</label>
                            <input name="telepon" type="tel" class="form-control" id="formPhone" placeholder="Cth. 085645664854" required>
                            
                            <label for="formItems" class="form-label">Barang yang Didonasikan</label>
                            <input name="barang" type="text" class="form-control" id="formItems" placeholder="Cth. Pakaian, Sembako" required> 
                            <p class="fs-7 fst-italic text-warning">*Donasi hanya boleh berupa barang</p>
                            <input name="id" type="hidden" value="{{ $item->id }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Kirim Data</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    @endforeach

    <script>
        //data shapefile
		var cities = L.layerGroup();
        //data marker
        var markersLayer = new L.LayerGroup();

        //memanggil data shapefile
        @foreach ($dataes as $item)
            var indonesia = L.geoJSON({{ $item->nama_kota }}).addTo(cities);
        @endforeach

        //memanggil data kota
        var data = [
            @foreach ($dataes as $item)
                {"loc":[{{ $item->longitude }},{{ $item->latitude }}], "title":"{{ $item->nama_kota }}", 'namaDinsos':"{{ $item->nama_dinsos }}"},
            @endforeach
        ];

        //API bentuk peta
		var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
		var mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        //memanggil bentuk peta
		var grayscale = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
		var streets = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
		
        //menambahkan properti ke map
		var map = L.map('map', {
			center: [-7.316562, 112.7248061],
			zoom: 10,
			layers: [streets, markersLayer]
		});
		
        //menyimpan bentuk peta ke layers
		var baseLayers = {
			'Grayscale': grayscale,
			'Streets': streets
		};

        //menyimpan shapefile dan markers ke layers
		var overlays = {
            'Dinas Sosial': markersLayer,
			'Batas Kota': cities
		};

        //menyimpan baseLayers dan overlays dalam satu layer yang sama
		var layerControl = L.control.layers(baseLayers, overlays).addTo(map);
        
        //memanggil data dinas sosial dan marker
        for(i in data) {
            var title = data[i].title,	//value searched
                loc = data[i].loc,
                dinsos = data[i].namaDinsos,	//position found
                marker = new L.Marker(new L.latLng(loc), {title: title} );//se property searched
            marker.bindPopup( dinsos + "<br><button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#"+title+"'>Lihat Data</button>          <button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#donasi"+title+"'>Donasi</button>" );
            markersLayer.addLayer(marker);
        }

        //memanggil data serch dari API geocoder kedalam map 
        var geocoder = L.Control.geocoder({
        defaultMarkGeocode: false
        })
            .on('markgeocode', function(e) {
                var bbox = e.geocode.bbox;
                var poly = L.polygon([
                bbox.getSouthEast(),
                bbox.getNorthEast(),
                bbox.getNorthWest(),
                bbox.getSouthWest()
                ]).addTo(map);
                map.fitBounds(poly.getBounds());
            })
            .addTo(map);
    
    </script>
</body>
</html>