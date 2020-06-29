/**
 * Google Map
 *
 * @param item
 * return void
 */


function googleMap(item) {
    var myLatLng = {lat: parseFloat($(item).data('lat').toString()), lng: parseFloat($(item).data('lng').toString())};
    var map = new google.maps.Map(item, {
        zoom: 11,
        center: myLatLng
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: $(item).data('title')
    });
}


/**
 * Initialize each google map on page
 */

function initMap() {
    var maps = document.getElementsByClassName('map');
    for(var i=0; i<maps.length; i++)
    {
        googleMap(maps[i]);
    }
}
/*

$(document).ready(function() {

    //$('[name=country]').val( '' );
    //$('[name=country]').find('option[value="Deutschland"]').attr("selected",true);
    $(function() {
        $('[name=country] option').filter(function() {
            return ($(this).text() == 'Deutschland');
        }).prop('selected', true);
    })

}); // END -- READY*/
