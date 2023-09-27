<?php

Flight::route('GET /midterm/connection-check', function(){
    /** TODO
    * This endpoint prints the message from constructor within MidtermDao class
    * Goal is to check whether connection is successfully established or not
    * ENDPOINT IS NOT GRADED; YOU CAN USE IT IF YOU NEED TO TEST CONNECTION, OTHERWISE YOU CAN LEAVE IT EMPTY
    * This endpoint does not have to return output in JSON format
    */
});

Flight::route('POST /midterm/input_data', function(){
    /** TODO
    * This endpoint is used to insert IP2LOCATION.json file content to database table locations
    * This endpoint should return output in JSON format
    * 10 points
    */
});


Flight::route('GET /midterm/regions/@country', function($country){
    /** TODO
    * This endpoint is used to return list of unique regions
    * for country given as parameter
    * This endpoint should return output in JSON format
    * 30 points
    */
});

Flight::route("GET /midterm/initial_letter_distributions", function(){
    /** TODO
    * This endpoint is used to create report that lists alphabet letters and
    * number of occurences of the given letter as initial letter in
    * country name
    * This endpoint should return output in JSON format
    * 30 points
    */
});

Flight::route("GET /midterm/cities/@country", function($country){
    /** TODO
    * This endpoint is used to return uniques cities and country code for the country and region given as parameter values
    * This endpoint should return output in JSON format
    * 30 points
    */
});

?>
