<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->DAEYANG = $this->load->database('DAEYANG', TRUE);

        $this->load->helper(array('url', 'date', 'form', 'alert'));
        $this->load->model('Db_m');
        $this->load->library('session');
    }

    function _remap($method) {
        $this->load->view('inc/header');

        if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }

        $this->load->view('inc/footer');
    }

    function segment_explode($seg) {
        //세크먼트 앞뒤 '/' 제거후 uri를 배열로 반환
        $len = strlen($seg);
        if (substr($seg, 0, 1) == '/') {
            $seg = substr($seg, 1, $len);
        }

        $len = strlen($seg);
        if (substr($seg, -1) == '/') {
            $seg = substr($seg, 0, $len - 1);
        }

        $seg_exp = explode("/", $seg);
        return $seg_exp;
    }

    function url_explode($url, $key) {
        for ($i = 0; count($url) > $i; $i++) {
            if ($url[$i] == $key) {
                $k = $i + 1;
                return $url[$k];
            }
        }
    }

    function index() {
        $this->load->view('index');
    }

    function products() {
        $this->load->view('products/products');
    }

    function products_view() {
        $this->load->view('products/view');
    }

    function summary() {
        $this->load->view('introduce/summary');
    }

    function greeting() {
        $this->load->view('introduce/greeting');
    }

    function history() {
        $this->load->view('introduce/history');
    }

    function domain() {
        $this->load->view('introduce/domain');
    }

    function price() {
        $this->load->view('introduce/price');
    }

    function map() {
        $this->load->view('introduce/map');
    }

    function service_intro() {
        $this->load->view('client/intro');
    }

    function faq() {

        $add_where = "";
        $data['gubun'] = "";
        $data['text'] = "";

        //검색어 초기화
        $search_word = $page_url = '';
        $uri_segment = 4;

        //주소중에서 q(검색어) 세그먼트가 있는지 검사하기 위해 주소를 배열로 변환 
        $uri_array = $this->segment_explode($this->uri->uri_string());

        if (in_array('q', $uri_array)) {
            //주소에 검색어가 있을 경우의 처리. 즉 검색시 
            $gubun = urldecode($this->url_explode($uri_array, 'gubun'));
            $text = urldecode($this->url_explode($uri_array, 'text'));
            //페이지네이션용 주소 
            $page_url = '/q/gubun/' . $gubun . '/lang/' . $text;
            $uri_segment = 9;

            if ($text !== 'none') {
                $add_where .= "AND QUESTION LIKE '%" . urldecode($text) . "%' ";
                $data['text'] = urldecode($text);
            }
        }

        //페이지네이션 라이브러리 로딩 추가
        $this->load->library('pagination');

        //페이지네이션 설정 '.$page_url.'
        $config['base_url'] = '/index/faq/' . $page_url . '/page/'; //페이징 주소
        //게시물의 전체 갯수
        $count_sql = "SELECT
                            COUNT(*) CNT
                          FROM
                            FAQ
                          WHERE
                            FAQ_IDX <> '' ";
        $count_sql .= $add_where;

        $count_res = $this->Db_m->getInfo($count_sql, 'DAEYANG');

        $config['total_rows'] = $count_res->CNT;
        $data['total_rows'] = $count_res->CNT;

        $config['per_page'] = 15; //한 페이지에 표시할 게시물 수
        $config['uri_segment'] = $uri_segment; //페이지 번호가 위치한 세그먼트
        //$config['num_links'] = 2; //페이지 링크 갯수 설정
        $config['use_fixed_page'] = TRUE;
        $config['fixed_page_num'] = 10;

        $config['display_first_always'] = TRUE;
        $config['disable_first_link'] = TRUE;
        $config['display_last_always'] = TRUE;
        $config['disable_last_link'] = TRUE;
        $config['display_prev_always'] = TRUE;
        $config['display_next_always'] = TRUE;
        $config['disable_prev_link'] = TRUE;
        $config['disable_next_link'] = TRUE;

        //페이지네이션 전체 감싸는 태그추가
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        //항상나오는 처음으로 버튼 태그추가
        $config['disabled_first_tag_open'] = "<li class='page-item disabled' style='display:none'><a>";
        $config['disabled_first_tag_close'] = "</a></li>";

        //처음으로버튼 감싸는 태그추가
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        //항상나오는 마지막으로 버튼 태그추가
        $config['disabled_last_tag_open'] = "<li class='page-item disabled' style='display:none'><a>";
        $config['disabled_last_tag_close'] = "</a></li>";

        //마지막으로버튼 감싸는 태그추가
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        //항상나오는 다음버튼 감싸는 태그추가
        $config['disabled_next_tag_open'] = '<li class="page-item disabled"><a style="color:#CCC">';
        $config['disabled_next_tag_close'] = '</a></li>';

        //다음버튼 감싸는 태그추가
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        //항상나오는 이전버튼 태그추가
        $config['disabled_prev_tag_open'] = "<li class='page-item disabled'><a style='color:#CCC'>";
        $config['disabled_prev_tag_close'] = "</a></li>";

        //이전버튼 감싸는 태그추가
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        //현재페이지번호 감싸는 태그추가
        $config['cur_tag_open'] = '<li class="page-item active"><a>';
        $config['cur_tag_close'] = '</a></li>';

        //페이지번호 감싸는 태그추가
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        //페이지네이션 초기화
        $this->pagination->initialize($config);

        //페이징 링크를 생성하여 view에서 사용할 변수에 할당
        $data['pagination'] = $this->pagination->create_links();

        //게시판 목록을 불러오기 위한 offset, limit 값 가져오기
        $data['page'] = $page = $this->uri->segment($uri_segment, 1);

        if ($page > 1) {
            $start = (($page / $config['per_page'])) * $config['per_page'];
        } else {
            $start = ($page - 1) * $config['per_page'];
        }

        $limit = $config['per_page'];

        $lists_sql = "SELECT
                          FAQ_IDX,
                          QUESTION,
                          ANSWER
                      FROM 
                          FAQ
                      WHERE
                          FAQ_IDX <> '' ";
        $lists_sql .= $add_where;
        $lists_sql .= "ORDER BY TIMESTAMP DESC LIMIT $start, $limit";

        $data['lists'] = $this->Db_m->getList($lists_sql, 'DAEYANG');

        $this->load->view('client/faq', $data);
    }

    function ask() {
        $this->load->view('client/ask');
    }

    function reference() {
        $this->load->view('client/reference');
    }

    function reference_view() {
        $this->load->view('client/reference_view');
    }

    function notice() {
        $this->load->view('media/notice');
    }

    function notice_view() {
        $this->load->view('media/notice_view');
    }

    function news() {
        $this->load->view('media/news');
    }

    function news_view() {
        $this->load->view('media/news_view');
    }

    function video() {
        $this->load->view('media/video');
    }

}
