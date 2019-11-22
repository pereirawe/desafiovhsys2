$("#form-section").submit(function(event) {
    event.preventDefault();
    $("body").css({ "cursor": "wait" });
    var InputEmail = $('#InputEmail').val();
    var data_string = "action=true&InputEmail=" + InputEmail;

    $.ajax({
        url: "./functions.php",
        type: "POST",
        data: data_string,
        success: function(result) {
            
            var ans = "<div id='wait-msg' class='alert alert-success' role='alert'>You will receive a notification when the file is available for download.</div>";
            $("#form-section").append(result);
            $('#form-section').fadeIn();
            $('#ans').html(ans);
            $('#submit').html('Download File.zip');

            // $(document.body).css({ "cursor": "default" });
            // $("body").css({ "cursor": "default" });
            // $("body").css({ "opacity": "1" });
            $(":input").attr("disabled", true);
            
        }
    });  
});