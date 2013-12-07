<?php

/**
* Filename: Message.php
* Message class for the Guestbook
*/
class Message {
    public $_id;
    public $_name;
    public $_message;
    public $_email;
    public $_date_posted;
    public $_is_approved;

    /**
* @param Array
* array(
* 'id' => 1,
* 'name' => 'Juan',
* 'message' => 'Hello',
* 'email' => 'juan@mail.com',
* 'date_posted' => 'January 1, 2013',
* 'is_approved' => 'Y'
* )
*/
    public function __construct($config) {
        if (isset($config['id'])) {
            $this->_id = $config['id'];
        }
        if (isset($config['name'])) {
            $this->_name = $config['name'];
        }
        if (isset($config['message'])) {
            $this->_message = $config['message'];
        }
        if (isset($config['email'])) {
            $this->_email = $config['email'];
        }
        if (isset($config['date_posted'])) {
            $this->_date_posted = $config['date_posted'];
        }
        if (isset($config['is_approved'])) {
            $this->_is_approved = $config['is_approved'];
        }

   
        // return ($this->_is_approved == 'Y') ? true: false;
        if ($this->_is_approved == 'Y') {
                return true;
        } else {
                return false;
        }
    }
}

?>
