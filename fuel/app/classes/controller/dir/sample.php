<?php

class Controller_Dir_Sample extends Controller {

    public function action_index() {
        print('index');
    }

    public function action_save() {
        print('save');
    }


    /**
     * Chapter4-1：ビューへの値の受け渡し
     */
//    public function action_index() {
//        $data = array();
//        $data['name'] = '木村';
//
//        return View::forge('sample/index', $data);
//    }

    /**
     * Chapter4-1：ビューへの値の受け渡し
     */
//    public function action_index() {
//        $view = View::forge('sample/index');
//        $view->set('name', 'たにぐち');
//        return $view;
//    }
}