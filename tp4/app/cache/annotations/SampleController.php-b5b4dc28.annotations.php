<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\SampleController' => 
  array (
  ),
),
  'controllers\\SampleController::index' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "_default","name"=>"Home")
  ),
  'controllers\\SampleController::bouton' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "Samplecontroller")
  ),
  'controllers\\SampleController::post' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "do/Samplecontroller")
  ),
);

