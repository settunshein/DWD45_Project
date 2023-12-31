<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!--<script src="assets/js/dashboard.js"></script>-->

<!-- toastr Alert -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Dropify -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- JQuery Validate -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->

<!-- Bootstrap 4 Toggle -->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    $('.dropify').dropify({
        messages: {
            'default': 'Choose Your Upload Image',
            'replace': 'Click or Drag and Drop to Replace',
            'remove':  'Remove',
            'error':   'Error. The file is either not square, larger than 2 MB or not an acceptable file type'
        }
    });

    $('.return-status-toggle').bootstrapToggle();

    /* Update Booking Status */
    $('.update-booking-status').click(function(){
        let id             = $(this).data('id');
        let booking_status = $(this).data('booking-status');
        $(`#booking_status${id}`).val(booking_status);

        $(`#updateBookingStatusForm${id}`).submit();
    })

    /* Update Return Status */
    $('.return-status-toggle').change(function(){
        let id = $(this).data('id');

        $(`#updateReturnStatusForm${id}`).submit();
    });

    /* Select All Features */
    $('#select-all-features').on('click',function(){
        if(this.checked){
            $('input[type=checkbox]').each(function(){
                this.checked = true;
            });
        }else{
                $('input[type=checkbox]').each(function(){
                this.checked = false;
            });
        }
    });
</script>

<?php
if (isset($_SESSION['alert'])) {
    echo $_SESSION['alert'];
    unset($_SESSION['alert']);
}
?>

</body>
</html>
