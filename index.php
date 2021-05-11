<!-- BONUS: utilizzare extends, traits per estendere la nostra classe principale, 
come visto durante la lezione del mattino. -->
<?php
require "User.php";

$user1 = new User("Giuseppe", "Festa");
    try {
        $user1->setAge(32);
    } catch(Exception $e) {
        echo "Errore : " . $e->getMessage();
    }
//var_dump($user1);
echo "<h1> NOME : " . $user1->getName() . "</h1>";
echo "<h1> COGNOME : " . $user1->getLastName() . "</h1>";
echo "<h1> ETA' : " . $user1->getAge() . "</h1>" . "<br>";


$user2 = new User("Paolo", "Dossetto");
    try {
        $user2->setAge("HELLO WORLD");
    } catch(Exception $e) {
        echo "Errore : " . $e->getMessage();
    }
//var_dump($user2);
echo "<h1> NOME : " . $user2->getName() . "</h1>";
echo "<h1> COGNOME : " . $user2->getLastName() . "</h1>";
echo "<h1> ETA' : " . $user2->getAge() . "</h1>" . "<br>";


$user3 = new User("Mihai", "Eminescu");
    try {
        $user3->setAge(160);
    } catch(Exception $e) {
        echo "Errore : " . $e->getMessage();
    }
//var_dump($user3);
echo "<h1> NOME : " . $user3->getName() . "</h1>";
echo "<h1> COGNOME : " . $user3->getLastName() . "</h1>";
echo "<h1> ETA' : " . $user3->getAge() . "</h1>" . "<br>";








?>