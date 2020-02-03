$(document).ready(function () {

    $('#submitLoginBtn').on('click', function() {
        window.location = ""
    })

    $('#submitRegisBtn').on('click', function() {
        window.location = ""
    })

    $('#logoutBtn').on('click', function() {
        window.location = ""
    })

    $('#write-story-btn').on('click', function() {
        window.location = "write"
    });

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
})