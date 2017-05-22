function initialize() {
    var a, b, c = new google.maps.LatLng(51.966607, 5.664941),
        d = {
            zoom: 16,
            center: c,
            scrollwheel: !1,
            draggable: false
        }

    a = new google.maps.Map(document.getElementById("map"), d),
    new google.maps.Marker({
        position: c,
        map: a,
        title: "Restaurant H'eerlijk"
    })
}
google.maps.event.addDomListener(window, "load", initialize);
