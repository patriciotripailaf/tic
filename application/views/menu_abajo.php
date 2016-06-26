         </div> <!-- container -->

                </div> <!-- content -->

          <footer class="footer">
                    2016 © Club chile ajedrez.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


          

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.scrollTo.min.js"></script>

        <!-- Datatables-->
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?php echo base_url(); ?>/light/assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>
    </body>
</html>