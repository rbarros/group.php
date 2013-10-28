<?php

use Group\AbstractTest as AbstractTest;
use Group\Group;

class GroupTest extends AbstractTest {
    public $instance;

    /**
     * Antes de cada teste verifica se a classe existe
     * e cria uma instancia da mesma
     * @return void
     */
    public function assertPreConditions()
    {   
        $this->assertTrue(
                class_exists($class = 'Group\Group'),
                'Class not found: '.$class
        );
        $this->instance = new Group();
    }

    public function testInstantiationWithoutArgumentsShouldWork(){
        $this->assertInstanceOf('Group\Group', $this->instance);
    }

    /**
     * @depends testInstantiationWithoutArgumentsShouldWork
     */
    public function testSetKeyWithValidDataShouldWork()
    {
        $this->assertEquals(new Group(), $this->instance, 'Returned value should be the same instance for fluent interface');
        
        $decimal = 25;
        $instance = new Group($decimal);
        $this->assertAttributeEquals("25", 'string', $instance, 'Attribute was not correctly set');
    }

    /**
     * @depends testInstantiationWithoutArgumentsShouldWork
     */
    /*
    public function testSetGroupWithValidDataShouldWork()
    {
        $decimal = 25;
        $instance = new Group($decimal);
        $comp = array(
             array('caracter' => '2', 'position' => array(0))
            ,array('caracter' => '5', 'position' => array(1))
        );
        $this->assertAttributeEquals($comp, 'groups', $instance, 'Attribute was not correctly set');
    }
    */
   
    /**
     * @depends testInstantiationWithoutArgumentsShouldWork
     */
    /*
    public function testIfTheGroupIsAlreadyCaracter()
    {
        $decimal = 22;
        $instance = new Group($decimal);
        $comp = array(
            array('caracter' => '2', 'position' => array(0,1))
        );
        $this->assertAttributeEquals($comp, 'groups', $instance, 'Attribute was not correctly set');
    }
    */

    /**
     * @depends testInstantiationWithoutArgumentsShouldWork
     */
    public function testGetGroupWithValidDataShouldWork()
    {
        $decimal = 2525;
        $instance = new Group($decimal);
        $comp = array("2525");
        $this->assertAttributeEquals($comp, 'groups', $instance, 'Attribute was not correctly set');
    }

    /**
     * @depends testInstantiationWithoutArgumentsShouldWork
     */
    public function testGetGroupsWithValidDataShouldWork()
    {
        $instance = new Group(25);
        $this->assertEquals($instance->getGroups(), array("25"));
        
        $instance = new Group(2525);
        $this->assertEquals($instance->getGroups(), array("2525"));

        $instance = new Group("aabb");
        $this->assertEquals($instance->getGroups(), array("aa","bb"));

        $instance = new Group("0123456789");
        $this->assertEquals($instance->getGroups(), array("0123456789"));

        $instance = new Group("666666666");
        $this->assertEquals($instance->getGroups(), array("666666666"));

        $instance = new Group("166666666");
        $this->assertEquals($instance->getGroups(), array("1","66666666"));
       
        $instance = new Group("025323232");
        $this->assertEquals($instance->getGroups(), array("025","323232"));

        $instance = new Group("125252525");
        $this->assertEquals($instance->getGroups(), array("1","25252525"));

        $instance = new Group("047777777");
        $this->assertEquals($instance->getGroups(), array("04","7777777"));

        $instance = new Group("58123123");
        $this->assertEquals($instance->getGroups(), array("58","123123"));

        $instance = new Group("aaabbb");
        $this->assertEquals($instance->getGroups(), array("aaa","bbb"));

        $instance = new Group("123123123");
        $this->assertEquals($instance->getGroups(), array("123123123"));
    }
}