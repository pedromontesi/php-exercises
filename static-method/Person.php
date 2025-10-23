<?php

 class Person {

    static $id;
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        self::$id++;
        $this->name = $name;
        $this->age = $age;

    }
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public static function getId(){
        return self::$id;
    }



}
