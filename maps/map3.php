<?php
/**
 * Created by PhpStorm.
 * User: petervandam
 * Date: 29/02/16
 * Time: 21:30
 */


$map->addNode('A', [
    ['B', 1],
    ['C', 2]
]);

$map->addNode('B', [
    ['A', 1],
    ['D', 2]
]);

$map->addNode('C', [
    ['A', 2],
    ['D', 1]
]);

$map->addNode('D', [
    ['B', 2],
    ['C', 1],
    ['E', 3],
    ['F', 1]
]);

$map->addNode('E', [
    ['D', 3],
    ['G', 1]
]);

$map->addNode('F', [
    ['D', 1],
    ['H', 2]
]);

$map->addNode('G', [
    ['E', 1],
    ['H', 4]
]);

$map->addNode('H', [
    ['G', 4],
    ['F', 2]
]);
