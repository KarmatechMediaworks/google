<?php header('Access-Control-Allow-Origin: *'); ?>

<?php 

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

//$phpCricket = new PhpCricket\PhpCriclib('your_access_key', 'your_secret_key', 'your_app_id', 'unique_device_id');

$phpCricket = new PhpCricket\PhpCriclib('9bfab442448c046a069b74525f6bf8bd', '451a569e27adffba4ed1b973107333fc', 'motivatorworld.com', '14920807632061');


/**
* NOTE: To access the Cricket API's data, you need Valid Match Keys.
*
* Here, you may try with some Free Match Keys.
*
*/

/* Get Match Details */
 //$getMatch = $phpCricket->getMatch('iplt20_2017_g38', 'summary_card');
 //echo json_encode($getMatch);


/* Get BallbyBall Details */
/*$getBallbyBall = $phpCricket->getBallByBall('dev_season_2014_q3', 'b_1_10');
 echo json_encode($getBallbyBall);*/


/* Get Recent Match Details */
	//$getRecentMatch = $phpCricket->getRecentMatch('iplt20_2017', 'micro_card');
	

	
	

try {

    $matchkey="iplt20_2017";

    if($matchkey!="")
    {

		  	$getRecentMatch = $phpCricket->getRecentMatch('iplt20_2017', 'summary_card');
	
	    	echo $jsondata=json_encode($getRecentMatch);
          
			$decodejsondata=json_decode($jsondata, true);

            //Insert the json response into the response.json

              $fp = fopen('response.json', 'w');
              fwrite($fp, json_encode($decodejsondata));
              fclose($fp);

    }
}
catch(Exception $e) {
  
   echo 'some error occured in the Api call: ' .$e->getMessage();

}
	


/* Get Recent Season Details */
// $getRecentSeason = $phpCricket->getRecentSeason();
// echo json_encode($getRecentSeason);


/* Get Schedule Details */
// $getSchedule = $phpCricket->getSchedule('2013-05');
// echo json_encode($getSchedule);


/* Get Season Schedule Details */
// $getSeasonSchedule = $phpCricket->getSeasonSchedule('dev_season_2014', '2013-05');
// echo json_encode($getSeasonSchedule);


/* Get Player Stats Details */
// $getPlayerStats = $phpCricket->getPlayerStats('ms_dhoni', 'icc');
// echo  json_encode($getPlayerStats);


/* Get Season Player Stats Details */
// $getSeasonPlayerStats = $phpCricket->getSeasonPlayerStats('asiacup_2016', 'ms_dhoni');
// echo json_encode($getSeasonPlayerStats);


/* Get Season Details */
// $getSeason = $phpCricket->getSeason('dev_season_2014', 'micro_card');
// echo json_encode($getSeason);


/* Get Season Stats Details */
// $getSeasonStats = $phpCricket->getSeasonStats('dev_season_2014');
// echo json_encode($getSeasonStats);


/* Get Season Points Details */
// $getSeasonPoints = $phpCricket->getSeasonPoints('dev_season_2014');
// echo json_encode($getSeasonPoints);


/* Get Season Team Details */
// $getSeasonTeam = $phpCricket->getSeasonTeam('dev_season_2014', 'dev_season_2014_teamx', 'icc');
// echo json_encode($getSeasonTeam);


/* Get Overs Summary Details */
// $getOverSummary = $phpCricket->getOversSummary('dev_season_2014_q6');
// echo json_encode($getOverSummary);


/* Get News Aggregation */
// $getNewsAgg = $phpCricket->getNewsAggregation();
// echo json_encode($getNewsAgg);
