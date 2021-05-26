$('.delete').click(() => {
    Swal.fire({
        title: "Czy na pewno chcesz usunąc rekord ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Tak',
        cancelButtonText: 'Nie',
    }).then(result => {
        if(result.value) {
            $.ajax({
                method: "DELETE",
                url: deleteURL,
                data: {
                    _token: $('input[name=_token]').val()
                }
            })
                .done(() => {
                    window.location.reload();
                })
                .fail((err) => {
                    console.log(err)
                    Swal.fire('Nie udało sie!','Rekord nie został usunięty!','error');
                });
        }
    })

})
