<!DOCTYPE html>
<html lang="en">

    <?php
            require 'config.php';
            require 'models/Auth.php';
    
    
            $auto = new Auth($conexao, $base);
            $userInfo = $auto->checkToken();

            // echo 'index';
    
    ?>

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
        require 'partials/conteudoDashboard.php';
    ?>
                    



    <!-- Custom js -->
    <!-- <script src="assets/pages/chart/morris/morris-custom-chart.js"></script> -->

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
