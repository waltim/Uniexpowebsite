<section class="main">
    <section class="static_page_1">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <section class="static-page">
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="content">

                                    <h1>Vídeos tutoriais</h1>

                                    <div class="galeria-tutorial">
                                        <ul>
                                            <?php
                                            $i = 0;
                                            foreach ($novidades as $videos): ?>

                                                <?php
                                                $linkVideo = explode("v=", $videos['Tutorial']['Link']);
                                                if (!is_array($linkVideo)) {
                                                    $linkVideo = explode("youtu.be/", $videos['Tutorial']['Link']);

                                                };
                                                $linkVideo = array_pop($linkVideo);
                                                ?>
                                                <li>
                                                    <iframe width="520" height="315"
                                                            src="//www.youtube.com/embed/<?= $linkVideo ?>"
                                                            frameborder="0" allowfullscreen>

                                                    </iframe>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</section>