<?php
include 'Movable.php';

abstract class Character implements Movable {

   protected $name;
   protected $life;   
   protected $agility;
   protected $strenght;
   protected $wit;
   private const RPGClass = "";
   
      public function __construct($name, $life = 50, $agility = 2, $strenght = 2, $wit = 2)
   {
      $this->name = $name;
      $this->life = $life;
      $this->agility = $agility;
      $this->strenght = $strenght;
      $this->wit = $wit;
   }

   public function getName()
   {
       return $this->name;
   }
   public function setName($name)
   {
       $this->name = $name;
   }

   public function moveRight(string $moveRight = "move right"){
      // echo $moveRight;
      if (substr($_SERVER['PHP_SELF'], -11) == 'warrior.php')
      echo "$moveRight like a bad boy <br>";
      elseif (substr($_SERVER['PHP_SELF'], -8) == 'mage.php')
      echo "$moveRight furtively <br>";
   }

   public function moveLeft(string $moveLeft = "move left"){
      // echo $moveLeft;
      if (substr($_SERVER['PHP_SELF'], -11) == 'warrior.php')
      echo "$moveLeft like a bad boy <br>";
      elseif (substr($_SERVER['PHP_SELF'], -8) == 'mage.php')
      echo "$moveLeft furtively <br>";
   }

   public function moveForward(string $moveForward = "move forward"){
      // echo $moveForward ;
      if (substr($_SERVER['PHP_SELF'], -11) == 'warrior.php')
      echo "$moveForward like a bad boy <br>";
      elseif (substr($_SERVER['PHP_SELF'], -8) == 'mage.php')
      echo "$moveForward furtively <br>";
   }

   public function moveBack(string $moveBack = "move back"){
      // echo $moveBack ;
      if (substr($_SERVER['PHP_SELF'], -11) == 'warrior.php')
      echo "$moveBack like a bad boy <br>";
      elseif (substr($_SERVER['PHP_SELF'], -8) == 'mage.php')
      echo "$moveBack furtively <br>";
   }
   

   
   public function getLife() {
      return $this->life;
   }
   public function setLife($life)
   {
       $this->life = $life;
   }

   public function getAgility()
   {
       return $this->agility;
   }
   public function setAgility($agility)
   {
       $this->agility = $agility;
   }

   public function getStrenght()
   {
       return $this->strenght;
   }
   public function setStrenght($strenght)
   {
       $this->strenght = $strenght;
   }
   
   public function setWit($wit)
   {
       $this->wit = $wit;
   }
   
   public function getWit()
   {
       return $this->wit;
   }
   

   public function attack(string $scream = "Rrrrrrr"){
      echo $scream ." <br>" ;
   }

   public function unsheathe(string $scabbard = "unsheathes his weapon."){
      echo $scabbard ." <br>" ;
   }
}



   
?>