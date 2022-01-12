<?php
require './db/Broker.php';
class PrognozaServis
{
  private Broker $broker;


  public function __construct($broker)
  {
    $this->broker = $broker;
  }

  public function ucitaj()
  {
    return $this->broker->izvrsiCitanje("select * from grad");
  }

  public function kreiraj($prognoza)
  {
    $this->broker->izvrsiIzmenu("insert into prognoza(datum, minimum, maksimum, grad, vreme) values ("
      . $prognoza['datum'] . "," . $prognoza['minimum'] . ")," . $prognoza['maksimum']
      . "," . $prognoza['grad'] . "," . $prognoza['vreme'] . "");
  }

  public function izmeni($id, $prognoza)
  {
    $this->broker->izvrsiIzmenu("update prognoza set datum=" . $prognoza['datum'] . ", minumum=" . $prognoza['minimum']
      . ", maksimum=" . $prognoza['maksimum'] . ", grad=" . $prognoza['grad'] . ", vreme=" . $prognoza['vreme'] . " where id=" . $id);
  }

  public function obrisi($id)
  {
    $this->broker->izvrsiIzmenu("delete from prognoza where id=" . $id);
  }
}
