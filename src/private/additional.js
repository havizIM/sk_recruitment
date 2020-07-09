
const PROTOCOL = window.location.protocol
const HOST = window.location.host
const PATH = HOST === 'localhost' ? 'sk_recruitment/' : ''
const BASE_URL = `${PROTOCOL}//${HOST}/${PATH}`

const additionalController = (() => {
    return {

        containerLoader: container => {
            $(container).block({
                message: `
                    <div class="loader-wrapper">
                      <div class="loader-container">
                        <div class="square-spin loader-success">
                          <div></div>
                        </div>
                      </div>
                    </div>
                `,
                overlayCSS: {
                    backgroundColor: '#fff',
                    opacity: 0.8,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    padding: 0,
                    backgroundColor: 'transparent'
                }
            });
        },

    
        buttonLoader: btn => {
            $(btn).block({
                message: `
                    <div class="loader-wrapper">
                      <div class="loader-container">
                        <div class="square-spin loader-success">
                          <div></div>
                        </div>
                      </div>
                    </div>
                `,
                overlayCSS: {
                    backgroundColor: '#fff',
                    opacity: 0.8,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    padding: 0,
                    backgroundColor: 'transparent'
                }
            });
        },


        pageLoader: () => {
            $.blockUI({
                message: `
                    <div class="loader-wrapper">
                      <div class="loader-container">
                        <div class="ball-clip-rotate-multiple loader-success">
                          <div></div>
                          <div></div>
                        </div>
                      </div>
                    </div>
                `,
                overlayCSS: {
                    backgroundColor: '#fff',
                    opacity: 0.8,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    padding: 0,
                    backgroundColor: 'transparent'
                }
            })
        },


        closeElementLoader: element => {
            $(element).unblock()
        },


        closePageLoader: () => {
            $.unblockUI()
        },


        topNotif: (type, message) => {
            var opts = {
                title: message.title,
                text: message.text,
                width: "100%",
                cornerclass: "rounded-0",
                addclass: "stack-custom-top bg-primary border-primary",
                stack: { "dir1": "right", "dir2": "down", "push": "top", "spacing1": 1 }
            };

            switch (type) {
                case 'error':
                    opts.addclass = "stack-custom-top bg-danger border-danger";
                    opts.type = "error";
                    break;

                case 'info':
                    opts.addclass = "stack-custom-top bg-info border-info";
                    opts.type = "info";
                    break;

                case 'success':
                    opts.addclass = "stack-custom-top bg-success border-success";
                    opts.type = "success";
                    break;
            }

            new PNotify(opts);
        },


        rightNotif: (type, message) => {
            var opts = {
                title: message.title,
                text: message.text,
                addclass: "stack-bottom-right bg-primary border-primary",
                stack: { "dir1": "left", "dir2": "up", "firstpos1": 20, "firstpos2": 20 }
            };

            switch (type) {
                case 'error':
                    opts.addclass = "stack-bottom-right bg-danger border-danger";
                    opts.type = "error";
                    break;

                case 'info':
                    opts.addclass = "stack-bottom-right bg-info border-info";
                    opts.type = "info";
                    break;

                case 'success':
                    opts.addclass = "stack-bottom-right bg-success border-success";
                    opts.type = "success";
                    break;
            }

            new PNotify(opts);
        },


        dtLanguage: () => {
            return {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        },

        dtDOM: () => {
            return '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>'
        },

        dtSelect: () => {
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity,
                dropdownAutoWidth: true,
                width: 'auto'
            });
        }


    }
})()