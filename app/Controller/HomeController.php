<?php

/**
 * Created by PhpStorm.
 * User: Walterlmm
 * Date: 27/10/2015
 * Time: 14:04
 */
class HomeController extends AppController
{
    public $uses = array('Project', 'ProjectImage', 'Baner','Tutorial','Theme');

    public function index(){
        $this->Project->recursive = 1;
        $eventos = $this->Project->find('all', array(
            'conditions' => array(
                'Project.Aceito' => 'S',
                'Project.created >=' => date('Y'),
            ),
            'order' => array('Project.Votos' => 'desc'),
            'limit' => 5
        ));

        $this->Baner->recursive = 0;
        $Baner = $this->Baner->find('all',array(
            'order' => array('Baner.created' => 'desc'),
            'limit' => 3
        ));

        $this->Tutorial->recursive = 0;
        $Tutorial = $this->Tutorial->find('first',array(
            'order' => array('Tutorial.created' => 'desc')
        ));

        $this->set('tutorials', $Tutorial);
        $this->set('baners', $Baner);
        $this->set('novidades', $eventos, $this->paginate());
    }

}