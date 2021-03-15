<?php

class ClassificazioneScientifica {

    public $dominio;

    public $regno;

    public $phylum;

    public $subPhylum;

    public $classe;

    public $ordine;

    public $sottordine;

    public $famiglia;

    public $sottofamiglia;

    public $genere;

    public $specie;



    public function __construct($dominio, $regno, $phylum, $subPhylum, $classe, $ordine, $sottordine, $famiglia, $sottofamiglia, $genere, $specie) {
        $this->dominio = $dominio;
        $this->regno = $regno;
        $this->phylum = $phylum;
        $this->subPhylum = $subPhylum;
        $this->classe = $classe;
        $this->ordine = $ordine;
        $this->sottordine = $sottordine;
        $this->famiglia = $famiglia;
        $this->sottofamiglia = $sottofamiglia;
        $this->genere = $genere;
        $this->specie = $specie;
    }

}

class Domestico{

  private $listaDomestico = [];

  public function addAnimale(ClassificazioneScientifica $ClassificazioneScientifica) {
      $this->listaDomestico[] = $gatto;
  }

  public function getAnimale() {
      return $this->listaDomestico;
  }
}


$leone = new ClassificazioneScientifica('Eukaryota', 'Animalia', 'Chordata', 'Vertebrata', 'Mammalia', 'Carnivora', 'Feliformia', 'Felidae', 'Pantherinae', 'Panthera', 'leo');
echo $leone->genere . ' ';
echo $leone->specie . '</br>';

$gatto = new ClassificazioneScientifica('Eukaryota', 'Animalia', 'Chordata', 'Vertebrata', 'Mammalia', 'Carnivora', 'Feliformia', 'Felidae', 'Felinae', 'Felis', 'silvestris');
echo $gatto->genere . ' ';
echo $gatto->specie . '</br>';

$linceRossa = new ClassificazioneScientifica('Eukaryota', 'Animalia', 'Chordata', 'Vertebrata', 'Mammalia', 'Carnivora', 'Feliformia', 'Felidae', 'Felinae', 'Lynx', 'rufus');
echo $linceRossa->genere . ' ';
echo $linceRossa->specie . '</br>';

?>
