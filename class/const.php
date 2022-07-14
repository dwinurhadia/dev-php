<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

class Makan {
    const MIEAYAM = "RASA TERONG";
}
echo Goodbye::LEAVING_MESSAGE;

echo '<br>';
echo Makan::MIEAYAM;
echo '<br>';

class Goodbye1 {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye1();
  $goodbye->byebye();
?>