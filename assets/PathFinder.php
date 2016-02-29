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

    protected $alreadyFound = [];
    protected $alreadyFoundPoints = [];
    protected $paths = [];

    public function __construct($map)
    {
        $this->map = $map;
    }

    public function findShortestPath($start, $end)
    {
        $this->start = $start;
        $this->end = $end;

        // TODO Do some magic here
        $this->findRecursive($start, [$start], 0, $end);

        $lowest = NULL;
        $lowestPath = [];
        foreach ($this->paths as $path) {
            if ($lowest === NULL) {
                $lowest = $path['points'];
                $lowestPath = $path;
            }

            if ($lowest > $path['points']) {
                $lowest = $path['points'];
                $lowestPath = $path;
            }
        }


        echo '<pre>';
        print_r($this->paths);
        echo '</pre>';



        echo '<pre>';
        print_r($lowestPath);
        echo '</pre>';

        return '';

    }

    private function findRecursive($node, $path, $points, $end)
    {
        if (!in_array($node, $this->alreadyFound) || $this->alreadyFoundPoints[$node] < $points) {
            array_push($this->alreadyFound, $node);
            $this->alreadyFoundPoints[$node] = $points;


            $connectedNodes = $this->findConnectedNodes($node);

            for ($i=0; $i<count($connectedNodes); $i++) {
                if (!in_array($connectedNodes[$i][0], $this->alreadyFound)) {
                    if ($connectedNodes[$i][0] === $end) {
                        echo 'Found! '.$connectedNodes[$i][0];

                        array_push($this->paths, [
                           'route' => $path,
                            'points'=> $points+$connectedNodes[$i][1]
                        ]);

                        return true;
                    } else {
                        array_push($path, $connectedNodes[$i][0]);
                        $this->findRecursive($connectedNodes[$i][0], $path, $points+$connectedNodes[$i][1], $end);
                    }
                }

            }
        } else {
            echo '<p>Skipped '.$node.'</p>';
        }

    }

    private function findConnectedNodes($node)
    {
        $nodes = $this->map->getEdges($node);
        return $nodes;
    }

    private function nodeExists($nodeName)
    {
        // TODO: NodeExists maken
        return true;
    }
}
