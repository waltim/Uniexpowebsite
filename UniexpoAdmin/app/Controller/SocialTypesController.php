<?php

/**
 * Created by PhpStorm.
 * User: Walterlmm
 * Date: 14/08/2015
 * Time: 00:03
 */

App::uses('AppController', 'Controller');

class SocialTypesController extends AppController{


    public $components = array('Paginator');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->loadModel('User');
        $this->loadModel('UserImage');
        $this->loadModel('social_types');
    }

    public function index()
    {

        $id2 = $this->Session->read('Auth.User.id');
        $this->User->recursive = 2;
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id2));
        $this->set('tipo', $this->User->find('first', $options));
        $this->set('idUsuario', $id2);

        $qntFoto = $this->UserImage->find('count', array(
            'conditions' => array('user_id' => $this->Session->read('Auth.User.id'))
        ));
        $this->set('qtd', $qntFoto);

        if ($this->Session->read('Auth.User.user_type_id') == 3) {
            $this->SocialType->recursive = 2;
            $this->set('tipos', $this->paginate());
        }
        else{
            $this->Session->setFlash(__('Você não tem autorização.'), 'flash/error');
            $this->redirect(array('controller' => 'Users', 'action' => 'perfil'));
        }
    }
    public function add(){

        $id2 = $this->Session->read('Auth.User.id');
        $this->User->recursive = 2;
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id2));
        $this->set('tipo', $this->User->find('first', $options));
        $this->set('idUsuario', $id2);

        $qntFoto = $this->UserImage->find('count', array(
            'conditions' => array('user_id' => $this->Session->read('Auth.User.id'))
        ));
        $this->set('qtd', $qntFoto);

        if ($this->Session->read('Auth.User.user_type_id') == 3) {
            if($this->data){
                if($this->SocialType->save($this->data))
                    $this->Session->setFlash(__('O tipo de social foi salvo com sucesso!'), 'flash/success');
                $this->redirect(array('action' => 'index'));
                $this->data = array();
            }
        }
        else{
            $this->Session->setFlash(__('Você não tem autorização.'), 'flash/error');
            $this->redirect(array('controller' => 'Users', 'action' => 'perfil'));
        }
    }

    public function edit($id = null)
    {

        $id2 = $this->Session->read('Auth.User.id');
        $this->User->recursive = 2;
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id2));
        $this->set('tipo', $this->User->find('first', $options));
        $this->set('idUsuario', $id2);

        $qntFoto = $this->UserImage->find('count', array(
            'conditions' => array('user_id' => $this->Session->read('Auth.User.id'))
        ));
        $this->set('qtd', $qntFoto);

        if ($this->Session->read('Auth.User.user_type_id') == 3) {
            $this->SocialType->id = $id;
            if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->SocialType->save($this->request->data)) {
                    $this->Session->setFlash(__('O tipo de social foi salvo com sucesso!'), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('O tipo de social não pode ser salvo, por favor tente novamente.'), 'flash/error');
                }
            } else {
                $options = array('conditions' => array('SocialType.' . $this->SocialType->primaryKey => $id));
                $this->request->data = $this->SocialType->find('first', $options);
            }
        }
        else{
            $this->Session->setFlash(__('Você não tem autorização.'), 'flash/error');
            $this->redirect(array('controller' => 'Users', 'action' => 'perfil'));
        }
    }
    public function delete($id = null)
    {
        if ($this->Session->read('Auth.User.user_type_id') == 3) {
            if($id){
                if($this->SocialType->delete($id))
                    $this->Session->setFlash(__('Deletado com sucesso!'), 'flash/success');
                $this->redirect(array('controller' => 'SocialTypes','action' => 'index'));
            }
            $this->Session->setFlash(__('O tipo de social não pode ser apagado.'), 'flash/error');
            $this->redirect(array('action' => 'index'));
        }
        else{
            $this->Session->setFlash(__('Você não tem autorização.'), 'flash/error');
            $this->redirect(array('controller' => 'Users', 'action' => 'perfil'));
        }
    }
}