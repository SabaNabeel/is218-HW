<?php
class Apple {
    public $var1;
        public $var2 = 'Orange';

	    public function type() {
	            return 'Apple';
		        }
			}
	ReflectionClass::export('Apple');
?>
