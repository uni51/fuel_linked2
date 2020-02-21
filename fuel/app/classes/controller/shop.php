<?php

class Controller_Shop extends Controller {

    public function action_index() {
        // $data['rows'] = Model_Item::find_all(1, 1); //第一引数は取得件数、第二引数はオフセット値
        $data['row'] = Model_Item::find_by_pk(1);

        return View::forge('shop/index', $data);
    }

}