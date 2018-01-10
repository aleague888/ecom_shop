<?php 
require_once("../resources/config.php"); 
include(TEMPLATE_FRONT . DS . "header.php");
?>

<body>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <?php include(TEMPLATE_FRONT . DS . "side_nav.php"); ?>
            <div class="col-md-9">
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <?php include(TEMPLATE_FRONT . DS . "slider.php"); ?>
                    </div>
                </div>

                <div class="row">
                    <?php get_products(); ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
