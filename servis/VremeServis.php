<?php
require "./db/Broker.php";

class VremeServis
{
  private Broker $broker;

  public function __construct($broker)
  {
    $this->broker = $broker;
  }

  public function ucitaj()
  {
    return $this->broker->izvrsiCitanje("select * from vreme");
  }
}
