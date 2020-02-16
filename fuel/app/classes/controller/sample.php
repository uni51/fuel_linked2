<?php

class Controller_Sample extends Controller {

    public function action_index() {

        $item = Model_Item::forge();

        $data = array();
        $data['item_name'] = 'いちご';
        $data['price'] = 80;
        $item->set($data);
        $item->save();

        print("Saved!!");
    }
}