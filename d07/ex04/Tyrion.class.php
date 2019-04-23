<?php
    class Tyrion extends Lannister {
        public function sleepWith($people) {
            if ($people instanceof Lannister) {
                print "Not even if I'm drunk !" . PHP_EOL; //Jaime and Cersei
            }
            else {
                print "Let's do this." . PHP_EOL; //Sansa
            }
        }
    }
