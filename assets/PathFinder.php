<?php
/**
 * Created by PhpStorm.
 * User: petervandam
 * Date: 27/02/16
 * Time: 19:23
 */

class Pathfinder
{
    protected $map;
    protected $start;
    protected $end;

    public function __construct($map)
    {
        $this->map = $map;
    }

    public function findShortestPath($start, $end)
    {
        $this->start = $start;
        $this->end = $end;

        // TODO Do some magic here

        return 'A -> C -> E';

    }

    private function nodeExists($nodeName) {
        // TODO: NodeExists maken
        return true;
    }
}
