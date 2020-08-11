$(document).ready(function() {
    var refreshId = setInterval(function() {
    $("#network").load("/assets/vendors/network/network.php")
    .error(function() { alert("Error"); });
    }, 1000);
    $.ajaxSetup({ cache: false });				
});