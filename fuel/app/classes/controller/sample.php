<?php

class Controller_Sample extends Controller {

    /**
     * Chapter4-1：ビューへの値の受け渡し
     */
//    public function action_index() {
//        $data = array();
//        $data['name'] = 'ヤマダ';
//
//        return View::forge('sample/index', $data);
//    }

    /**
     * Chapter4-1：ビューへの値の受け渡し
     */
    public function action_index() {
        $view = View::forge('sample/index');
        $view->set('name', 'たにぐち');
        return $view;
    }
}