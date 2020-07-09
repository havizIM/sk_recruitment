const authController = ((ADD) => {

    const _submitLogin = () => {
        $('#form_login').validate({
            errorClass: 'validation-invalid-label',
            successClass: 'validation-valid-label',
            validClass: 'validation-valid-label',
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass);
            },
            success: function (label) {
                label.addClass('validation-valid-label').text('Oke.');
            },

            // Different components require proper error label placement
            errorPlacement: function (error, element) {

                // Unstyled checkboxes, radios
                if (element.parents().hasClass('form-check')) {
                    error.appendTo(element.parents('.form-check').parent());
                }

                // Input with icons and Select2
                else if (element.parents().hasClass('form-group-feedback') || element.hasClass('select2-hidden-accessible')) {
                    error.appendTo(element.parent());
                }

                // Input group, styled file input
                else if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
                    error.appendTo(element.parent().parent());
                }

                // Other elements
                else {
                    error.insertAfter(element);
                }
            },
            rules: {
                username: 'required',
                password: 'required'
            },
            submitHandler: form => {
                // $.ajax({
                //     url: `${BASE_URL}api/private/login`,
                //     type: 'POST',
                //     dataType: 'JSON',
                //     data: $(form).serialize(),
                //     beforeSend: xhr => {
                //         // xhr.setRequestHeader("Authorization", "Basic " + btoa(USERNAME + ":" + PASSWORD))
                //         ADD.containerLoader('.auth-2')
                //     },
                //     success: ({ data }) => {
                //         _setSession(data)
                //     },
                //     error: err => {
                //         const { error } = err.responseJSON
                //         ADD.topNotif('error', { title: 'Gagal', text: error })
                //     },
                //     complete: () => {
                //         ADD.closeElementLoader('.auth-2')
                //     }
                // })

                let db_username = ['admin', 'manager']

                let username = $('#username').val()
                let password = $('#password').val()

                if (db_username.includes(username) && db_username.includes(password)) {
                    window.location.replace(`${BASE_URL}administrator/`);
                } else {
                    alert('Username atau Password Salah..')
                }
                
            }
        })
    }

    const _setSession = data => {
        $.ajax({
            url: `${BASE_URL}administrator/authorization/login`,
            type: 'POST',
            dataType: 'JSON',
            data: {
                id_user: data.id_user,
                nama_lengkap: data.nama_lengkap,
                key: data.key,
                level: data.level
            },
            success: (data) => {
                if (data.status === true) {
                    window.location.replace(`${BASE_URL}administrator/`);
                }
            },
            error: err => {
                ADD.topNotif('error', { title: 'Gagal', text: error })
            }
        })
    }

    return {
        init: () => {
            console.log('authController is running...')

            _submitLogin()
        }
    }
})(additionalController)

