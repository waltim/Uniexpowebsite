<?php

/**
 * Created by PhpStorm.
 * User: Walterlmm
 * Date: 27/10/2015
 * Time: 14:29
 */
class ProjetosController extends AppController
{

    public $uses = array('Project', 'ProjectImage','Course','ProjectUser','Movie','Semester','Theme','UserImage','User','Archive','Social','Visitor');

    public function index(){

        $this->Project->recursive = 1;
        $eventos = $this->Project->find('all', array(
            'conditions' => array(
                'Project.Aceito' => 'S',
                'Project.created >' => date('Y-m', strtotime("-1 years"))
            ),
            'order' => array('Project.Votos' => 'desc')
        ));

        $this->Course->recursive = 0;
        $Semestres = $this->Course->find('all',array(
            'order' => array('Course.Nome' =>'asc'),
        ));

        $this->set('tipos',$Semestres, $this->paginate());
        $this->set('novidades', $eventos, $this->paginate());
    }

    public function view($id = null){

        if (!$this->Project->exists($id)) {
            $this->redirect(array('controller' => 'Projetos', 'action' => 'index'));
        }

        $options = array('conditions' => array('Project.' . $this->Project->primaryKey => $id),
            'recursive'=> 3);
        $this->set('novidade', $this->Project->find('first', $options));
        $this->set('idProjeto',$id);

        $arquivo = $this->Archive->find('all', array(
            'conditions' => array('Archive.project_id' => $id,
                'Archive.Aceito' => '')
        ));
        $this->set('arquivo',$arquivo);


        $qntVideo = $this->Movie->find('all', array(
            'conditions' => array('Movie.project_id' => $id,
                'Movie.Aceito' => 'S'
            )
        ));


        $qntImage = $this->ProjectImage->find('all', array(
            'conditions' => array('ProjectImage.project_id' => $id,
                'ProjectImage.Aceito' => 'S'
            )
        ));


        $foto = $this->ProjectUser->find('all', array(
            'conditions' => array('ProjectUser.project_id' => $id,
                'ProjectUser.Aceito' => 'S'
                ),
            'recursive'=> 4
        ));


        $this->set('qntVideo', $qntVideo);
        $this->set('qntImage', $qntImage);
        $this->set('foto', $foto);
    }

    public function ficha($id = null){
        $this->User->recursive = 2;
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('tipoView', $this->User->find('first', $options));
    }

    public function votar($id = null)
    {
        $this->Project->id = $id;
        if (!$this->Project->exists($id)) {
            $this->Session->setFlash(__('O projeto está invalido!'), 'flash/error');
            $this->redirect(array('action' => 'view/' . $id));
        }
        $nome = $this->request->data('nome');
        $foto = $this->request->data('foto');
        $faceId = $this->request->data('faceId');
        $this->log($nome, LOG_DEBUG);
        $this->log($foto, LOG_DEBUG);
        $this->log($faceId, LOG_DEBUG);


        $condicao = array(
            'Visitor.faceId' => $faceId
        );
        if ($this->Visitor->hasAny($condicao)) {
            $this->Session->setFlash(__('Você só pode votar uma vez!'), 'flash/info');
            $this->redirect(array('action' => 'view/' . $id . '/JaVotou'));

        } else {
            $this->Visitor->create();
            $data = array('nome' => $nome, 'foto' => $foto, 'faceId' => $faceId, 'project_id' => $id);
            if ($this->Visitor->save($data)) {
                $this->Session->setFlash(__('Seu voto foi efetuado com sucesso!'), 'flash/success');

            }
            $this->Project->id = $id;

            $this->Project->saveField('Votos', $this->Project->field('Votos') + 1);
        }
        $this->redirect(array('action' => 'view/' . $id));
    }
}