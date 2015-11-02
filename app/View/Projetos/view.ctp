<!-- Add jQuery library -->
<script type="text/javascript" src="<?= $admSite ?>lib/jquery-1.10.1.min.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?= $admSite ?>lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?= $admSite ?>source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?= $admSite ?>source/jquery.fancybox.css?v=2.1.5" media="screen"/>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?= $admSite ?>source/helpers/jquery.fancybox-thumbs.css?v=1.0.7"/>
<script type="text/javascript" src="<?= $admSite ?>source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


<div id="fb-root"></div>
<script>

    $('#logado').ready(function () {
        $('#logado').hide();
    });
    //initializing API
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1238069429553456',
            xfbml: true,
            status: true,
            cookie: true,
            version: 'v2.5'
        });
        FB.getLoginStatus(function (response) {
            if (response.status === 'connected') {
                FB.api(
                    "/me",
                    function (response) {
                        console.log("dadosDoFB", response);
                        $uid = response.id;
                        $pic = response.picture;
                        $nome = response.name;

                        document.getElementById('nome').value = $nome;
                        document.getElementById('foto').value = '<img src="http://graph.facebook.com/' + response.id + '/picture" />';
                        document.getElementById('faceId').value = $uid;
                        $('#logado').show();
                        $('#logar').hide();
                    });

            } else if (response.status === 'not_authorized') {
                $('#logado').hide();
            } else {
                $('#logado').hide();
            }
        })
    };

    (function () {
        var e = document.createElement('script');
        e.async = true;
        e.src = document.location.protocol +
            '//connect.facebook.net/pt_BR/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());


    function loginFb() {
        FB.login(function (response) {
            if (response.authResponse) {
                // $token = FB.getAccessToken();


                FB.api(
                    "/me",
                    function (response) {
                        console.log("dadosDoFB", response);
                        $uid = response.id;
                        $pic = response.picture;
                        $nome = response.name;

                        document.getElementById('nome').value = $nome;
                        document.getElementById('foto').value = '<img src="http://graph.facebook.com/' + response.id + '/picture"/>';
                        document.getElementById('faceId').value = $uid;
                        $('#logado').show();

                    });
                $('#logado').show();

            } else {

            }
        }, {scope: 'email'});


    }

</script>
<section class="main">
    <section class="product">
        <section class="product-info">
            <div class="container">
                <div class="row">
                    <div class="span8">

                        <div class="product-content">
                            <div class="box">

                                <!-- Tab panels' navigation -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#product" data-toggle="tab">
                                            <i class="icon-reorder icon-large"></i>
                                            <span class="hidden-phone">Projeto</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#description" data-toggle="tab">
                                            <i class="icon-info-sign icon-large"></i>
                                            <span class="hidden-phone">Informações</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#galeria" data-toggle="tab">
                                            <i class="icon-picture icon-large"></i>
                                            <span class="hidden-phone">Imagens</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#shipping" data-toggle="tab">
                                            <i class="icon-play icon-large"></i>
                                            <span class="hidden-phone">Vídeos</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#ratings" data-toggle="tab">
                                            <i class="icon-heart icon-large"></i>
                                            <span class="hidden-phone">Classificações</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">


                                    <div class="tab-pane active" id="product">


                                        <div class="details">
                                            <h1><?php echo $novidade['Project']['Titulo']; ?></h1>

                                            <div class="prices">
                                                <span class="price"><?php echo $novidade['Course']['Nome']; ?></span>
                                            </div>
                                        </div>

                                        <div class="short-description">
                                            <p>
                                                <?php echo $novidade['Project']['Descricao']; ?>
                                            </p>
                                        </div>
                                        <?php if (!empty($arquivo[0]['Archive'])): ?>
                                            <?php

                                            $arq = explode("\\", $arquivo[0]['Archive']['dir']);
                                            $arq = implode('/', $arq);
                                            $arq = $admLocal . $arq . '/' . $arquivo[0]['Archive']['filename'];
                                            ?>
                                            <p style="margin-left: 510px">Vizualizar artigo do projeto</p>
                                            <a href="<?= $arq ?>" target="_blank"><img
                                                    src="<?= $admSite ?>img/arquivo.png"
                                                    style=" width: 86px; margin-left: 600px"></a>
                                        <?php endif; ?>

                                        <div onclick="statusFacebook()" id="logado">

                                            <form id="RecipeEditForm" method="post"
                                                  action="<?= $admSite ?>Projetos/votar/<?php echo $novidade['Project']['id']; ?>">

                                                <?php echo $this->Form->input('foto', array('type' => 'hidden')); ?>
                                                <?php echo $this->Form->input('nome', array('type' => 'hidden')); ?>
                                                <?php echo $this->Form->input('faceId', array('type' => 'hidden')); ?>

                                                <div class="row-fluid">
                                                    <div class="span12">
                                                        <button class="btn btn-primary">
                                                            <input class="btn btn-large btn-primary" type="submit"
                                                                   value="Votar">
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <button onclick="loginFb()" id="logar" class="btn btn-primary">Logar
                                                    Facebook para
                                                    votar!
                                                </button>
                                            </div>
                                        </div>
                                        <br>
                                        <?php if (isset($erro)):
                                            echo $erro;
                                        endif; ?>
                                    </div>


                                    <!-- Description tab -->
                                    <div class="tab-pane" id="description">
                                        <div class="details">
                                            <h4>Participantes</h4>
                                        </div>
                                        <?php if (empty($foto)): ?>
                                            <?php $aluno = $novidade['User']; ?>
                                            <?php if (!empty($aluno['UserImage'])): ?>
                                                <?php if ($aluno['UserImage']['Aceito'] == 'S'): ?>
                                                    <?php
                                                    $aluno['UserImage']['dir'] = explode('\\', $aluno['UserImage']['dir']);
                                                    $aluno['UserImage']['dir'] = implode('/', $aluno['UserImage']['dir']);
                                                    $img = $admLocal . $aluno['UserImage']['dir'] . "/" . $aluno['UserImage']['filename'];
                                                    ?>
                                                    <a href="#<?php echo $aluno['id']; ?>" role="button"
                                                       data-toggle="modal">
                                                        <img src="<?= $img ?>" style="width: 89px; height: 89px" \>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if (empty($aluno['UserImage'])): ?>
                                                <?php if ($aluno['Sexo'] == 'Masculino') : ?>
                                                    <a href="#<?php echo $aluno['id']; ?>" role="button"
                                                       data-toggle="modal">
                                                        <img src="<?= $admLocal ?>img/masculino.jpg"
                                                             style="width: 89px">
                                                    </a>
                                                <?php endif; ?>
                                                <?php if ($aluno['Sexo'] == 'Feminino') : ?>
                                                    <a href="#<?php echo $aluno['id']; ?>" role="button"
                                                       data-toggle="modal">
                                                        <img src="<?= $admLocal ?>img/feminino.jpg"
                                                             style="width: 89px">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <div id="<?php echo $aluno['id']; ?>"
                                                 class="modal hide fade modal-wide"
                                                 tabindex="-1"
                                                 role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×
                                                    </button>
                                                    <h3 id="myModalLabel">Ficha do criador do projeto</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="header-modal">
                                                        <div class="span2">
                                                            <?php if (!empty($aluno['UserImage'])): ?>

                                                                <?php
                                                                $aluno['UserImage']['dir'] = explode('\\', $aluno['UserImage']['dir']);
                                                                $aluno['UserImage']['dir'] = implode('/', $aluno['UserImage']['dir']);
                                                                $img = $admLocal . $aluno['UserImage']['dir'] . "/" . $aluno['UserImage']['filename'];
                                                                ?>
                                                                <a href="#myModal" role="button" data-toggle="modal">
                                                                    <img src="<?= $img ?>" style="width: 120px;" \>
                                                                </a>

                                                            <?php endif; ?>
                                                            <?php if (empty($aluno['UserImage'])): ?>
                                                                <?php if ($aluno['Sexo'] == 'Masculino') : ?>
                                                                    <a href="#myModal" role="button"
                                                                       data-toggle="modal">
                                                                        <img src="<?= $admLocal ?>img/masculino.jpg"
                                                                             style="width: 120px">
                                                                    </a>
                                                                <?php endif; ?>
                                                                <?php if ($aluno['Sexo'] == 'Feminino') : ?>
                                                                    <a href="#myModal" role="button"
                                                                       data-toggle="modal">
                                                                        <img src="<?= $admLocal ?>img/feminino.jpg"
                                                                             style="width: 120px">
                                                                    </a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="span4">
                                                            <ul>
                                                                <li><p> <?php echo $aluno['username']; ?></p>
                                                                </li>
                                                                <li><p> <?php echo $aluno['Course']['Nome']; ?></p>
                                                                </li>
                                                                <li><p> <?php echo $aluno['Email']; ?></p></li>
                                                            </ul>
                                                        </div>

                                                        <div class="span4">
                                                            <ul>
                                                                <li><p> <?php echo $aluno['Telefone']; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p> <?php echo $aluno['Semester']['Descricao']; ?></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4>Redes Sociais</h4>

                                                        <div class="span4" style="float: right">
                                                            <ul>
                                                                <?php
                                                                $i = 0;
                                                                foreach ($aluno['Social'] as $novidadeImage): ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Facebook') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/facebook-icon.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Instagram') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/instagram.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Twitter') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/twitter.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Linkedin') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/linkedin.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Youtube') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/Youtube.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <h4>Habilidades</h4>

                                                    <div class="span5">
                                                        <ul>
                                                            <?php
                                                            $i = 0;
                                                            foreach ($aluno['SkillUser'] as $habilidades): ?>
                                                                <li> <?php echo $habilidades['Skill']['Nome']; ?> </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                    <h4>Projetos</h4>

                                                    <div class="span5">
                                                        <ul>
                                                            <?php
                                                            $i = 0;
                                                            foreach ($aluno['ProjectUser'] as $proj): ?>
                                                                <?php if ($proj['Aceito'] == 'S'): ?>
                                                                    <li>
                                                                        <a href="<?= $admSite ?>Projetos/view/<?php echo $proj['Project']['id']; ?>"> <?php echo $proj['Project']['Titulo']; ?> </a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>

                                                    <div class="span5">
                                                        <ul>
                                                            <?php $curriculo = $aluno['Resume']; ?>
                                                            <?php if (!empty($curriculo)): ?>
                                                                <h4>Abrir currículo do aluno</h4>
                                                                <?php $arq = explode("\\", $curriculo['dir']);
                                                                $arq = implode('/', $arq);
                                                                $arq = $admLocal . $arq . '/' . $curriculo['filename'];
                                                                ?>
                                                                <a href="<?= $arq ?>" target="_blank"><img
                                                                        src="<?= $admSite ?>img/curriculo.png"
                                                                        style=" width: 86px;"></a>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" data-dismiss="modal"
                                                            aria-hidden="true">
                                                        Fechar
                                                    </button>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($foto)): ?>
                                            <?php $dono = $foto[0]['Project']; ?>
                                            <?php $aluno = $dono['User']; ?>
                                            <?php if (!empty($aluno['UserImage'])): ?>
                                                <?php if ($aluno['UserImage']['Aceito'] == 'S'): ?>
                                                    <?php
                                                    $aluno['UserImage']['dir'] = explode('\\', $aluno['UserImage']['dir']);
                                                    $aluno['UserImage']['dir'] = implode('/', $aluno['UserImage']['dir']);
                                                    $img = $admLocal . $aluno['UserImage']['dir'] . "/" . $aluno['UserImage']['filename'];
                                                    ?>
                                                    <a href="#<?php echo $aluno['id']; ?>" role="button"
                                                       data-toggle="modal">
                                                        <img src="<?= $img ?>" style="width: 89px; height: 89px" \>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if (empty($aluno['UserImage'])): ?>
                                                <?php if ($aluno['Sexo'] == 'Masculino') : ?>
                                                    <a href="#<?php echo $aluno['id']; ?>" role="button"
                                                       data-toggle="modal">
                                                        <img src="<?= $admLocal ?>img/masculino.jpg"
                                                             style="width: 89px">
                                                    </a>
                                                <?php endif; ?>
                                                <?php if ($aluno['Sexo'] == 'Feminino') : ?>
                                                    <a href="#<?php echo $aluno['id']; ?>" role="button"
                                                       data-toggle="modal">
                                                        <img src="<?= $admLocal ?>img/feminino.jpg"
                                                             style="width: 89px">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <div id="<?php echo $aluno['id']; ?>"
                                                 class="modal hide fade modal-wide"
                                                 tabindex="-1"
                                                 role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×
                                                    </button>
                                                    <h3 id="myModalLabel">Ficha do criador do projeto</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="header-modal">
                                                        <div class="span2">
                                                            <?php if (!empty($aluno['UserImage'])): ?>

                                                                <?php
                                                                $aluno['UserImage']['dir'] = explode('\\', $aluno['UserImage']['dir']);
                                                                $aluno['UserImage']['dir'] = implode('/', $aluno['UserImage']['dir']);
                                                                $img = $admLocal . $aluno['UserImage']['dir'] . "/" . $aluno['UserImage']['filename'];
                                                                ?>
                                                                <a href="#myModal" role="button" data-toggle="modal">
                                                                    <img src="<?= $img ?>" style="width: 120px;" \>
                                                                </a>

                                                            <?php endif; ?>
                                                            <?php if (empty($aluno['UserImage'])): ?>
                                                                <?php if ($aluno['Sexo'] == 'Masculino') : ?>
                                                                    <a href="#myModal" role="button"
                                                                       data-toggle="modal">
                                                                        <img src="<?= $admLocal ?>img/masculino.jpg"
                                                                             style="width: 120px">
                                                                    </a>
                                                                <?php endif; ?>
                                                                <?php if ($aluno['Sexo'] == 'Feminino') : ?>
                                                                    <a href="#myModal" role="button"
                                                                       data-toggle="modal">
                                                                        <img src="<?= $admLocal ?>img/feminino.jpg"
                                                                             style="width: 120px">
                                                                    </a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="span4">
                                                            <ul>
                                                                <li><p> <?php echo $aluno['username']; ?></p>
                                                                </li>
                                                                <li><p> <?php echo $aluno['Course']['Nome']; ?></p>
                                                                </li>
                                                                <li><p> <?php echo $aluno['Email']; ?></p></li>
                                                            </ul>
                                                        </div>

                                                        <div class="span4">
                                                            <ul>
                                                                <li><p> <?php echo $aluno['Telefone']; ?></p>
                                                                </li>
                                                                <li>
                                                                    <p> <?php echo $aluno['Semester']['Descricao']; ?></p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <h4>Redes Sociais</h4>

                                                        <div class="span4" style="float: right">
                                                            <ul>
                                                                <?php
                                                                $i = 0;
                                                                foreach ($aluno['Social'] as $novidadeImage): ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Facebook') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/facebook-icon.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Instagram') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/instagram.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Twitter') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/twitter.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Linkedin') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/linkedin.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                    <?php if ($novidadeImage['social_types']['Descricao'] == 'Youtube') : ?>
                                                                        <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                           target="_blank"> <img
                                                                                src="<?= $admLocal ?>img/Youtube.png"
                                                                                style="width: 56px"></a>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <h4>Habilidades</h4>

                                                    <div class="span5">
                                                        <ul>
                                                            <?php
                                                            $i = 0;
                                                            foreach ($aluno['SkillUser'] as $habilidades): ?>
                                                                <li> <?php echo $habilidades['Skill']['Nome']; ?> </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                    <h4>Projetos</h4>

                                                    <div class="span5">
                                                        <ul>
                                                            <?php
                                                            $i = 0;
                                                            foreach ($aluno['ProjectUser'] as $proj): ?>
                                                                <?php if ($proj['Aceito'] == 'S'): ?>
                                                                    <li>
                                                                        <a href="<?= $admSite ?>Projetos/view/<?php echo $proj['Project']['id']; ?>"> <?php echo $proj['Project']['Titulo']; ?> </a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>

                                                    <div class="span5">
                                                        <ul>
                                                            <?php $curriculo = $aluno['Resume']; ?>
                                                            <?php if (!empty($curriculo)): ?>
                                                                <h4>Abrir currículo do aluno</h4>
                                                                <?php $arq = explode("\\", $curriculo['dir']);
                                                                $arq = implode('/', $arq);
                                                                $arq = $admLocal . $arq . '/' . $curriculo['filename'];
                                                                ?>
                                                                <a href="<?= $arq ?>" target="_blank"><img
                                                                        src="<?= $admSite ?>img/curriculo.png"
                                                                        style=" width: 86px;"></a>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" data-dismiss="modal"
                                                            aria-hidden="true">
                                                        Fechar
                                                    </button>
                                                </div>
                                            </div>
                                            <?php
                                            $i = 0;
                                            foreach ($foto as $fotos): ?>
                                                <?php $imagem = $fotos['User']; ?>

                                                <?php if (!empty($imagem['UserImage'])): ?>
                                                    <?php if ($imagem['UserImage']['Aceito'] == 'S'): ?>
                                                        <?php
                                                        $imagem['UserImage']['dir'] = explode('\\', $imagem['UserImage']['dir']);
                                                        $imagem['UserImage']['dir'] = implode('/', $imagem['UserImage']['dir']);
                                                        $img = $admLocal . $imagem['UserImage']['dir'] . "/" . $imagem['UserImage']['filename'];
                                                        ?>
                                                        <a href="#<?php echo $fotos['User']['id']; ?>" role="button"
                                                           data-toggle="modal">
                                                            <img src="<?= $img ?>" style="width: 89px; height: 89px" \>
                                                        </a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <?php if (empty($imagem['UserImage'])): ?>
                                                    <?php if ($imagem['Sexo'] == 'Masculino') : ?>
                                                        <a href="#<?php echo $fotos['User']['id']; ?>" role="button"
                                                           data-toggle="modal">
                                                            <img src="<?= $admLocal ?>img/masculino.jpg"
                                                                 style="width: 89px">
                                                        </a>
                                                    <?php endif; ?>
                                                    <?php if ($imagem['Sexo'] == 'Feminino') : ?>
                                                        <a href="#<?php echo $fotos['User']['id']; ?>" role="button"
                                                           data-toggle="modal">
                                                            <img src="<?= $admLocal ?>img/feminino.jpg"
                                                                 style="width: 89px">
                                                        </a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <div id="<?php echo $fotos['User']['id']; ?>"
                                                     class="modal hide fade modal-wide"
                                                     tabindex="-1"
                                                     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×
                                                        </button>
                                                        <h3 id="myModalLabel">Ficha do participante</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="header-modal">
                                                            <div class="span2">
                                                                <?php if (!empty($imagem['UserImage'])): ?>

                                                                    <?php
                                                                    $imagem['UserImage']['dir'] = explode('\\', $imagem['UserImage']['dir']);
                                                                    $imagem['UserImage']['dir'] = implode('/', $imagem['UserImage']['dir']);
                                                                    $img = $admLocal . $imagem['UserImage']['dir'] . "/" . $imagem['UserImage']['filename'];
                                                                    ?>
                                                                    <a href="#myModal" role="button"
                                                                       data-toggle="modal">
                                                                        <img src="<?= $img ?>" style="width: 120px;" \>
                                                                    </a>

                                                                <?php endif; ?>
                                                                <?php if (empty($imagem['UserImage'])): ?>
                                                                    <?php if ($imagem['Sexo'] == 'Masculino') : ?>
                                                                        <a href="#myModal" role="button"
                                                                           data-toggle="modal">
                                                                            <img src="<?= $admLocal ?>img/masculino.jpg"
                                                                                 style="width: 120px">
                                                                        </a>
                                                                    <?php endif; ?>
                                                                    <?php if ($imagem['Sexo'] == 'Feminino') : ?>
                                                                        <a href="#myModal" role="button"
                                                                           data-toggle="modal">
                                                                            <img src="<?= $admLocal ?>img/feminino.jpg"
                                                                                 style="width: 120px">
                                                                        </a>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="span4">
                                                                <ul>
                                                                    <li>
                                                                        <p> <?php echo $fotos['User']['username']; ?></p>
                                                                    </li>
                                                                    <li><p> <?php echo $imagem['Course']['Nome']; ?></p>
                                                                    </li>
                                                                    <li><p> <?php echo $fotos['User']['Email']; ?></p>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="span4">
                                                                <ul>
                                                                    <li>
                                                                        <p> <?php echo $fotos['User']['Telefone']; ?></p>
                                                                    </li>
                                                                    <li>
                                                                        <p> <?php echo $imagem['Semester']['Descricao']; ?></p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h4>Redes Sociais</h4>

                                                            <div class="span4" style="float: right">
                                                                <ul>
                                                                    <?php
                                                                    $i = 0;
                                                                    foreach ($imagem['Social'] as $novidadeImage): ?>
                                                                        <?php if ($novidadeImage['social_types']['Descricao'] == 'Facebook') : ?>
                                                                            <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                               target="_blank"> <img
                                                                                    src="<?= $admLocal ?>img/facebook-icon.png"
                                                                                    style="width: 56px"></a>
                                                                        <?php endif; ?>
                                                                        <?php if ($novidadeImage['social_types']['Descricao'] == 'Instagram') : ?>
                                                                            <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                               target="_blank"> <img
                                                                                    src="<?= $admLocal ?>img/instagram.png"
                                                                                    style="width: 56px"></a>
                                                                        <?php endif; ?>
                                                                        <?php if ($novidadeImage['social_types']['Descricao'] == 'Twitter') : ?>
                                                                            <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                               target="_blank"> <img
                                                                                    src="<?= $admLocal ?>img/twitter.png"
                                                                                    style="width: 56px"></a>
                                                                        <?php endif; ?>
                                                                        <?php if ($novidadeImage['social_types']['Descricao'] == 'Linkedin') : ?>
                                                                            <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                               target="_blank"> <img
                                                                                    src="<?= $admLocal ?>img/linkedin.png"
                                                                                    style="width: 56px"></a>
                                                                        <?php endif; ?>
                                                                        <?php if ($novidadeImage['social_types']['Descricao'] == 'Youtube') : ?>
                                                                            <a href="<?php echo $novidadeImage['Link']; ?>"
                                                                               target="_blank"> <img
                                                                                    src="<?= $admLocal ?>img/Youtube.png"
                                                                                    style="width: 56px"></a>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <h4>Habilidades</h4>

                                                        <div class="span5">
                                                            <ul>
                                                                <?php
                                                                $i = 0;
                                                                foreach ($imagem['SkillUser'] as $habilidades): ?>
                                                                    <?php $comp = $habilidades['Skill']; ?>
                                                                    <li> <?php echo $comp['Nome']; ?> </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>

                                                        <div class="clearfix"></div>
                                                        <h4>Projetos</h4>

                                                        <div class="span5">
                                                            <ul>
                                                                <?php
                                                                $i = 0;
                                                                foreach ($imagem['ProjectUser'] as $proj): ?>
                                                                    <?php $pjc = $proj['Project']; ?>
                                                                    <?php if ($proj['Aceito'] == 'S'): ?>
                                                                        <li>
                                                                            <a href="<?= $admSite ?>Projetos/view/<?php echo $pjc['id']; ?>"> <?php echo $pjc['Titulo']; ?> </a>
                                                                        </li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>

                                                        <div class="span5">
                                                            <ul>
                                                                <?php $curriculo = $imagem['Resume']; ?>
                                                                <?php if (!empty($curriculo)): ?>
                                                                    <h4>Abrir currículo do aluno</h4>
                                                                    <?php $arq = explode("\\", $curriculo['dir']);
                                                                    $arq = implode('/', $arq);
                                                                    $arq = $admLocal . $arq . '/' . $curriculo['filename'];
                                                                    ?>
                                                                    <a href="<?= $arq ?>" target="_blank"><img
                                                                            src="<?= $admSite ?>img/curriculo.png"
                                                                            style=" width: 86px;"></a>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" data-dismiss="modal"
                                                                aria-hidden="true">
                                                            Fechar
                                                        </button>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <br>
                                        <br>

                                        <p>
                                            Tema: <?php echo $novidade['Theme']['Descricao']; ?>
                                        </p>

                                        <p>
                                            Tipo do projeto: <?php echo h($novidade['ProjectType']['Nome']); ?>
                                        </p>

                                        <p>
                                            Semestre: <?php echo h($novidade['Semester']['Descricao']); ?>
                                        </p>

                                        <p>
                                            Data de
                                            Criação: <?php echo date("d/m/Y", strtotime($novidade['Project']['created'])); ?>
                                        </p>

                                    </div>


                                    <!-- End id="description" -->

                                    <!-- Shipping tab -->
                                    <div class="tab-pane" id="shipping">
                                        <p>Vídeo do projeto</p>
                                        <?php
                                        $i = 0;
                                        foreach ($novidade['Movie'] as $videos): ?>
                                            <?php if (!empty($videos['Aceito'] == 'S')): ?>
                                                <?php
                                                $linkVideo = explode("v=", $videos['Link']);
                                                if (!is_array($linkVideo)) {
                                                    $linkVideo = explode("youtu.be/", $videos['Link']);

                                                };
                                                $linkVideo = array_pop($linkVideo);
                                                ?>
                                                <iframe width="300" height="200"
                                                        src="//www.youtube.com/embed/<?= $linkVideo ?>"
                                                        frameborder="0" allowfullscreen>

                                                </iframe>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>

                                    <div class="tab-pane" id="galeria">
                                        <p>Galeria de fotos do projeto</p>
                                        <ul>
                                            <?php
                                            $i = 0;
                                            foreach ($novidade['ProjectImage'] as $novaimg): ?>
                                                <?php if (!empty($novaimg['Aceito'] == 'S')): ?>
                                                    <?php
                                                    $novaimg['dir'] = explode('\\', $novaimg['dir']);
                                                    $novaimg['dir'] = implode('/', $novaimg['dir']);
                                                    $img = $admLocal . $novaimg['dir'] . "/" . $novaimg['filename'];
                                                    ?>
                                                    <li style="list-style: none; padding-bottom: 5px">
                                                        <a class="fancybox-thumbs" data-fancybox-group="thumb"
                                                           href="<?= $img ?>"><img
                                                                src="<?= $img ?>" width="168" height="113" alt="Fotos"/></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>


                                    <!-- Ratings tab -->
                                    <div class="tab-pane" id="ratings">
                                        <div class="ratings-items">

                                            <article class="rating-item">
                                                <div class="row-fluid">
                                                    <div class="span9">
                                                        <h5>Votos : <?php echo $novidade['Project']['Votos']; ?> </h5>

                                                        <div class="span9123">
                                                            <ul>
                                                                <h5>Pessoas que votaram neste projeto</h5>
                                                                <?php
                                                                $i = 0;
                                                                foreach ($novidade['Visitor'] as $projeto): ?>
                                                                    <?php if ($i <= 30): ?>
                                                                    <li style="list-style: none">
                                                                        <?php echo $projeto['foto']?>
                                                                    </li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                </div>
                                            </article>
                                            <hr/>
                                        </div>


                                    </div>
                                    <!-- End id="ratings" -->


                                </div>
                                <!-- End tab panels container -->

                            </div>

                        </div>


                    </div>


                </div>
            </div>
        </section>

    </section>

</section>

<script type="text/javascript">
    $(document).ready(function () {
        /*
         *  Simple image gallery. Uses default settings
         */

        $('.fancybox').fancybox();

        /*
         *  Different effects
         */

        // Change title type, overlay closing speed
        $(".fancybox-effects-a").fancybox({
            helpers: {
                title: {
                    type: 'outside'
                },
                overlay: {
                    speedOut: 0
                }
            }
        });

        // Disable opening and closing animations, change title type
        $(".fancybox-effects-b").fancybox({
            openEffect: 'none',
            closeEffect: 'none',

            helpers: {
                title: {
                    type: 'over'
                }
            }
        });

        // Set custom style, close if clicked, change title type and overlay color
        $(".fancybox-effects-c").fancybox({
            wrapCSS: 'fancybox-custom',
            closeClick: true,

            openEffect: 'none',

            helpers: {
                title: {
                    type: 'inside'
                },
                overlay: {
                    css: {
                        'background': 'rgba(238,238,238,0.85)'
                    }
                }
            }
        });

        // Remove padding, set opening and closing animations, close if clicked and disable overlay
        $(".fancybox-effects-d").fancybox({
            padding: 0,

            openEffect: 'elastic',
            openSpeed: 150,

            closeEffect: 'elastic',
            closeSpeed: 150,

            closeClick: true,

            helpers: {
                overlay: null
            }
        });

        /*
         *  Button helper. Disable animations, hide close button, change title type and content
         */

        $('.fancybox-buttons').fancybox({
            openEffect: 'none',
            closeEffect: 'none',

            prevEffect: 'none',
            nextEffect: 'none',

            closeBtn: false,

            helpers: {
                title: {
                    type: 'inside'
                },
                buttons: {}
            },

            afterLoad: function () {
                this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
            }
        });

        $('.fancybox-thumbs').fancybox({
            prevEffect: 'none',
            nextEffect: 'none',

            closeBtn: false,
            arrows: false,
            nextClick: true,

            helpers: {
                thumbs: {
                    width: 50,
                    height: 50
                }
            }
        });
    });
</script>