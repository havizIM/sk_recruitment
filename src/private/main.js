const mainController = ((ADD) => {

    const _loadContent = path => {
        $.ajax({
            url: `${BASE_URL}administrator/page/${path}`,
            dataType: 'HTML',
            beforeSend: function () {
                // ADD.pageLoader()
            },
            success: function (response) {
                $('#page_content').html(response)
            },
            error: function () {
                $('#page_content').load(`${BASE_URL}administrator/not_found`);
            },
            complete: () => {
                // ADD.closePageLoader()
            }
        })
    }

    const _setRoute = () => {
        let path;

        if (location.hash) {
            path = location.hash;
            _loadContent(path.substr(2));
        } else {
            location.hash = '#/dashboard';
        }

        $(window).on('hashchange', function () {
            path = location.hash;

            _loadContent(path.substr(2));
        });
    }

    const _logoutSystem = () => {
        $('.btn-logout').on('click', function () {
            // $.ajax({
            //     url: `${BASE_URL}administrator/authorization/logout`,
            //     type: 'GET',
            //     dataType: 'JSON',
            //     beforeSend: function () {
            //         // ADD.pageLoader()
            //     },
            //     success: (data) => {
            //         if (data.status === true) {
            //             window.location.replace(`${BASE_URL}administrator/login`);
            //         }
            //     },
            //     error: err => {
            //         ADD.topNotif('error', { title: 'Gagal', text: error })
            //     },
            //     complete: () => {
            //         // ADD.closePageLoader()
            //     }
            // })

            window.location.replace(`${BASE_URL}administrator/login`);
        })
    }

    return {
        init: () => {
            console.log('Main is running...')

            _setRoute()
            _logoutSystem()
        }
    }
})(additionalController)