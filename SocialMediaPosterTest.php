<?php

class SocialMediaPosterTest extends PHPUnit_Framework_TestCase {

    private $posted_message;
    private $social_media_type; 

    public function testInitialize() {
          $this->posted_message = 'Hello';
 	  $this->social_media_type = 'FB'; 
          $this->assertEquals('Hello', $this->posted_message);
          $this->assertEquals('FB', $this->social_media_type);
    }
}

?>
