<?php

    class Badge{
        private $listeBadges;

        public function __construct(){
            $this->listeBadges = array();
        }
        
        public function addBadges($badge){

            if( !in_array($badge, $this->listeBadges) ){
                array_push($this->listeBadges, $badge);
            }
        }

        public function printBadges(){
            foreach($this->listeBadges as $badge){
                echo ' <img style="width:70px;height:70px;" src="badges/'.$badge.'">';
                echo $badge;
            }
        }

        
            
        
    }

?>
