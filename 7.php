<?php
class SuperHero {
     
    public function Hero($id, $nome, $poderEspecial, $energia, $forca, $origem) {
     $this->setid($id);
     $this->setIdade($nome);
     $this->setpoderEspecial($poderEspecial);
     $this->energia($energia);
     $this->forca($forca);
     $this->origem($origem);
   }
    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id = $id;
    }
    public function getnome()
    {
        return $this->nome;
    }
    public function setnome($nome)
    {
        $this->id = $nome;
    }
}
public function getpoderEspecial()
{
    return $this->poderEspecial;
}
public function setid($poderEspecial)
{
    $this->id = $poderEspecial;
}
public function getenergia()
{
    return $this->energia;
}
public function setenergia($energia)
{
    $this->id = $energia;
}

public function getforca()
{
    return $this->forca;
}
public function setforca($forca)
{
    $this->id = $forca;
}

public function getorigem()
{
    return $this->origem;
}
public function setorigem($origem)
{
    $this->id = $origem;
}
 }
 $n1 = new SuperHero("1","Kakaroto","SSJ","10000","8001","Planeta Vegeta");//+ de 8000//
 $n2 = new SuperHero("2","Harry Potter","Magia","750","1221","Londres");
 $n3 = new SuperHero("3","SuperMan ","Super Força, Visão de Calor e Raio X, Voar","2500","4000","Krypton");
 $n4 = new SuperHero("4","Brolly"," ssj","20000","12000","Planeta Vegeta");

 public function aumentEnergy($aumentEnergy)
 {
    $this->$energia*119127352;
 }
 public function calcPower($calcPower)
 {
    $this->$energia/$forca;
 }
?>
