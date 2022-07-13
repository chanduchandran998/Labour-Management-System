

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"><b id="txt">Copyright</b> &copy; <b id="txt">LBS2018</b></p>
        <style type="text/css">
          #txt
          {
            font-size: 15px;
          }
        </style>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/widgets/datatable/datatable.js"></script>




    <script type="text/javascript" src="<?php echo PATH; ?>/assets/widgets/datatable/datatable.js"></script>



    


    <script type="text/javascript">
        $(document).ready( function () {
            $('table').dataTable();
        });
    </script>   

<script type="text/javascript">
  $(document).ready(function(){

  

  });


  $(document).ready(function(){
    <?php if($xo) {?>
    $('table.table').dataTable();
    <?php } ?>
  });
</script>

<script type="text/javascript">
      $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
    </script>


  </body>

</html>