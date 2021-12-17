<?php 
include 'Character.php';

class Warrior extends Character{
    private const RPGClass = "Warrior";
    public function __construct($name, $life, $agility, $strenght, $wit)
      {
          parent::__construct($name, $life, $agility, $strenght, $wit);
      }

      public function RPGClass(){
        echo self::RPGClass." : " ;
      }

      public function attackWarrior($weapons)
        {
          // parent::attack();
        
            if ($weapons == "hammer" || $weapons == "sword" )
            echo  parent::attack() ." $this->name : I'll crush you with my $weapons<br>";
            else
            echo "I have no weapons! let's run away";
        }

        public function move(){
          echo "$this->name : ".parent::moveRight();
          echo "$this->name : ".parent::moveLeft();
          echo "$this->name : ".parent::moveForward();
          parent::moveBack();
      }

      public function unsheatheWarrior(){
        parent::unsheathe();
    }
}
$warrior = new warrior('', '', '', '', '');
    $warrior->setName("Robert");
    $warrior->setLife(100);
    $warrior->setAgility(8);
    $warrior->setStrenght(10);
    $warrior->setWit(3);

echo "".$warrior->RPGClass()." " ;
echo "<ul><li>life : ".$warrior->getLife()."</li>";
echo "<li>Agility : ".$warrior->getAgility()."</li>";
echo "<li>Strenght : ".$warrior->getStrenght()."</li>";
echo "<li>Wit : ".$warrior->getWit()." </li></ul>";

echo "".$warrior->getName()." : May the gods be with me <br>";
echo "".$warrior->getName()." : " ;
echo $warrior->unsheatheWarrior("");
echo "".$warrior->getName()." : " ;
echo "".$warrior->attackWarrior("hammer");

echo "".$warrior->getName()." : " ;
echo $warrior->move();

?>