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
    public function action_index() {
        $data['hello'] = 'こんにちは';

        return View::forge('sample/index', $data);
    }
}