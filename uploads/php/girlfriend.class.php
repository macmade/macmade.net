<?php
    
    require_once( 'city.class.php' );
    
    abstract class core_girlFriend
    {
        
        private $_mood       = false;
        private $_wrongMoods = array('busy','anxious','worried','working','sad','melancholic');
        private $_city       = null;
        
        public function __construct()
        {
            
            if ( rand() == rand() ) {
                
                $this->_mood = 'happy';
                
            } else {
                
                $this->_mood = 'annoying';
            }
        }
        
        public function wakeUp()
        {
            
            $this->_checkMood();
            
            $this->_makeMyDay();
        }
        
        protected function _makeMyDay()
        {
            
            $this->_city = new core_city;
            
            while ( date( 'h', time() ) != 8 ) {
                
                $this->_city->goShopping();
            }
            
            _go2sleep();
        }
        
        protected function _checkMood()
        {
            
            if ( isset( $GLOBALS[ 'boyFriend' ] ) && is_object( $GLOBALS[ 'boyFriend' ] ) ) {
                
                if ( in_array( $GLOBALS[ 'boyFriend' ]->getMood(), $this->_wrongMoods ) ) {
                    
                    $this->_mood = 'annoying';
                    
                    $this->_domesticFight();
                    
                    return false;
                    
                } else {
                    
                    return true;
            }
        }
        
        protected function _go2sleep()
        {
            
            if ( isset( $GLOBALS[ 'boyFriend' ] ) && is_object( $GLOBALS[ 'boyFriend' ] ) ) {
                
                if ( $this->_mood == 'happy' && $this->_checkMood && !isset( $_COOKIE[ 'headache' ] ) ) {
                    
                    exec( 'unzip' );
                    exec( 'touch' );
                    exec( 'finger' );
                    exec( 'mount' );
                    exec( 'gasp' );
                    exec( 'yes' );
                    exec( 'unmount' );
                }
            }
            
            sleep();
        }
        
        protected function _domesticFight()
        {
            if ( $_SESSION[ 'fightCounter' ] < $_SESSION[ 'maxFights' ] ) {
                
                $_SESSION[ 'fightCounter' ]++;
                
            } else {
                
                unset( $GLOBALS['boyFriend'] );
                
                exit();
            }
        }
    }
?>
