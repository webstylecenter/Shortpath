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

    private function findRecursive($node, $path, $points, $end, $alreadyFound = [], $alreadyFoundPoints = [])
    {
        if (!in_array($node, $alreadyFound) || $alreadyFoundPoints[$node] < $points) {
            array_push($alreadyFound, $node);
            $alreadyFoundPoints[$node] = $points;

            $connectedNodes = $this->findConnectedNodes($node);

            for ($i=0; $i<count($connectedNodes); $i++) {
                if (!in_array($connectedNodes[$i][0], $alreadyFound)) {
                    if ($connectedNodes[$i][0] === $end) {

                        array_push($this->paths, [
                           'route' => $path,
                            'points'=> $points+$connectedNodes[$i][1]
                        ]);

                        break;

                    } else {
                        $newPath = $path;
                        array_push($newPath, $connectedNodes[$i][0]);
                        $this->findRecursive($connectedNodes[$i][0], $newPath, $points+$connectedNodes[$i][1], $end, $alreadyFound, $alreadyFoundPoints);
                    }
                }
            }
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
