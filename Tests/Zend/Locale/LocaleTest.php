<?php
namespace Tests\Zend\Validate;

class AclTest extends \Tests\TestCase
{
    protected $classes = array(
        '\Zend_Locale',
        '\Zend_Locale_Data',
        '\Zend_Locale_Exception',
        '\Zend_Locale_Format',
        '\Zend_Locale_Math',
        '\Zend_Locale_Math_Exception',
        '\Zend_Locale_Math_PhpMath'
    );

    /**
     * Ensure that the composer autoloader is finding the classes correctly.
     */
    public function testCanFindClasses()
    {
        foreach ($this->classes as $class) {
            $this->assertTrue(class_exists($class) || interface_exists($class));
        }
    }
}