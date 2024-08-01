document.addEventListener('DOMContentLoaded', function() {
    mapboxgl.accessToken = 'pk.eyJ1IjoieWhhbmllMTUiLCJhIjoiY2x5bHBrenB1MGxmczJpczYxbjRxbGxsYSJ9.DPO8TGv3Z4Q9zg08WhfoCQ';
    var map = new mapboxgl.Map({
        container: 'map_dashboard',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [121.0437, 14.6760], // Coordinates of Quezon City
        zoom: 12
    });

    var marker = new mapboxgl.Marker()
        .setLngLat([121.0437, 14.6760])
        .addTo(map);
});

document.addEventListener('DOMContentLoaded', function() {
    mapboxgl.accessToken = 'pk.eyJ1IjoieWhhbmllMTUiLCJhIjoiY2x5bHBrenB1MGxmczJpczYxbjRxbGxsYSJ9.DPO8TGv3Z4Q9zg08WhfoCQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [121.0437, 14.6760], // Coordinates of Quezon City
        zoom: 12
    });

    var marker = new mapboxgl.Marker()
        .setLngLat([121.0437, 14.6760])
        .addTo(map);
});

document.getElementById('toggleSidebar').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    const topbar = document.getElementById('topbar');
    const toggleButton = document.getElementById('toggleSidebar');
    const header = document.querySelector('.header');
    const mapsDashboard = document.querySelector('.map_dashboard');
    const map = document.getElementById('map');

    sidebar.classList.toggle('collapsed');
    mainContent.classList.toggle('collapsed');
    topbar.classList.toggle('collapsed');
    toggleButton.classList.toggle('collapsed');
    header.classList.toggle('collapsed');
    mapsDashboard.classList.toggle('collapsed');
    map.classList.toggle('collapsed');
});
