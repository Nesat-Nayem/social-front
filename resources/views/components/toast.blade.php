<script>
    // Global toastr configuration
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    window.showToast = function(type, message) {
        switch(type) {
            case 'success':
                toastr.success(message);
                break;
            case 'error':
                toastr.error(message);
                break;
            case 'warning':
                toastr.warning(message);
                break;
            case 'info':
                toastr.info(message);
                break;
        }
    }

    // Auto-initialize toasts from session
    @if(Session::has('success'))
        showToast('success', "{{ Session::get('success') }}");
    @endif

    @if(Session::has('error'))
        showToast('error', "{{ Session::get('error') }}");
    @endif

    @if(Session::has('warning'))
        showToast('warning', "{{ Session::get('warning') }}");
    @endif

    @if(Session::has('info'))
        showToast('info', "{{ Session::get('info') }}");
    @endif
</script>

