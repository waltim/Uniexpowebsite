<footer class="main-footer">
    <div class="pull-right hidden-xs">

    </div>
    <strong>Copyright &copy; 2015 | criado por: <a href="https://br.linkedin.com/pub/walter-lucas/b9/635/688" target="_blank">Walter Lucas</a>.</strong> todos os direitos reservados.
</footer>

<!-- Control Sidebar -->

</div><!-- ./wrapper -->
<?php if ($this->params['controller'] === 'Users' && $this->params['action'] === 'view'): ?>
    <!-- jQuery 2.1.4 -->
    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>

    <!-- Demo -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'UserImages' && $this->params['action'] === 'add'): ?>
    <!-- jQuery 2.1.4 -->
    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>

    <!-- Demo -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'UserImages' && $this->params['action'] === 'edit'): ?>
    <!-- jQuery 2.1.4 -->
    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>

    <!-- Demo -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Users' && $this->params['action'] === 'perfil'): ?>
<!-- jQuery 2.1.4 -->
<script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>

<!-- Demo -->
<script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Users' && $this->params['action'] === 'index'): ?>
    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>

    <!-- Demo -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'SkillUsers' && $this->params['action'] === 'index'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Resumes' && $this->params['action'] === 'index' || $this->params['controller'] === 'Resumes' && $this->params['action'] === 'add'
|| $this->params['controller'] === 'Resumes' && $this->params['action'] === 'edit'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Baners' && $this->params['action'] === 'index' || $this->params['controller'] === 'Baners' && $this->params['action'] === 'add'
    || $this->params['controller'] === 'Baners' && $this->params['action'] === 'edit'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Tutorials' && $this->params['action'] === 'index' || $this->params['controller'] === 'Tutorials' && $this->params['action'] === 'add'
    || $this->params['controller'] === 'Tutorials' && $this->params['action'] === 'edit'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Archives' && $this->params['action'] === 'index' || $this->params['controller'] === 'Archives' && $this->params['action'] === 'add'
    || $this->params['controller'] === 'Archives' && $this->params['action'] === 'edit'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Socials' && $this->params['action'] === 'index' || $this->params['controller'] === 'Socials' && $this->params['action'] === 'add'
    || $this->params['controller'] === 'Socials' && $this->params['action'] === 'edit'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true
            });
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Projects' && $this->params['action'] === 'index' || $this->params['controller'] === 'Projects' && $this->params['action'] === 'view'
    || $this->params['controller'] === 'Projects' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Projects' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable();
            $('#example3').dataTable();
            $('#example4').dataTable();
        });
    </script>
<?php endif; ?>
<?php if ($this->params['controller'] === 'Skills' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Skills' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Skills' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Themes' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Themes' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Themes' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'SocialTypes' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'SocialTypes' && $this->params['action'] === 'edit' || $this->params['controller'] === 'SocialTypes' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Courses' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Courses' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Courses' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Semesters' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Semesters' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Semesters' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Usertypes' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Usertypes' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Usertypes' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Shifts' && $this->params['action'] === 'index'
    || $this->params['controller'] === 'Shifts' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Shifts' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'ProjectImages' && $this->params['action'] === 'edit' || $this->params['controller'] === 'ProjectImages' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
        });
    </script>
<?php endif; ?>

<?php if ($this->params['controller'] === 'Movies' && $this->params['action'] === 'edit' || $this->params['controller'] === 'Movies' && $this->params['action'] === 'add'): ?>

    <script src="<?=$admLocal?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=$admLocal?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=$admLocal?>plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?=$admLocal?>plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?=$admLocal?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?=$admLocal?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?=$admLocal?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=$admLocal?>dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
        });
    </script>
<?php endif; ?>
</body>
</html>