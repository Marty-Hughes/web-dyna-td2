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
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "do/incription")
  ),
  'controllers\\SampleController::inscriptions' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "SampleController/inscriptions")
  ),
  'controllers\\SampleController::logout' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "SampleController/logout","methods"=>["get"])
  ),
);

