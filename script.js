$(document).ready(function(){
    $("#upload-form").submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "upload.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                $("#video-container").append(response);
                $("#upload-form")[0].reset();
            }
        });
    });
});
