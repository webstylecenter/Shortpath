<?php
/**
 * Created by PhpStorm.
 * User: petervandam
 * Date: 29/02/16
 * Time: 21:29
 */

$map->addNode("A", [
    ['C', 3],
    ['B', 2]
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
