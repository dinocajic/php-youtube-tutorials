<?php
// Classes and Objects

class ClassName {

    public $property_name = "";

    public function __construct()
    {

    }

    public function someMethod( $parameter ) {

        $local_variable = "";
    }

    public function anotherMethod() {
        echo $this->property_name;
        $this->someMethod( "Hey" );
    }
}

$object_name = new ClassName();
$object_name->anotherMethod();