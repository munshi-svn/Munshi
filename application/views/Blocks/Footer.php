<!--end #content-->
<!-- END CONTENT -->

<!-- BEGIN MENUBAR-->
<?php $this->load->view('Blocks/Menu'); ?>
    <!--end #menubar-->
    <!-- END MENUBAR -->

    <!-- BEGIN OFFCANVAS RIGHT -->
    <?php $this->load->view('Blocks/OffCanvas'); ?>
        <!--end .offcanvas-->
        <!-- END OFFCANVAS RIGHT -->
        </div>
        <!--end #base-->
        <!-- END BASE -->
        <!-- BEGIN JAVASCRIPT -->
        <?php
        $scripts = array(
            'public/js/libs/jquery/jquery-1.11.2.min.js',
            'public/js/libs/jquery/jquery-migrate-1.2.1.min.js',
            'public/js/libs/bootstrap/bootstrap.min.js',
            'public/js/libs/spin.js/spin.min.js',
            'public/js/libs/autosize/jquery.autosize.min.js',
            'public/js/libs/moment/moment.min.js',
            'public/js/libs/flot/jquery.flot.min.js ',     
            'public/js/libs/flot/jquery.flot.time.min.js',
            'public/js/libs/flot/jquery.flot.resize.min.js',
            'public/js/libs/flot/jquery.flot.orderBars.js ',     
            'public/js/libs/flot/jquery.flot.pie.js',
            'public/js/libs/flot/curvedLines.js',
            'public/js/libs/jquery-knob/jquery.knob.min.js',
            'public/js/libs/sparkline/jquery.sparkline.min.js',
            'public/js/libs/nanoscroller/jquery.nanoscroller.min.js',
            'public/js/libs/d3/d3.min.js',
            'public/js/libs/d3/d3.v3.js',
            'public/js/libs/rickshaw/rickshaw.min.js',
            'public/js/core/source/App.js',
            'public/js/core/source/AppNavigation.js',
            'public/js/core/source/AppOffcanvas.js',
            'public/js/core/source/AppCard.js',
            'public/js/core/source/AppForm.js',
            'public/js/core/source/AppNavSearch.js',
            'public/js/core/source/AppVendor.js',
            'public/js/core/demo/Demo.js',
            'public/js/core/demo/DemoDashboard.js'
        );
        foreach($scripts as $js) {
            echo '<script src="'.site_url($js).'"></script>';
        }
        ?>
            <!-- END JAVASCRIPT -->
            </body>

            </html>