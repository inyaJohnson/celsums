$(document).ready(function () {
    $("#contact-form").on("submit", function (e) {
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            type: "POST",
            data: formData,
            url: $(this).attr("action"),
            cache:false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                Swal.showLoading()
            },
            success: function (response) {
                if (response.success) {
                    Swal.fire({
                        icon: "success",
                        title: "Success...",
                        text: response.message,
                    }).then(function (result) {
                        if (result.value) {
                            window.location = "/contact";
                        }
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Ooops...",
                        text: response.message,
                    });
                }
            },
            error: function () {
                Swal.fire({
                    icon: "error",
                    title: "Ooops...",
                    text: response.error,
                });
            },
        });
    });

});
