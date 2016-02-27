<?php

require 'assets/Map.php';
require 'assets/PathFinder.php';

$map = new Map();

$map->addNode("A", [
    ['B', 2],
    ['C', 3]
]);

$map->addNode("B", [
    ['A', 2],
    ['C', 6],
    ['D', 4]
]);

$map->addNode("C", [
    ['A', 3],
    ['B', 6],
    ['D', 1],
    ['E', 1]
]);

$map->addNode("D", [
    ['B', 4],
    ['C', 1],
    ['E', 10]
]);

$map->addNode("E", [
    ['C', 1],
    ['D', 10]
]);

var_dump($map);

$path = new Pathfinder($map);
var_dump($path->findShortestPath('A', 'E'));
