<?php
    if($this->session->userdata("logged_in")){
        
        //$tela ="";
        if(isset($tela)){
            $tela = $tela;
        } else{
            $tela="view_dashboard";
        }
        //var_dump($tela);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Painel de Controle</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo site_url("assetsadm/css/bootstrap/bootstrap.min.css");?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url("assetsadm/css/font-awesome/css/font-awesome.min.css");?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo site_url("assetsadm/css/Ionicons/css/ionicons.min.css");?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo site_url("assetsadm/css/jvectormap/jquery-jvectormap.css");?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url("assetsadm/css/AdminLTE.min.css");?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo site_url("assetsadm/css/skins/_all-skins.min.css");?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    
            <?php               
            $this->load->view("template/header");
            $this->load->view("template/topbar");
            $this->load->view("template/sidebar");
            $this->load->view("template/configbar");
            if ($tela != "") {
               $this->load->view("telas/" . $tela);
            }
            $this->load->view("template/footer");
            $this->load->view("template/controlbar");
            $this->load->view("template/js");
            
            ?>
            <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->  
    
 <!-- jQuery 3 -->
<script src="<?php echo site_url("assetsadm/js/jquery/jquery.min.js");?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo site_url("assetsadm/js/bootstrap/bootstrap.min.js");?>"></script>
<!-- FastClick -->
<script src="<?php echo site_url("assetsadm/js/jsfastclick/fastclick.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url("assetsadm/js/adminlte.min.js");?>"></script>
<!-- Sparkline -->
<script src="<?php echo site_url("assetsadm/js/jquery-sparkline/jquery.sparkline.min.js");?>"></script>
<!-- jvectormap  -->
<script src="<?php echo site_url("assetsadm/js/jvectormap/jquery-jvectormap-1.2.2.min.js");?>"></script>
<script src="<?php echo site_url("assetsadm/js/jvectormap/jquery-jvectormap-world-mill-en.js");?>"></script>
<!-- SlimScroll -->
<script src="<?php echo site_url("assetsadm/js/jquery-slimscroll/jquery.slimscroll.min.js");?>"></script>
<!-- ChartJS -->
<script src="<?php echo site_url("assetsadm/js/chart.js/Chart.js");?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo site_url("assetsadm/js/pages/dashboard2.js");?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo site_url("assetsadm/js/demo.js");?>"></script>
</body>
</html>

<?php
    }else{
        redirect("login");
    }
?>