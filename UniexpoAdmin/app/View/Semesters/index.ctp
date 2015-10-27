<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <li class="list-group-item"><?php echo $this->Html->link(__('Novo semestre'), array('action' => 'add'), array('class' => '')); ?></li>
        </h1>

    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Semestres</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th><?php echo $this->Paginator->sort('Curso'); ?></th>
                                <th><?php echo $this->Paginator->sort('Nome'); ?></th>
                                <th class="actions"><?php echo __('Ações'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($tipos as $t): ?>
                                <tr>
                                    <td><?php echo $t['Course']['Nome']; ?>&nbsp;</td>
                                    <td><?php echo h($t['Semester']['Descricao']); ?>&nbsp;</td>
                                    <td class="actions">

                                        <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $t['Semester']['id']), array('class' => 'btn btn-default btn-xs')); ?>
                                        <?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $t['Semester']['id']), array('class' => 'btn btn-default btn-xs'), __('Tem certeza que deseja apagar este item? %s?', $t['Semester']['id'])); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                            <tr>

                                <th><?php echo $this->Paginator->sort('Curso'); ?></th>
                                <th><?php echo $this->Paginator->sort('Nome'); ?></th>
                                <th class="actions"><?php echo __('Ações'); ?></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>