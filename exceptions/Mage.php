<?php 
include 'Character.php';

class Mage extends Character {
    private const RPGClass = "Mage";
    public function __construct($name, $life, $agility, $strenght, $wit)
      {
          // Appel au constructeur de la classe mère
          parent::__construct($name, $life, $agility, $strenght, $wit);
      }

      public function RPGClass(){
        echo self::RPGClass." : " ;
      }

      public function attackMage($weapons)
        {
            if ($weapons == "magic" || $weapons == "wand" )
            echo  parent::attack() ."$this->name : Feel the power of my $weapons <br>";
            else
            echo "I have no weapons! let's run away";
        }

        public function move(){
            echo "$this->name : ".parent::moveRight();
            echo "$this->name : ".parent::moveLeft();
            echo "$this->name : ".parent::moveForward();
            parent::moveBack();
        }
        
        public function unsheatheMage(){
            parent::unsheathe();
        }
}

$mage = new Mage('', '', '', '', '');
    $mage->setName("Jean-Luc");
    $mage->setLife(70);
    $mage->setAgility(10);
    $mage->setStrenght(3);
    $mage->setWit(10);

echo "".$mage->RPGClass()." " ;
echo "<ul><li>life : ".$mage->getLife()."</li>";
echo "<li>Agility : ".$mage->getAgility()."</li>";
echo "<li>Strenght : ".$mage->getStrenght()."</li>";
echo "<li>Wit : ".$mage->getWit()." </li></ul>";

echo "".$mage->getName()." : My name will go down in history! <br>";
echo "".$mage->getName()." : " ;
echo $mage->unsheatheMage("");
echo "".$mage->getName()." : " ;
echo "".$mage->attackMage("magic");

echo "".$mage->getName()." : " ;
echo $mage->move("");



?>