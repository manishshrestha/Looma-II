<?php
	//Name: Skip
	//Email: skip@stritter.com
	//Owner: VillageTech Solutions (villagetechsolutions.org)
	//Date: 2015 03
	//Revision: Looma 2.0.0
	//File: includes/mongo-connect.php
	//Description:  for Looma 2

	$dbhost = 'localhost';
	$dbname = 'looma';

    try {
    	$m = new MongoClient("mongodb://127.0.0.1:27017");
    	//$m = new MongoClient();    //make a new mongo client object
        //use below FORMAT for PHP later than 5.5??
        //$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        
        //todo to try: $loomaDB =  $m->selectDB('looma');
        
       	$loomaDB = $m -> $dbname;  //connect to the database "looma"
                                   //make query variables for all collections
        $activities_collection = $loomaDB -> activities;
        $tags_collection       = $loomaDB -> tags;
    	$chapters_collection   = $loomaDB -> chapters;
    	$textbooks_collection  = $loomaDB -> textbooks;
        $dictionary_collection = $loomaDB -> dictionary;
        $logins_collection     = $loomaDB -> logins;
        $history_collection    = $loomaDB -> histories;
        $histories_collection  = $loomaDB -> histories;
        $slideshows_collection = $loomaDB -> slideshows;
        $text_files_collection = $loomaDB -> text_files;
        $lessons_collection    = $loomaDB -> lessons;
        $maps_collection       = $loomaDB -> maps;
        $games_collection      = $loomaDB -> games;
        $folders_collection    = $loomaDB -> folders;
        $edited_videos_collection = $loomaDB -> edited_videos;

        //$sienna_collection    = $loomaDB -> sienna;


        //the lines below are commented out for now. some Looma installs have old MONGO versions that dont do 'createIndex'
        //$activities_collection->createIndex(array('ch_id' => 1));
        //$activities_collection->createIndex(array('fn' => 1));
        //$text_files_collection->createIndex(array('dn' => 1), array('unique' => True));

    }
    catch(MongoConnectionException $e)
    {
        echo phpinfo();
        echo "MongoConnectError connecting to MongoDB. Make sure MongoDB is running";
        exit();
    };

    //ADD  - create indexes in case they are not set up


?>
