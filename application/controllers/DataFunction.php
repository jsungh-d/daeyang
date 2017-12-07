<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataFunction
 *
 * @author dev_piljae
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class DataFunction extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();

        $this->DAEYANG = $this->load->database('DAEYANG', TRUE);
        $this->load->model('Db_m');
        $this->load->library('session');
    }

    function defaultAdminSet() {
        $insArray = array(
            'ID' => 'admin',
            'PWD' => password_hash('1234', PASSWORD_DEFAULT)
        );

        $this->DAEYANG->trans_start(); // Query will be rolled back

        $this->Db_m->insData('ADMIN', $insArray, 'DAEYANG');

        $this->DAEYANG->trans_complete();

        if ($this->DAEYANG->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function adminLogin() {

        $this->load->helper(array('alert'));

        $this->DAEYANG->trans_start(); // Query will be rolled back
        //sql 인젝션 방지
        $id = $this->DAEYANG->escape($this->input->post('adminId', TRUE));
        $pwd = $this->input->post('adminPw', TRUE);

        $sql = "SELECT
                    ADMIN_IDX,
                    PWD
                FROM 
                    ADMIN 
                WHERE 
                    ID = $id";

        $res = $this->Db_m->getInfo($sql, 'DAEYANG');

        $this->DAEYANG->trans_complete();

        if ($this->DAEYANG->trans_status() === FALSE) {
            alert("데이터 처리오류!!", '/');
        } else {
            if ($res && password_verify($pwd, $res->PWD)) {
                //세션 생성
                $newdata = array(
                    'ADMIN_IDX' => $res->ADMIN_IDX
                );
                $this->session->set_userdata($newdata);
                alert('로그인 되었습니다.', '/admin/main');
            } else {
                alert("일치하는 정보가 없습니다.", '/admin');
            }
        }
    }

    function insFaq() {
        $this->load->helper(array('alert'));

        $this->DAEYANG->trans_start(); // Query will be rolled back

        $insArray = array(
            'QUESTION' => $this->input->post('question', true),
            'ANSWER' => $this->input->post('answer', true)
        );

        $this->Db_m->insData('FAQ', $insArray, 'DAEYANG');

        $this->DAEYANG->trans_complete();

        if ($this->DAEYANG->trans_status() === FALSE) {
            alert("데이터 처리오류!!", '/admin/faqWrite');
        } else {
            alert('등록 되었습니다.', '/admin/faqConfig');
        }
    }

    function delFaq() {
        $delWhere = array(
            'FAQ_IDX' => $this->input->post('idx', true)
        );

        $this->DAEYANG->trans_start(); // Query will be rolled back

        $this->Db_m->delete('FAQ', $delWhere, 'DAEYANG');

        $this->DAEYANG->trans_complete();

        if ($this->DAEYANG->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function modFaq() {

        $this->load->helper(array('alert'));

        $updateArray = array(
            'QUESTION' => $this->input->post('question', true),
            'ANSWER' => $this->input->post('answer', true)
        );

        $updateWhere = array(
            'FAQ_IDX' => $this->input->post('faq_idx', true)
        );

        $this->DAEYANG->trans_start(); // Query will be rolled back

        $this->Db_m->update('FAQ', $updateArray, $updateWhere, 'DAEYANG');

        $this->DAEYANG->trans_complete();

        if ($this->DAEYANG->trans_status() === FALSE) {
            alert("데이터 처리오류!!", '/admin/faqModify/'.$this->input->post('faq_idx', true).'');
        } else {
            alert('수정 되었습니다.', '/admin/faqConfig');
        }
    }

}
