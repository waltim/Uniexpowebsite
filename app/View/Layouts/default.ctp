<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">

<head>
    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>UNIEXPO | Plataforma para Divulgação</title>


    <link rel="stylesheet" type="text/css" href="<?= $admSite ?>css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?= $admSite ?>css/bootstrap-responsive.css"/>
    <link rel="stylesheet" type="text/css" href="<?= $admSite ?>css/fonts/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="<?= $admSite ?>css/jquery.bxslider.css"/>

    <!-- Comment following two lines to use LESS -->
    <link rel="stylesheet" type="text/css" href="<?= $admSite ?>css/color-schemes/core.css"/>
    <link rel="stylesheet" type="text/css" href="<?= $admSite ?>css/color-schemes/turquoise.css" id="color_scheme"/>

    <!-- Uncomment following three lines to use LESS -->
    <!--<link rel="stylesheet/less" type="text/css" href="css/less/core.less">
    <link rel="stylesheet/less" type="text/css" href="css/less/turquoise.less" id="color_scheme" >
    <script src="js/less.js" type="text/javascript"></script>-->


    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,300italic,400,400italic,700,700italic|Shadows+Into+Light"
        rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>


    <script type="text/javascript" src="<?= $admSite ?>js/jquery-ui-1.10.2.custom.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/jquery.easing-1.3.min.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/jquery.sharrre-1.3.4.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/jquery.gmap3.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/jquery.tweet.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/imagesloaded.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/la_boutique.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/menu.js"></script>
    <script type="text/javascript" src="<?= $admSite ?>js/jquery.bxslider.min.js"></script>
    <!--preview only-->
    <script type="text/javascript" src="<?= $admSite ?>js/jquery.cookie.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<div class="wrapper">

    <div class="header">
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="logo">
                            <a href="http://www.unipam.edu.br" title="Unipam">
                                <img src="<?= $admSite ?>img/logo.png" alt="votacao" class="img_responsive"/>
                            </a>
                        </div>
                    </div>
                    <div class="span6 ">
                        <div class="logar pull-right">
                            <a href="<?=$admLocal?>Users/perfil" target="_blank" title="Acesse o painel">
                                Área do Aluno
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End class="header" -->
    <!-- Navigation -->
    <nav class="navigation">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>


                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse menu ">
                        <ul class="navbar navbar-nav">
                            <li><a href="<?= $admSite ?>Home/index">INÍCIO</a></li>
                            <li><a href="<?= $admSite ?>Projetos">PROJETOS</a></li>
                            <li><a href="<?= $admSite ?>Sobre">SOBRE</a></li>
                            <li><a href="<?= $admSite ?>Tutoriais">TUTORIAIS</a></li>
                            <li><a href="<?= $admSite ?>Contato">CONTATO</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>


    <div id="content">

        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>

    <section class="patrocinadores">
        <div class="container">
            <div class="row">
                <div class="span2">
                    <a href=""><img class="img_responsive" src="<?= $admSite ?>img/patrocinadores.jpg"
                                    alt="patrocinadores"/></a>
                </div>
                <div class="span2">
                    <a href=""><img class="img_responsive" src="<?= $admSite ?>img/patrocinadores.jpg"
                                    alt="patrocinadores"/></a>
                </div>
                <div class="span2">
                    <a href=""><img class="img_responsive" src="<?= $admSite ?>img/patrocinadores.jpg"
                                    alt="patrocinadores"/></a>
                </div>
                <div class="span2">
                    <a href=""><img class="img_responsive" src="<?= $admSite ?>img/patrocinadores.jpg"
                                    alt="patrocinadores"/></a>
                </div>
                <div class="span2">
                    <a href=""><img class="img_responsive" src="<?= $admSite ?>img/patrocinadores.jpg"
                                    alt="patrocinadores"/></a>
                </div>
                <div class="span2">
                    <a href=""><img class="img_responsive" src="<?= $admSite ?>img/patrocinadores.jpg"
                                    alt="patrocinadores"/></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End id="footer" -->
    <!-- Credits bar -->
    <div class="credits">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <p>&copy; 2015 | criado por: <a href="https://br.linkedin.com/pub/walter-lucas/b9/635/688" target="_blank"
                                      title="Design by: Walter Lucas">Walter Lucas</a>&middot; Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End id="newsletter_subscribe" -->
</div>
<!-- I'm watching you -->
<script type="text/javascript">
    var sc_project = 9238432;
    var sc_invisible = 1;
    var sc_security = "e08559e3";
    var sc_https = 1;
    var sc_remove_link = 1;
    var scJsHost = (("https:" == document.location.protocol) ?
        "https://secure." : "http://www.");
    document.write("<sc" + "ript type='text/javascript' src='" +
        scJsHost +
        "statcounter.com/counter/counter.js'></" + "script>");
</script>
<!-- Okay I'll stop watching you -->
<script type="text/javascript">
    $('.bxslider').bxSlider({
        pager: false,
        controls: true,
    });
</script>
</body>
</html>
