<?php
require '../db/Broker.php';
class GradServis
{
  private Broker $broker;


  public function __construct($broker)
  {
    $this->broker = $broker;
  }

  public function ucitaj($naziv)
  {
    if ($naziv == '') {
      return $this->broker->izvrsiCitanje("select * from grad");
    }
    return $this->broker->izvrsiCitanje("select * from grad where naziv like '%" . $naziv . "%'");
  }

  public function kreiraj($grad)
  {
    $this->broker->izvrsiIzmenu("insert into grad(naziv,postanski_broj) values ('" . $grad['naziv'] . "','" . $grad['postanski_broj'] . "')");
  }

  public function obrisi($id)
  {
    $this->broker->izvrsiIzmenu("delete from grad where id=" . $id);
  }
}
$gradServis = new GradServis(new Broker());
