$(document).ready(function () {
    $('#upload-form').submit(function (e) { 
        e.preventDefault();
        
        var formData = new FormData(this); // Huruf 'F' pada 'FormData'

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData, // Perbaikan typo dari 'fomrData' menjadi 'formData'
            cache: false,   // Perbaikan dari 'caches' menjadi 'cache'
            contentType: false,
            processData: false,
            success: function (response) {
                $('#status').html(response);
            },
            error: function () {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
