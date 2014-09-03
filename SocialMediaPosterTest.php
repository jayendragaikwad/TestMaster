<?php

class SocialMediaPosterTest extends PHPUnit_Framework_TestCase {

    private $posted_message;
    private $social_media_type; 
    
    public function testPostedMessage() {
          $this->assertEquals('Hello', $this->posted_message);
    }
    
    public function testSocialMediaType() {
          $this->assertEquals('FB', $this->social_media_type);
    }
}

?>
