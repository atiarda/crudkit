<?php

namespace CrudKit\Data;

class DummyDataProvider extends BaseDataProvider {

    public function getSummaryData($params = array())
    {
        $skip = isset($params['skip']) ? $params['skip'] : 0;
        $take = isset($params['take']) ? $params['take'] : 10;

        $data = array();
        for($i = 0; $i < $take; $i ++ ) {
            $data []= array(
                "A - " . ($skip + $i),
                "B - " . ($skip + $i),
            );
        }

        return $data;
    }

    public function getSummarySchema()
    {
        return array(
            array(
                'name' => "Foo",
                'type' => 'text'
            ),
            array(
                'name' => "Bar",
                'type' => 'text'
            )
        );
    }

    public function getRowCount()
    {
        return 100;
    }
}