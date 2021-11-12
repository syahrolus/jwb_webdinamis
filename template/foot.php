</main><!-- End #main -->

<!-- Vendor JS Files -->
<script src="/jwb_webdinamis/assets/vendor/aos/aos.js"></script>
<script src="/jwb_webdinamis/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/jwb_webdinamis/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/jwb_webdinamis/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/jwb_webdinamis/assets/vendor/php-email-form/validate.js"></script>
<script src="/jwb_webdinamis/assets/vendor/purecounter/purecounter.js"></script>
<script src="/jwb_webdinamis/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="/jwb_webdinamis/assets/js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
echo '
<script>
  function validation(param) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = "hapus.php?id=" + param;
        } else {
          swal("Your imaginary file is safe!");
        }
      });
  }
  function hapus_row(param) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = "../../controller/ke_delete.php?id=" + param;
        } else {
          swal("Your imaginary file is safe!");
        }
      });
  }
  function hapus_row_bidang(param) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = "../../controller/bidang_delete.php?id=" + param;
        } else {
          swal("Your imaginary file is safe!");
        }
      });
  }
  function hapus_row_instruktur(param) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = "../../controller/instruktur_delete.php?id=" + param;
        } else {
          swal("Your imaginary file is safe!");
        }
      });
  }
  
</script>
';
?>

<?php

if (isset($_GET["status"])) {
  if ($_GET["status"] === "success") {
    echo "<script>
    swal({
      position: 'top-end',
      icon: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 3000
    });
  </script>";
  } elseif ($_GET["status"] === "error") {
    echo "
    <script>
    swal('Error', 'Maaf input salah', 'error');
  </script>
    ";
  }
}


?>



</body>

</html>