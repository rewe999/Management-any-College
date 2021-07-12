$(function () {
    $('.delete').click(function() {
        console.log($(this).data("id"))
        Swal.fire({
            title: confirmDelete + $(this).data("title"),
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Tak',
            cancelButtonText: 'Nie',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    method: "DELETE",
                    url: deleteUrl + $(this).data("id"),
                })
                    .done(function(data) {
                        window.location.reload();
                    })
                    .fail(function(data) {
                        console.log(data)
                        Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status);
                    });
            }
        })

    })
});
