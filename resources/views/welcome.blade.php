@extends('layouts.app')

@section('content')
    <h1>Data Sekolah</h1>
    <div id="map"></div>
    <ul id="school-list"></ul>
@endsection

@section('scripts')
<script>
    const map = L.map('map').setView([-6.2, 106.8], 11);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    fetch('/api/schools')
        .then(response => response.json())
        .then(data => {
            const list = document.getElementById('school-list');
            data.forEach(school => {
                // Marker
                L.marker([school.latitude, school.longitude])
                    .addTo(map)
                    .bindPopup(`<strong>${school.name}</strong>`);

                // List
                const li = document.createElement('li');
                li.textContent = school.name;
                list.appendChild(li);
            });
        });
</script>
@endsection
