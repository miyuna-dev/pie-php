<?php

namespace Core;


class ORM {
    public function create ($table, $fields) // return an id
    {

    }

    public function read ($table, $id) // return an array 
    {

    }

    public function update ($table, $id, $fields) // return a boolean
    {

    }

    public function delete ($table, $id) // return a boolean
    {

    }

    public function find ($table, $params = array(
        'WHERE' => '1',
        'ORDER BY' => 'id ASC',
        'LIMIT' => ''
    )) // return an array with registrations
    {

    }

}

$orm = new ORM();
$orm->create('articles', array(
    'title' => 'un super titre',
    'content' => 'et voici un super article de blog',
    'author' => 'Rodrigue'
));

$orm->update('articles', 1, array(
    'title' => 'un super titre',
    'content' => 'et voici un super article de blog',
    'author' => 'Rodrigue'
));

$orm->delete('articles', 1);