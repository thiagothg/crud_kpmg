$(function () {
    $(document).on("click", ".delete-button", function (event) {
        event.preventDefault()
        event.stopPropagation()

        var myModal = new bootstrap.Modal(document.getElementById('model-delete-confirm'), {
            keyboard: false
        })

        let url = $(this).attr('href')
        let code = $(this).attr('data-id')
        let item = $(this).attr('data-item')
        let name = $(this).attr('data-name')

        $('#form-modal-delete').attr('action', url)
        let message = `${item} ${name}`

        $('#item-delete').text(message)

        myModal.show()
    });
})