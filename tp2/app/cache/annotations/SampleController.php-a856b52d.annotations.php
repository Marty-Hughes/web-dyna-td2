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
  'controllers\\SampleController::sendMessange' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "send/(message)/{who}","methods"=>["get"])
  ),
  'controllers\\SampleController::contactForm' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "contact","methods"=>["get"])
  ),
);

