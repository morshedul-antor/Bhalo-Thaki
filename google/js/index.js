let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(23.8103, 90.4125),
    zoom: 12,
  });
  const iconBase =
    "https://developers.google.com/maps/documentation/javascript/examples/full/images/";
  const icons = {
    parking: {
      icon: iconBase + "parking_lot_maps.png",
    },
    library: {
      icon: iconBase + "library_maps.png",
    },
    info: {
      icon: iconBase + "info-i_maps.png",
    },
  };
  const features = [
    {
      position: new google.maps.LatLng(23.8191, 90.4526),
      type: "library",
    },
    {
      position: new google.maps.LatLng(23.7461, 90.3742),
      type: "library",
    },
    {
      position: new google.maps.LatLng(23.7925, 90.4078),
      type: "library",
    },
    {
      position: new google.maps.LatLng(23.8223, 90.3654),
      type: "library",
    },
    {
      position: new google.maps.LatLng(23.7619, 90.4331),
      type: "library",
    },
    {
      position: new google.maps.LatLng(23.7805, 90.4267),
      type: "library",
    },
    {
      position: new google.maps.LatLng(23.7778, 90.4057),
      type: "library",
    },
  ];

  // Create markers.
  for (let i = 0; i < features.length; i++) {
    const marker = new google.maps.Marker({
      position: features[i].position,
      icon: icons[features[i].type].icon,
      map: map,
    });
  }
}
