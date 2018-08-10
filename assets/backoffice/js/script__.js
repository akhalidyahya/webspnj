jQuery(document).ready(function () {
    jQuery('.loader').fadeOut();
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
    $("#example1").DataTable();
});