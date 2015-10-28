<?//=pr($tipoView);exit();?>
<section class="main">
    <section class="product">
        <section class="product-info">
            <div class="container">
                <div class="row">
                    <h1>
                        <?php echo $tipoView['User']['username']; ?>
                    </h1>


                    <table id="example1" class="table-bordered table-striped">
                        <tbody>
                        <tr>
                            <td><strong>Foto de perfil</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                if ($tipoView['UserImage']['filename'] == null):
                                    if ($tipoView['User']['Sexo'] == 'Masculino') :?>
                                        <img src="<?= $admLocal ?>img/masculino.jpg" style="width: 230px">
                                    <?php endif; ?>
                                    <?php if ($tipoView['User']['Sexo'] == 'Feminino') : ?>
                                    <img src="<?= $admLocal ?>img/feminino.jpg" style="width: 230px">
                                <?php endif; ?>

                                    <?php
                                else:
                                    if (isset($tipoView['UserImage']['dir'])):

                                        $tipoView['UserImage']['dir'] = explode("\\", $tipoView['UserImage']['dir']);
                                        $tipoView['UserImage']['dir'] = implode('/', $tipoView['UserImage']['dir']);

                                        $img = $admLocal . $tipoView['UserImage']['dir'] . '/' . $tipoView['UserImage']['filename'] ?>

                                        <img src="<?= $img ?>" style="width: 250px;" \>
                                    <?php endif; ?>
                                    <?php
                                endif;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Curso</strong></td>
                            <td>
                                <?php echo $tipoView['Course']['Nome']; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Semestre</strong></td>
                            <td>
                                <?php echo $tipoView['Semester']['Descricao']; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>
                                <?php echo $tipoView['User']['Email']; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Telefone</strong></td>
                            <td>
                                <?php echo $tipoView['User']['Telefone']; ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Sexo</strong></td>
                            <td>
                                <?php echo $tipoView['User']['Sexo']; ?>
                                &nbsp;
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="projetos">
                        <h1>Projetos em que o aluno participa</h1>
                    <ul>
                    <?php
                    $i = 0;
                    foreach ($tipoView['Project'] as $projetos): ?>
                       <li><a href="<?=$admSite?>Projetos/view/<?php echo $projetos['id']; ?>"> <?php echo $projetos['Titulo']; ?> </a></li>
                    <?php endforeach; ?>
                    </ul>
                    </div>
                    <div class="habilidades">
                        <h1>Habilidades do aluno</h1>
                    <ul>
                        <?php
                        $i = 0;
                        foreach ($tipoView['SkillUser'] as $habilidades): ?>
                            <li> <?php echo $habilidades['Skill']['Nome']; ?> </li>
                        <?php endforeach; ?>
                    </ul>
                    </div>

                    <div class="curriculo">
                        <h1>Vizualize ou baixe o curriculo do aluno</h1>
                        <?php $curriculo = $tipoView['Resume']; ?>
                        <?php $arq = explode("\\", $curriculo['dir']);
                        $arq = implode('/', $arq);
                        $arq = $admLocal . $arq . '/' . $curriculo['filename'];
                        ?>
                        <a href="<?= $arq ?>"
                           target="_blank"><?php echo $curriculo['filename']; ?>&nbsp;</a>
                    </div>

                    <div class="RedesSociais" style="float: right;">
                        <h1>Redes sociais do aluno</h1>
                        <?php
                        foreach ($tipoView['Social'] as $novidadeImage): ?>

                            <?php if ($novidadeImage['social_types']['Descricao'] == 'Facebook') : ?>
                                <a href="<?php echo $novidadeImage['Link']; ?>" target="_blank"> <img
                                        src="<?= $admLocal ?>img/facebook-icon.png" style="width: 56px"></a>
                            <?php endif; ?>
                            <?php if ($novidadeImage['social_types']['Descricao'] == 'Instagram') : ?>
                                <a href="<?php echo $novidadeImage['Link']; ?>" target="_blank"> <img
                                        src="<?= $admLocal ?>img/instagram.png" style="width: 56px"></a>
                            <?php endif; ?>
                            <?php if ($novidadeImage['social_types']['Descricao'] == 'Twitter') : ?>
                                <a href="<?php echo $novidadeImage['Link']; ?>" target="_blank"> <img
                                        src="<?= $admLocal ?>img/twitter.png" style="width: 56px"></a>
                            <?php endif; ?>
                            <?php if ($novidadeImage['social_types']['Descricao'] == 'Linkedin') : ?>
                                <a href="<?php echo $novidadeImage['Link']; ?>" target="_blank"> <img
                                        src="<?= $admLocal ?>img/linkedin.png" style="width: 56px"></a>
                            <?php endif; ?>
                            <?php if ($novidadeImage['social_types']['Descricao'] == 'Youtube') : ?>
                                <a href="<?php echo $novidadeImage['Link']; ?>" target="_blank"> <img
                                        src="<?= $admLocal ?>img/Youtube.png" style="width: 56px"></a>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>


    </section>


</section>