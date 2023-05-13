function updateMap() {
    console.log("Updating map with realtime data")
    fetch("/data.json")
        .then(response => response.json()) //promises
        .then(rsp => {
            console.log(rsp.data);
            rsp.data.forEach(element => {
                latitude = element.latitude;
                longitude = element.longitude;

                cases = element.infected;
                let color;
                if (cases > 255) {
                    color = "rgb(255,0,0)";
                }
                else {
                    color = `rgb(${cases},0,0)`;
                }

                // Create a marker
                const marker = new mapboxgl.Marker({
                    draggable: false,
                    color: color
                })
                    .setLngLat([longitude, latitude])
                    .addTo(map);

                // Create a popup
                const popup = new mapboxgl.Popup({
                    offset: 25
                })
                    .setHTML(`<p>Cases: ${cases}</p>`);

                // Add the popup to the marker
                marker.setPopup(popup);

                // Show the popup when hovering over the marker
                // Use mouseenter instead of mouseover to avoid flickering
                marker.on('mouseenter', () => {
                    popup.addTo(map); // Add the popup to the map
                });

                // Hide the popup when the mouse leaves the marker
                // Use mouseleave instead of mouseout to avoid flickering
                marker.on('mouseleave', () => {
                    popup.remove(); // Remove the popup from the map
                });
            });
        });
}
//used AJAX
let interval =2000;
setInterval(updateMap,interval);
