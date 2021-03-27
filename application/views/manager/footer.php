</section>
</div>

  <footer class="main-footer">
    <strong>Copyright<a href="#">Daikindo</a>.</strong>All rights reserved
  </footer>
</div>
<!--./wrapper -->

<!-- sweetalert -->
<?php if ($this->session->flashdata('success')) {?>
  <sricpt type="text/javascript">
    $(function() {
      swal("success", "<?=$_SESSION['success']?>", "success");
    });
  </script>
<?php }?>

<?php if ($this->session->flashdata('success')) {?>
  <sricpt type="text/javascript">
    $(function() {
      swal("failed", "<?=$_SESSION['failed']?>", "error");
    });
  </script>
<?php }?>

<?php if ($this->session->flashdata('availible')) {?>
  <sricpt type="text/javascript">
    $(function() {
      swal("Info", "<?=$_SESSION['availible']?>", "warning");
    });
  </script>
<?php }?>

</body>
</html>
