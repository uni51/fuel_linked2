<?php

class Controller_Sample extends Controller {

    /**
     * Chapter2-2：コントローラを使う
     */
//    public function action_index() {
//        print('Hello');
//        print(date('H:i:s'));
//    }

    /**
     * Chapter2-3：ビューを使う
     */
//    public function action_index() {
//        $data['hello'] = 'こんにちは';
//
//        return View::forge('sample/index', $data);
//    }

    /**
     * Chapter2-5：アクションとパラメータ
     *
     * 例：http://localhost:8000/sample/calc/5/8
     */
//    public function action_calc($a, $b) {
//        $answer = $a * $b;
//
//        print($answer);
//    }

    /**
     * Chapter2-6：モデルを使う
     */
    public function action_index() {
        $user = new Model_User();

        print($user->get_name());
    }
}