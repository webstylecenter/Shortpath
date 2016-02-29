<?php
/**
 * Created by PhpStorm.
 * User: petervandam
 * Date: 27/02/16
 * Time: 19:22
 */

/*
 * A
 * $edge [
 *  ['b', 5],
 * ['c', 3]
 * ]
 */

class Map
{

    protected $nodes = [];
    protected $edges;

    public function __construct()
    {

    }

    public function addNode($name, $edges)
    {

        array_push($this->nodes, [
            'name'=> $name,
            'edges'=>$edges
        ]);
    }

    function getEdges($node)
    {
        $nodeKey = array_search($node, array_column($this->nodes, 'name'));
        return $this->nodes[$nodeKey]['edges'];
    }

}
