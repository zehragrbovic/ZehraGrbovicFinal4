<?php
require_once "BaseDao.php";

class MidtermDao extends BaseDao {

    public function __construct(){
        parent::__construct();
    }

    /** TODO
    * Implement DAO method used to add content to database
    */
    public function input_data($data){

    }

    /** TODO
    * Implement DAO method to return list as requested within route /midterm/regions/@country
    */
    public function regions($country){

    }

    /** TODO
    * Implement DAO method to return list as requested within route /midterm/initial_letter_distributions
    */
    public function initial_letter_distributions(){

    }

    /** TODO
    * Implement DAO method to return list as requested within route /midterm/cities/@country
    */
    public function cities($country){

    }
}
?>
