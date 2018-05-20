<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AtendimentoController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('dal/AtendimentoDal');
        $this->load->model('entities/Atendimento');
    }
    
    public function inserir() {
        $atendimento = json_decode(file_get_contents('php://input'));
        $atendimentoGateway = new AtendimentoDal();
        echo $atendimentoGateway->inserir($atendimento);
    }
    
}