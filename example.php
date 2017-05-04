<?php
// use ElephantIO\Client,
//     ElephantIO\Engine\SocketIO\Version0X;

// require __DIR__ . '/vendor/autoload.php';
// use Ytake\WebSocket\Io;


require_once 'lzconfig.php';
require_once 'lz.php';


$authData = auth();
if (! $authData) {
	echo "Error Auth, Please verify your access details on lzconfig.php \n";
	return;
}

$authData;
$token = $authData['access_token'];

/* get Match API data. Allowed card types are micro_card, summary_card and full_card. For more info https://developers.litzscore.com/docs/match_api/ */
//print_r(getMatch($token, 'iplt20_2013_g30', 'micro_card')); 


try {

    date_default_timezone_set('Asia/kolkata'); 

    $matchkey1="iplt20_2017_g38";
    $matchkey2="iplt20_2017_g43";
    $matchkey3="iplt20_2017_g46";
    $matchkey4="iplt20_2017_g56";

    $date1="";  //default
    $date2="";  //5
    $date3="";  //7
    $date4="";  //14


    $matchkey=$matchkey1;

    if($matchkey!="")
    {

          //$getMatch = $phpCricket->getMatch($matchkey, 'summary_card');

          $getMatch=getMatch($token, $matchkey, 'summary_card');
          
         echo  $jsondata=json_encode($getMatch);

          $decodejsondata=json_decode($jsondata, true);

          //var_dump($decodejsondata);

          $result=$decodejsondata['card']['toss'];

          if(empty($result))
          {

              //Array is empty or match ID is wrong. Please check.

          }else
          { 

            //var_dump($jsondata);

            //Insert the json response into the response.json

              $fp = fopen('response.json', 'w');
              fwrite($fp, json_encode($decodejsondata));
              fclose($fp);

            
           }      

    }
}
catch(Exception $e) {
  
   echo 'some error occured in the Api call: ' .$e->getMessage();

}





/* get RecentMatch API data. Allowed card types are micro_card and summary_card. For more info https://developers.litzscore.com/docs/recent_match_api/ */
// print_r(getRecentMatch($token, 'micro_card'));  

/* get RecentSeasonMatch API data. Allowed card types are micro_card and summary_card. For more info https://developers.litzscore.com/docs/recent_match_api/ */
// print_r(getRecentSeasonMatch($token, 'dev_season_2014',  'micro_card')); 

/* get RecentSeason API data. For more info https://developers.litzscore.com/docs/recent_season_api/ */
// print_r(getRecentSeason($token));

/* get Schedule API data. Allowed formates are YYYY-MM-DD and YYYY-MM. For more info https://developers.litzscore.com/docs/schedule_api/ */
// print_r(getSchedule($token, 'YYYY-MM-DD')); 

/* get Season Schedule API data. Allowed formates are YYYY-MM-DD and YYYY-MM.  For more info https://developers.litzscore.com/docs/schedule_api/ */
// print_r(getSeasonSchedule($token, 'dev_season_2014', 'YYYY-MM'));

/* get Season API data. Allowed card type micro_card and summary_card. For more info https://developers.litzscore.com/docs/season_api/ */
// print_r(getSeason($token, 'dev_season_2014', 'micro_card' ));


/* get Season Stats API data. For more info https://developers.litzscore.com/docs/season_stats_api/ */
// print_r(getSeasonStats($token, 'dev_season_2014'));

/* get Season Points API data. For more info https://developers.litzscore.com/docs/season_points_api/ */
// print_r(getSeasonPoints($token, 'dev_season_2014'));

/* get Season Player Stats API data. player_x1 is player key. For more info https://developers.litzscore.com/docs/season_player_stats_api/ */
// print_r(getSeasonPlayerStats($token, 'dev_season_2014', 'player_x1'));

/* get Match Over Summary API data. For more info https://developers.litzscore.com/docs/over_summary_api/ */
// print_r(getMatchSummary($token, 'iplt20_2013_g30'));

/* get News Aaggregation API data.  For more info https://developers.litzscore.com/docs/news_aggregation_api/ */
// print_r(getNewsAaggregation($token));


/* get Ball by Ball API data. b_1_1 is over key. For more info https://developers.litzscore.com/docs/ball_by_ball_api/ */
// print_r(getBallByBall($token, 'iplt20_2013_g30', 'b_1_1'));

