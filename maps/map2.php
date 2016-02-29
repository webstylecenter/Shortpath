<?php
/**
 * Created by PhpStorm.
 * User: petervandam
 * Date: 29/02/16
 * Time: 21:29
 */

$map->addNode('A', [
    ['B', 3],
    ['F', 8]
]);

$map->addNode('B', [
    ['F', 4],
    ['A', 3],
    ['C', 9]
]);

$map->addNode('F', [
    ['A', 8],
    ['B', 4],
    ['G', 1]
]);

$map->addNode('G', [
    ['F', 1],
    ['C', 2]
]);

$map->addNode('C', [
    ['B', 9],
    ['G', 2],
    ['D', 3]
]);

$map->addNode('D', [
    ['C', 3]
]);
