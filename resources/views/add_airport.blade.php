@include('Partials.header')
<div class="container-fluid mt-3">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
    
    <div class="text-center">
        <h1>Let's create a new airport!</h1>
    </div>
    <hr>
    <form action="/add/airport" method="POST">
        @csrf
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" name="name" type="text" placeholder="Name">
        </div>
        <div class="d-grid gap-2 mx-auto mt-2">
            <select class="form-select" name="countries_id"  aria-label="Select country">
                <option selected>Select country</option>
            @foreach($countries as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
            </select>
            <select class="form-select" name="airlines_id"  aria-label="Select country">
                <option selected>Select country</option>
            @foreach($airlines as $airline)
                <option value="{{$airline->id}}">{{$airline->name}}</option>
            @endforeach
            </select>
        </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control " id="location" name="location" value="" readonly>
                <div id='map' style='width: 100%; height: 500px;'></div>
            </div>
        <button type="submit" class="btn btn-success mt-3" href="/airports" >Create</button>
        <script>
            const locationElement = document.getElementById('location');
            mapboxgl.accessToken = 'pk.eyJ1IjoicGVybWFiYW5sOSIsImEiOiJjbDluMmdyMDUwM295M29uemVrYjFndWkyIn0.LhUe90otQdhhKt7iU6PSOQ';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                doubleClickZoom: false
            });

            map.addControl(
                new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl
                })
            );

            let marker = new mapboxgl.Marker()
                .setLngLat([30.5, 50.5])
                .addTo(map);

            map.on('dblclick', (e) => {
                marker.setLngLat(e.lngLat);
                locationElement.value = `${e.lngLat.lng} ${e.lngLat.lat}`;
            })

        </script>
    </form>
</div>
