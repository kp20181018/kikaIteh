<?php
require '../db/Broker.php';
class PrognozaServis
{
  private Broker $broker;


  public function __construct($broker)
  {
    $this->broker = $broker;
  }

  public function ucitaj()
  {
    return $this->broker->izvrsiCitanje("select p.*, v.naziv as 'vreme_naziv', g.naziv as 'grad_naziv'" .
      " from prognoza p inner join vreme v on (p.vreme=v.id) inner join grad g on (g.id=v.grad)");
  }

  public function kreiraj($prognoza)
  {
    $this->broker->izvrsiIzmenu("insert into prognoza(datum, minimum, maksimum, grad, vreme) values ('"
      . date('Y-m-d', $prognoza['datum']) . "'," . $prognoza['minimum'] . ")," . $prognoza['maksimum']
      . "," . $prognoza['grad'] . "," . $prognoza['vreme'] . "");
  }

  public function izmeni($id, $prognoza)
  {
    $this->broker->izvrsiIzmenu("update prognoza set datum='" . date('Y-m-d', $prognoza['datum']) . "'s, minumum=" . $prognoza['minimum']
      . ", maksimum=" . $prognoza['maksimum'] . ", grad=" . $prognoza['grad'] . ", vreme=" . $prognoza['vreme'] . " where id=" . $id);
  }

  public function obrisi($id)
  {
    $this->broker->izvrsiIzmenu("delete from prognoza where id=" . $id);
  }
}
$prognozaServis = new PrognozaServis(new Broker());
