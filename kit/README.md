# phpCricket library for Roanuz Cricket API
phpCricket library for Php using Roanuz Cricket API's.  Easy to install and simple way to access all Roanuz Cricket API's. Its a Php library for showing Live Cricket Score, Cricket Schedule and Statistics.


## Get Started
1. Clone the php-Cricket Github project by using `https://github.com/roanuz/php-cricket.git`

                                    [OR]

   Install the phpCricket using Composer. Follow the below instructions.

   i)  Download and install Composer by following the [official instructions.](https://getcomposer.org/download/)   
   ii) Create a composer.json defining your dependencies inside your project root directory. 
   ```rust
   // Copy this content into your composer.json file.

   {
    "repositories": [
        {
            "url": "https://github.com/roanuz/php-cricket.git",
            "type": "git"
        }
    ],
      "minimum-stability" : "dev",
      "prefer-stable" : true,
      "require-dev": {
        "roanuz/php-cricket": "dev-master"
      }
   }
   ```

   iii) Run Composer: `composer require --dev roanuz/php-cricket`

   iv)  You can find the phpCricket library`(roanuz/php-cricket)` inside the vendor folder.


2. Create a Cricket API App here [My APP Login](https://www.cricketapi.com/login/?next=/apps/)

3. Pass the required app credentials as below.
   
   ## Config Section
   ```rust
   // Create a new php file under your root directory. Inside that use this code.
   
   require_once __DIR__ . '/vendor/autoload.php';

   $phpCricket = new PhpCricket\PhpCriclib('your_access_key', 'your_secret_key', 'your_app_id', 'unique_device_id');

   ```  
4. After Completing Authentication you can successfully access the API's.
   
   ## Example
   ```rust
      
   // For getting particular match details.
   
   $getMatch = $phpCricket->getMatch('dev_season_2014_q1', 'summary_card');
   echo json_encode($getMatch); //Return Match Information in JSON format

   // For getting schedule details
   $getSchedule = $phpCricket->getSchedule('2013-05');
   echo json_encode($getSchedule); // Return Schedule Information in JSON format
   ```  
  
  To get the Live Score updates, you need to purchase the plan on [CricketAPI Plans](https://www.cricketapi.com/plans/)
  
### Need More Code reference ?
   
   Dive in to this file. [Example Code to Access Roanuz Cricket API's](https://github.com/roanuz/php-cricket/blob/master/example.php)

### Here is List of Roanuz Cricket API's

* [Match API](https://www.cricketapi.com/docs/match_api/)
* [Ball By Ball API](https://www.cricketapi.com/docs/ball_by_ball_api/)
* [Recent Matches API](https://www.cricketapi.com/docs/recent_match_api/)
* [Recent Season API](https://www.cricketapi.com/docs/recent_season_api/)
* [Schedule API](https://www.cricketapi.com/docs/schedule_api/)
* [Player Stats API](https://www.cricketapi.com/docs/player_stats_api/)
* [Season API](https://www.cricketapi.com/docs/season_api/)
* [Season Stats API](https://www.cricketapi.com/docs/season_stats_api/)
* [Season Points API](https://www.cricketapi.com/docs/season_points_api/)
* [Season Team API](https://www.cricketapi.com/docs/season_team_api/)
* [Over Summary API](https://www.cricketapi.com/docs/over_summary_api/)
* [News Aggregation API](https://www.cricketapi.com/docs/news_aggregation_api/)


### 

## Roanuz Cricket API
This Library uses the Roanuz Cricket API for fetching cricket scores and stats. Learn more about Litzscore Cricket API on https://www.cricketapi.com/ . Feel free to contact their amazing support team, if you got struck.

###Support
If you any question, please contact litzscore support support@cricketapi.com
