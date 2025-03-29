<?php
include_once 'includes/Database.class.php';
include_once 'includes/Sqlinject.inject.php';

global $__sources_config;
$__sources_config = 'confifilepath';

function config_json($key, $default=null){
    global $__sources_config;

    if (!file_exists($__sources_config)) {
        die("Error: Config file not found.");
    }

    $jsonContent = file_get_contents($__sources_config);
    $array = json_decode($jsonContent, true);
    
    if(isset($array[$key])){
        return $array[$key];
    }else{
        return $default;
    }
}

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'].config_json('base_path')."_templates/$name.php";   
    
}

?>
