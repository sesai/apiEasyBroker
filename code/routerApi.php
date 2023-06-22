<?php

if( file_exists('ApiEasyBrokerController.php') ){
    include 'ApiEasyBrokerController.php';
}

$task = isset( $_REQUEST['task'] ) ? $_REQUEST['task'] : 'default';

switch ($task) {
    case 'getProperties':
        $apiEB = new ApiEasyBrokerController();

        $page = isset( $_REQUEST['page'] ) ? $_REQUEST['page'] : 1;
        $limit = isset( $_REQUEST['limit'] ) ? $_REQUEST['limit'] : 20;

        $propertyList = $apiEB->getProperties($page, $limit);
        echo $propertyList;
        die;

        break;
    
    default:
        $response = [];
        $response['code'] = 301;
        $response['message'] = 'Nothing to do';
        echo json_encode($response);
        break;
}


