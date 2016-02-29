<?php

require 'assets/Map.php';
require 'assets/PathFinder.php';

$map = new Map();

require 'maps/map3.php';

$path = new Pathfinder($map);
var_dump($path->findShortestPath('A', 'G'));
