<?php
namespace Library;

class Upload
{
    /**
     * Destination directory
     *
     * @var string
     */
    protected $_destination;

    /**
     * Constructor
     *
     * @param string $destination
     */
    public function __construct($destination)
    {
        $this->_destination = rtrim($destination, '/');
    }

    /**
     * Receive file
     *
     * @param string $name
     * @return boolean
     */
    public function receive($name)
    {
        if(empty($_FILES[$name]) or !is_uploaded_file($_FILES[$name]['tmp_name']))
        {
            return FALSE;
        }

        return move_uploaded_file($_FILES[$name]['tmp_name'], $this->_destination . '/' . $_FILES[$name]['name']);
    }
}
