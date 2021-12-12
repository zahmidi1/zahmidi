</div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
<script src="assets/js/chart.morris.js"></script>
<script src="assets/js/sweetalert2.all.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
function getCode(id) {
    $(function() {
        $("#code_client").val(id);
    });
}
$('#pwd').keyup(function() {

    if ($('#pwd').val().length == 0) {
        $('#cpwd').attr("disabled", true);
    } else {
        $('#cpwd').removeAttr("disabled");
    }
});
$('#cpwd').keyup(function() {
    $('#savePaswored').attr("disabled", true);
    var pwd = $('#pwd').val();
    var cpwd = $('#cpwd').val();
    if (cpwd != pwd) {
        $('#show').html(
            "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>erroe!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>"
        );
        $('#savePaswored').attr("disabled", true);

    } else {
        $('#show').html(
            "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Success!</strong> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div>"
        );
        $('#savePaswored').removeAttr("disabled");
    }
});




// $("#ajouteC").on('click', function() {
//     Swal.fire(
//         'Good job!',
//         'You clicked the button!',
//         'success'
//     )

// })
</script>
</body>

</html>