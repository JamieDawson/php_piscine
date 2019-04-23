<?php
    class Jaime extends Lannister {
        public function sleepWith($people) {
            if ($people instanceof Lannister)
            {
                if ($people instanceof Cersei)
                    print "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL; 
                else
                    print "Not even if I'm drunk !" . PHP_EOL; //Tyrion
            }
            else
                print "Let's do this." . PHP_EOL; //sansa
        }
    }
 ?>
