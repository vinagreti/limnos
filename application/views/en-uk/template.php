
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Limnos">
    <meta name="author" content="Bruno da Silva João">
    <link rel="shortcut icon" href="<?php echo asset_url('img/brazilian.jpg'); ?>">

    <title>Limnos</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset_url('/third_party/bootstrap/css/theme/aqua/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('/third_party/bootstrap/css/font-awesome.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo asset_url('css/global.css'); ?>" rel="stylesheet">

  </head>

  <body>

    <div class="page-nav">

      <div class="container">

        <a href="<?php echo base_url(); ?>"><img src="<?php echo asset_url('img/logo_limnos.png'); ?>" style="height:160px; border-radius:10px;" /></a>

        <a class="page-header-button" href="<?php echo base_url(); ?>">Home</a>
        
        <span class="dropdown page-header-button">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Limnos</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('contato'); ?>">Contact and Location</a></li>
            <li><a href="<?php echo site_url('equipe'); ?>">People and Collaborators</a></li>
            <li><a href="<?php echo site_url('sobre'); ?>">About</a></li>
          </ul>
        </span>

        <a class="page-header-button" href="<?php echo site_url('projetos'); ?>">Projects</a>
        <a class="page-header-button" href="<?php echo site_url('publicacoes'); ?>">Publications</a>
        <a class="page-header-button" href="<?php echo site_url('disciplinas'); ?>">Disciplines</a>
        <a class="page-header-button" href="<?php echo site_url('fotos'); ?>">Photos</a>
        <a class="page-header-button" href="<?php echo site_url('links'); ?>">Links</a>
        <a class="page-header-button" href="<?php echo site_url('language/set/pt-br'); ?>">pt-br</a>

      </div>

    </div>

    <!-- Begin page content -->
    <div class="container">

      <div class="content">

        <?php echo $content; ?>

      </div>

    </div>

    <div class="page-footer">

      <div class="container">
        <a href="http://www.poseco.ufsc.br/"><img class="footer-logo" src="<?php echo asset_url('img/logo_ufsc.gif'); ?>"></a>
        <a href="http://www.ccb.ufsc.br/ecz/"><img class="footer-logo" src="<?php echo asset_url('img/logo_ccb.jpg'); ?>"></a>
        <a href="http://www.ccb.ufsc.br/"><img class="footer-logo" src="<?php echo asset_url('img/logo_ecz.gif'); ?>"></a>
        <a href="http://www.ufsc.br/"><img class="footer-logo" src="<?php echo asset_url('img/logo_poseco.gif'); ?>"></a>
        <p>Federal University of Santa Catarina - Biological Sciences Centre - Ecology and Zoology Department</p>
        <p>Continental Waters Ecology Laboratory</p>
        <p>Campus Trindade</p>
        <p>88010-970 - Florianopolis, SC - Brasil</p>
        <p>Phone: +55 (48) 37219099 Fax: (48) 37215156</p>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo asset_url('/third_party/JQuery/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-transition.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-alert.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-modal.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-dropdown.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-scrollspy.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-tab.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-tooltip.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-popover.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-button.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-collapse.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-carousel.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/third_party/bootstrap/js/bootstrap-typeahead.js'); ?>"></script>

  </body>
</html>