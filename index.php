<?php

require 'assets/Map.php';
require 'assets/PathFinder.php';

$map = new Map();

require 'maps/map3.php';

var_dump($map);

$path = new Pathfinder($map);
var_dump($path->findShortestPath('A', 'G'));
