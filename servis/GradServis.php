<?php
require '../db/Broker.php';
class GradServis
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

  public function kreiraj($grad)
  {
    $this->broker->izvrsiIzmenu("insert into grad(naziv) values ('" . $grad['naziv'] . "')");
  }

  public function obrisi($id)
  {
    $this->broker->izvrsiIzmenu("delete from grad where id=" . $id);
  }
}
$gradServis = new GradServis(new Broker());
