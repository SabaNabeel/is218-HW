<?php
class Bar {
    protected $inheritedProperty = 'inheritedDefault';
    }

    class Foo extends Bar {
        public $property = 'propertyDefault';
	    private $privateProperty = 'privatePropertyDefault';
	        public static $staticProperty = 'staticProperty';
		    public $defaultlessProperty;
		    }

		    $reflectionClass = new ReflectionClass('Foo');
		    var_dump($reflectionClass->getDefaultProperties());
		    ?>
