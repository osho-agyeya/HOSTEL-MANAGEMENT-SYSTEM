<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/dbms-opening/home1.html");
  }

  public function testMyTestCase()
  {
    $this->open("/dbms-opening/home1.html");
    $this->click("id=sex_m");
    $this->type("name=email", "bcd@gmail.com");
    $this->type("name=pass", "shriansh");
    $this->type("name=uid", "15BCE1314");
    $this->open("");
  }
}
?>