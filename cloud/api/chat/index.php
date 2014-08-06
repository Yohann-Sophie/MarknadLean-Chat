<?php

	//include model functionity (DB connect, etc)
	require_once($_SERVER['DOCUMENT_ROOT'].'cloud/models/chat/index.php');
	
	
	extract($_REQUEST);

	if(!isset($userN)){

		$resp = array("status"=>"fail", "reason"=> "please send userN request header parameter");
		echo(json_encode($resp));
		return

	}

	if(!isset($mes)){
		$resp = array("status"=>"fail","reason"=>"please send mes resquest header parameter");
		echo(json_encode($resp))
		return
	}

	if(!isset($action)){
		$resp = array("status"=>"fail","reason"=>"please send action resquest header parameter");
		echo(json_encode($resp))
		return



	//if the user made it there,then:
		
	switch($action){

		case "addGet":
			$res= addGetChat($userN, $mes);
			echo(json_encode($res));

			
		break;

		default:

			$resp = array("status"=>"fail", "reason"=> "please send userN request header parameter");
			echo(json_encode($resp));
		return;

		break;
	}	
?>

		

