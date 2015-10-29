<? //=pr($novidade);exit();?>
<section class="main">
    <section class="product">
        <section class="product-info">
            <div class="container">
                <div class="row">

                    <div class="span4">
                        <div class="product-images">
                            <div class="box">
                                <div class="primary">
                                    <img src="<?= $admSite ?>img/thumbnails/escavadeira_01.jpg"
                                         data-zoom-image="escavadeira_01"
                                         alt="Escavadeira"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="span8">

                        <!-- Product content -->
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
                                <!-- End Tab panels' navigation -->


                                <!-- Tab panels container -->

                                <div class="tab-content">

                                    <!-- Product tab -->
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
                                    </div>
                                    <!-- End id="product" -->
                                    <!-- Description tab -->
                                    <div class="tab-pane" id="description">
                                        <div class="details">
                                            <h4>Participantes</h4>
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
                                                                <a href="#myModal" role="button" data-toggle="modal">
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
                                                                <li><p> <?php echo $fotos['User']['username']; ?></p>
                                                                </li>
                                                                <li><p> <?php echo $imagem['Course']['Nome']; ?></p>
                                                                </li>
                                                                <li><p> <?php echo $fotos['User']['Email']; ?></p></li>
                                                            </ul>
                                                        </div>

                                                        <div class="span4">
                                                            <ul>
                                                                <li><p> <?php echo $fotos['User']['Telefone']; ?></p>
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
                                                                <li><a href="<?=$admSite?>Projetos/view/<?php echo $pjc['id']; ?>"> <?php echo $pjc['Titulo']; ?> </a></li>
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


                                        <!-- Button to trigger modal -->
                                        <!-- Modal -->

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
                                                        <img src="<?= $img ?>" style="width: 200px;">
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
                        <!-- End class="product-content" -->

                    </div>


                </div>
            </div>
        </section>


    </section>


</section>