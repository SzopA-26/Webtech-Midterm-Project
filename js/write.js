$(document).ready(function () {

    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
    });

    $('#log-in-btn').on('click', function() {
        var markupStr = $('#summernote').summernote('code');
        console.log(markupStr)
        document.getElementById("content").innerHTML = markupStr;

    })
})