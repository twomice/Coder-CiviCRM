<?php

// Run coder_format.php against this file to see if known issues are resolved.

interface Bar {
}

class Foo
  implements Bar {

  protected $protected = 'foobar';

  function baz() {
    $a = array(1,               2,               3,               4,5);
    $b = array(1,
               2,
               3);
  } 
  
  static function bot() {
    $b = 'b';
  }
}
