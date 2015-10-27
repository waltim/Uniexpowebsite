<?php

class Theme extends AppModel
{

    public $displayField = 'Descricao';

    public $validate = array(
        'Descricao' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Este campo é obrigatorio.'
            )
        )
    );

    public $hasMany = array(
        'Project' => array(
            'className' => 'Project',
            'foreignKey' => 'theme_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );


}