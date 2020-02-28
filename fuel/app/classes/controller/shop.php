<?php

class Controller_Shop extends Controller {

    public function action_index() {
        // $data['rows'] = Model_Item::find_all();
        // $data['rows'] = Model_Item::find_all(1, 1); //第一引数は取得件数、第二引数はオフセット値
        // $data['row'] = Model_Item::find_by_pk(2);

        $data['rows'] = Model_Item::find_by('price', '100', '<=');
        // $data['row'] = Model_Item::find_one_by('item_name', 'りんご', '=');

        return View::forge('shop/index', $data);
    }

    public function action_save() {
        $item = Model_Item::forge();

        $data = array();
        $data['item_name'] = '桃';
        $data['price'] = 400;

        $item->set($data);
        $item->save();
    }

    public function action_delete() {
        $item = Model_Item::find_by_pk(4);
        $item->delete();
    }
}