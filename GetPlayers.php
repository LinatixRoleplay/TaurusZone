<?php

session_start(); 
error_reporting(0); 
include_once('./css/index.php');
require("./conectados/samp_query.php");

$sql = $con->prepare("SELECT COUNT(*) FROM usuarios WHERE Online='1'"); 
$sql->execute(); 

$resultado = $sql->fetchColumn(); 

try
{
	$rQuery = new QueryServer( $serverIP2, $serverPort );
	$aInformation = $rQuery->GetInfo( );
	$aServerRules = $rQuery->GetRules( );
	$aBasicPlayer = $rQuery->GetPlayers( );
	$aTotalPlayers = $rQuery->GetDetailedPlayers( );
	$rQuery->Close( );
}
catch (QueryServerException $pError)
{
	
}

$s = $_GET['s'];
$p = $_GET['p'];
$u = $_GET['u'];

if($s == 1 || $p == 1 || $u == 1)
{
	echo $resultado;
}

if($s == 2 || $p == 2 || $u == 2)
{
	if(!empty($aInformation))
	{
		echo $aInformation['Players']; 
	}
	else 
	{
		echo "0"; 
	}
}

?>