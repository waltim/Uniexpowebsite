<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="<?= $admSite ?>js/jquery.isotope.js" type="text/javascript"></script>
<section class="main">
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="widget Categories">
                        <h3 class="widget-title widget-title ">Cursos</h3>
                        <ul>
                            <div class="portfolioFilter">
                                <a href="#" class="title" data-filter="*" class="current">Todos os cursos</a>
                                <?php
                                foreach ($tipos as $t): ?>
                                    <li><a href="#" class="title"
                                           data-filter=".<?php echo $t['Course']['id'];?>"><?php echo $t['Course']['Nome']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="span9">
                    <div class="servicos">
                        <ul>
                            <div class="portfolioContainer">

                                    <?php
                                    foreach ($novidades as $novidade): ?>
                                <div class="<?php echo $novidade['Project']['course_id'];?>">
                                        <li>
                                            <h2><?php echo $novidade['Project']['Titulo'];?></h2>
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
                                </div>
                                    <?php endforeach; ?>

                            </div>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

</section>

<script type="text/javascript">

    $(window).load(function () {
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function () {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });

</script>