<?php

include_once ("../model/PropertyControllerClass.php");

print_r($_POST);
$p = new PropertyControllerClass();
$p->addProperty();