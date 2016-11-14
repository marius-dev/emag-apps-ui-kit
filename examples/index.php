<!DOCTYPE html>
<html lang="en" class="js">
    <head>

        <title>Get started - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <?php include_once "modules/_mod_top_include.php"?>

    </head>
    <body>
        
        <?php include_once "modules/_mod_browser_upgrade.php"?>

        <!-- HEADER:Start -->
        <?php include_once "modules/_mod_header_simple.php"?>
        <!-- HEADER:End -->

        <!-- PAGE:Start -->
            <div class="main-container" id="main-container">
                <div class="main-container-inner">
                
                <!-- SIDEBAR:Start -->
                <!-- SIDEBAR:End -->

                <!-- CONTENT:Start -->
                <div class="main-content">
                    <div class="page-content">
                        <div class="jumbotron">
                            <div class="container pad-sep-80 text-center">
                                <h1>eMAG Apps UI KIT</h1>
                                <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                                <small>Based on <a href="#">Twitter Bootstrap v3.3.5</a></small>
                                <div class="pad-sep-20 pad-top-40">
                                    <a href="overview.php" type="button" class="btn btn-primary btn-lg">Get started</a>
                                </div>
                                <small>Currently at v0.8.1</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTENT:End -->

                <!-- FOOTER:Start -->
                    <?php include_once "modules/_mod_footer.php"?>
                <!-- FOOTER:End -->
                 
                </div>
            </div>
        <!-- PAGE:End -->

        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">               
            $(document).ready(function () {
                console.log('Ready, Captain!');
            });
        </script>
        <!-- DOCUMENT-READY:End -->

    </body>
</html>