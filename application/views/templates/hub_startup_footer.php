
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/upload/index.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/js/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/js/login/js/main.js"></script>

</body>
</html>