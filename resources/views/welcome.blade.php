@extends('main')

@section('container')
    <div id="map" style="width: 100%; height: 500px;"></div>

    <!-- Modal -->
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
                <div class="modal-body">
                    <form action="post">
                        <div class="mb-3">
                            <label for="formName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="formName" placeholder="Cth. Hadi Suwadi">
                            <label for="formAddress" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="formAddress" placeholder="Cth. Desa Doko RT 01 RW 01 Kec. Doko Kab. Blitar 66186">
                            <label for="formPhone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="formPhone" placeholder="Cth. 085645664854">
                            <label for="formItems" class="form-label">Barang yang Didonasikan</label>
                            <input type="text" class="form-control" id="formItems" placeholder="Cth. Pakaian, Sembako">
                            <p class="fs-7 fst-italic text-warning">*Donasi hanya boleh berupa barang</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Dapatkan Kode Donasi</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach

    <script>
        //maps
        var map = new L.Map('map', {zoom: 9, center: new L.latLng(-7.316562, 112.7248061) });

        map.addLayer(new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }));

        //shape file
        @foreach ($dataes as $item)
            var indonesia = L.geoJSON({{ $item->nama_kota }}).addTo(map);
        @endforeach

        //search
        var data = [
            @foreach ($dataes as $item)
                {"loc":[{{ $item->longitude }},{{ $item->latitude }}], "title":"{{ $item->nama_kota }}", 'namaDinsos':"{{ $item->nama_dinsos }}"},
            @endforeach
        ];

        var markersLayer = new L.LayerGroup();

        map.addLayer(markersLayer);

        map.addControl( new L.Control.Search({
            layer: markersLayer,
            initial: false,
            collapsed: true,
            position:'topright'    
        }) );

        for(i in data) {
            var title = data[i].title,	//value searched
                loc = data[i].loc,
                dinsos = data[i].namaDinsos,	//position found
                marker = new L.Marker(new L.latLng(loc), {title: title} );//se property searched
            marker.bindPopup( dinsos + "<br><button type='button' class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#"+title+"'>Lihat Data</button>          <button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#donasi"+title+"'>Donasi</button>" );
            markersLayer.addLayer(marker);
        }


    </script>
@endsection