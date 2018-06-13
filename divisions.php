<?php
    include_once 'classes/divisions/MEP.php';
    include_once 'classes/divisions/Construction.php';
    include_once 'classes/divisions/Firefighting.php';
    include_once 'classes/divisions/Infrastructure.php';
    include_once 'classes/divisions/FacilityManagement.php';    

    if(!isset($_GET['division'])){
        include '404.php';
        die();
    }
    $division = $_GET['division'];

    $divisions = array(
        "mep" => new MEP(),
        "construction" => new Construction(),
        "firefighting" => new Firefighting(),
        "infrastructure" => new Infrastructure(),
        "facilitymanagement" => new FacilityManagement()
    );

    if(!array_key_exists($division, $divisions)){
        include '404.php';
        die();
    }
    $divisionObj = $divisions[$division];
    $divisionObj->renderPage();
    
?>