<?php

/**
 * Created by PhpStorm.
 * User: Walterlmm
 * Date: 27/10/2015
 * Time: 15:11
 */
class TutoriaisController extends AppController
{

    public $uses = array('Tutorial');
    public function index()
    {
        $this->Tutorial->recursive = 0;
        $Baner = $this->Tutorial->find('all');
        $this->set('novidades', $Baner, $this->paginate());
    }
}