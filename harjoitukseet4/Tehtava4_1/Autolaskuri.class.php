<?php
// Autolaskuri.class.php

class Autolaskuri {
    private $vw;
    private $opel;
    private $toyota;

    public function __construct($vw, $opel, $toyota) {
        $this->vw = $vw;
        $this->opel = $opel;
        $this->toyota = $toyota;

    }

           public function get_vw() {
            return $this->vw;
        }

        public function get_opel() {
            return $this->opel;
        }

        public function get_toyota() {
            return $this->toyota;
        }

        public function set_vw($vw) {
            $this->vw = $vw;
          }

          public function set_opel($opel) {
            $this->opel = $opel;
          }
        
          public function set_toyota($toyota) {
            $this->toyota = $toyota;
          }

    public function set_autot($vw, $opel, $toyota) {
            $this->vw = $vw;
            $this->opel = $opel;
            $this->toyota = $toyota;
          }

}

?>