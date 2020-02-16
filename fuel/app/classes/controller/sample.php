<?php

class Controller_Sample extends Controller {

    /**
     * Chapter3-1：データベースを使う
     */
//    public function action_index() {
//
//        $item = Model_Item::forge();
//
//        $data = array();
//        $data['item_name'] = 'いちご';
//        $data['price'] = 80;
//        $item->set($data);
//        $item->save();
//
//        print("Saved!!");
//    }


    /**
     * Chapter3-4：DBオブジェクトでSQLを実行する
     */
    public function action_index() {

//        DB::query('INSERT INTO items SET item_name="ぶどう", price=380')->execute();
        $rows = DB::query('SELECT * FROM items')->execute();

        foreach($rows as $row):
            print ($row['item_name']. "/" . $row['price'] . "\n");
        endforeach;
    }
}