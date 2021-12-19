<?php
include 'Character.php';

class WeaponException extends Character{
    public function __construct($weapons)
      {
        $this->weapons = $weapons;
      }
      public function tryToAttack($weapons)
        {
            if ((substr($_SERVER['PHP_SELF'], -11) == 'warrior.php') && ($weapons == "magic" || $weapons == "wand") )
            echo  "I don 't need this stupid $weapons ! Don 't misjudge my powers !";
            elseif ((substr($_SERVER['PHP_SELF'], -8) == 'mage.php') && ($weapons == "hammer" || $weapons == "sword"))
            echo "A $weapons?? What should I do with this ?!";
            else 
            echo " I refuse to fight with my bare hands.";
        }
}

?>