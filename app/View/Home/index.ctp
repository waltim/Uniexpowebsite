
<section class="main">
    <section class="home">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <ul class="bxslider">
                        <?php
                        foreach ($baners as $baner): ?>
                            <?php if (isset($baner['Baner']['dir'])):

                                $baner['Baner']['dir'] = explode("\\", $baner['Baner']['dir']);
                                $baner['Baner']['dir'] = implode('/', $baner['Baner']['dir']);

                                $img = $admLocal . $baner['Baner']['dir'] . '/' . $baner['Baner']['filename'] ?>
                                <?php if (!empty($baner['Baner']['Link'])): ?>
                                <li><a href="<?= $baner['Baner']['Link'] ?>" target="_blank"><img src="<?php echo $img ?>"/></a></li>
                            <?php endif; ?>
                                <?php if (empty($baner['Baner']['Link'])): ?>
                                <li><img src="<?php echo $img ?>"/></li>
                            <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="span6">
                    <?php
                    $linkVideo = explode("v=", $tutorials['Tutorial']['Link']);
                    if (!is_array($linkVideo)) {
                        $linkVideo = explode("youtu.be/", $tutorials['Tutorial']['Link']);

                    };
                    $linkVideo = array_pop($linkVideo);
                    ?>
                    <iframe width="100%" height="250" src="//www.youtube.com/embed/<?= $linkVideo ?>"
                            frameborder="0" allowfullscreen>

                    </iframe>
                </div>
            </div>
        </div>
        <!-- End class="flexslider" -->
        <section class="featured">
            <div class="container">

                <div class="row">
                    <div class="span9">
                        <div class="servicos">
                            <ul>
                                <?php
                                foreach ($novidades as $novidade): ?>
                                    <li>
                                        <h2><?php echo $novidade['Project']['Titulo']; ?></h2>
                                        <?php if (!empty($novidade['ProjectImage'])): ?>
                                            <?php
                                            $novidade['ProjectImage'][0]['dir'] = explode('\\', $novidade['ProjectImage'][0]['dir']);
                                            $novidade['ProjectImage'][0]['dir'] = implode('/', $novidade['ProjectImage'][0]['dir']);
                                            $img = $admLocal . $novidade['ProjectImage'][0]['dir'] . "/" . $novidade['ProjectImage'][0]['filename'];
                                            ?>
                                            <img src="<?= $img ?>" width="150px">
                                        <?php endif; ?>
                                        <?php if (empty($novidade['ProjectImage'])): ?>
                                            <img src="<?= $admSite . "img/artigo.jpg" ?>" width="150px">
                                        <?php endif; ?>
                                        <p><span>Tema - </span><?php echo $novidade['Theme']['Descricao']; ?></p>

                                        <p><?php echo $novidade['Project']['Descricao']; ?></p>
                                        <a href="<?= $admSite ?>Projetos/view/<?= $novidade['Project']['id'] ?>">Veja
                                            Mais</a>
                                        <hr>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="span3" style="margin-top: 10px;">

                        <div class="widget Categories">
                            <h3 class="widget-title widget-title ">Ranking - 5 mais votados!</h3>
                            <ul>
                                <?php
                                $i = 0;
                                foreach ($novidades as $novidade): ?>
                                    <li>
                                        <a href="<?= $admSite ?>Projetos/view/<?= $novidade['Project']['id'] ?>"
                                           class="title"><?= $i = $i + 1; ?>
                                            - <?php echo $novidade['Project']['Titulo']; ?>
                                            (<?php echo $novidade['Project']['Votos']; ?> votos)</a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<script type="text/javascript">
    $('.bxslider').bxSlider({
        pager: false,
        controls: true,
    });
</script>