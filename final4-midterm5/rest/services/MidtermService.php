<?php
require_once __DIR__."/../dao/MidtermDao.php";

class MidtermService {
    protected $dao;

    public function __construct(){
        $this->dao = new MidtermDao();
    }

    /** TODO
    * Implement service method to add content to database
    */
    public function input_data($data){

    }

    /** TODO
    * Implement service method for route /midterm/regions/@country
    */
    public function regions($country){

    }


    /** TODO
    * Implement service method for route /midterm/initial_letter_distributions
    */
    public function initial_letter_distributions(){

    }

    /** TODO
    * Implement service method for route /midterm/cities/@country
    */
    public function cities($country){

    }
}
?>
