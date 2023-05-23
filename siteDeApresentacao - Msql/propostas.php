<!DOCTYPE html>
<html lang="en">

    <!-- Header -->
    <?php  
        require 'partials/header.php';
    ?>

    <!-- Menu lateral / Top -->
    <?php  
        require 'partials/navbarLateral.php';
    ?>

            
    <!-- Menu lateral / Top -->
    <?php  
        require 'partials/conteudoPropostas.php';
    ?>
                    
    <!-- Date Time js -->
    <script src="assets/js/dateTime.js"></script>
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Morris Chart js -->
    <script src="assets/js/raphael/raphael.min.js"></script>
    <script src="assets/js/morris.js/morris.js"></script>
    <script src="assets/js/hoursDayChart.js"></script>
    <script src="assets/js/barchart.js"></script>
    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <?php
                if(isset($_POST['submit'])) {
                    $date = $_POST['date'];
                    echo "A data e hora selecionada é: " . $date;
                }
            ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="date">Selecione uma data e hora:</label>
                <input type="datetime-local" id="date" name="date"><br><br>
                <input type="submit" name="submit" value="Enviar">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
