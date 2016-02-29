<?php

require 'assets/Map.php';
require 'assets/PathFinder.php';

$map = new Map();

require 'maps/map3.php';

$path = new Pathfinder($map);
$path->findShortestPath('A', 'G');
