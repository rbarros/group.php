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
        $this->assertAttributeEquals("25", 'string', $this->instance, 'Attribute was not correctly set');
    }
}