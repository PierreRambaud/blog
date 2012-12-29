<?php
namespace Library;

/**
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */
class UploadTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Upload
     */
    protected $_object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $_FILES = array(
            'test' => array(
                'name' => 'test.jpg',
                'type' => 'image/jpeg',
                'size' => 542,
                'tmp_name' => __DIR__ . '/_files/source-test.jpg',
                'error' => 0
            )
        );

        $this->_object = new Upload(__DIR__ . '/_files/');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        unset($_FILES);
        unset($this->_object);
        @unlink(__DIR__ . '/_files/test.jpg');
    }

    /**
     * @covers Upload::receive
     */
    public function testReceive()
    {
        $this->assertTrue($this->_object->receive('test'));
    }
}
