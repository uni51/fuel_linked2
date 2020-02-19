<?php

class Controller_Sample extends Controller {

    public function action_index() {
        return View::forge('sample/index');
    }

    /**
     * Chapter4-3：HTMLをそのままビューに受け渡す
     */
//    public function action_index() {
//        $data = array();
//        $data['html'] = '<p>段落のタグです。<strong>強調します。</strong></p>';
//
//        // 第3パラメータの「false」は、サニタイズの有無
//        return View::forge('sample/index', $data, false);
//    }

    /**
     * Chapter4-3：HTMLをそのままビューに受け渡す
     */
//    public function action_index() {
//        $view = View::forge('sample/index');
//        $view->set('html', '<p>段落です</p>', false);
//        $view->set('danger', '<script></script>');
//
//        return $view;
//    }
}