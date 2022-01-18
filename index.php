<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ereditary&private</title>
</head>
<body>
    <?php
        /** CONSEGNA:
         * 
         *      Definire classe Persona:
         *          - ATTRIBUTI (private):
         *              - nome
         *              - cognome
         *              - dataNascita (stringa)
         *          - METODI:
         *              - costruttore che accetta nome e cognome
         *              - setter/getter per ogni variabile
         *              - printFullPerson: che stampa "nome cognome: dataNascita"
         *              - toString: che ritorna "nome cognome: dataNascita"
         * 
         * 
         *      Definire classe Employee che eredita da Persona:
         *          - ATTRIBUTI (private):
         *              - stipendio
         *              - dataAssunzione
         *          - METODI:
         *              - costruttore che accetta nome, cognome e stipendio
         *              - setter/getter per variabili 
         *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
         *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
         * 
         */

        class Person {
            
            private $name;
            private $surname;
            private $bornDate;

            public function __construct($name, $surname) {

                $this -> setName($name);
                $this -> setSurname($surname);
            }

            // get e set per variabili private
            public function getName() {
                return $this -> name;
            }
            public function setName($name) {
                return $this -> name = $name;
            }
            public function getSurname() {
                return $this -> surname;
            }
            public function setSurname($surname) {
                return $this -> surname = $surname;
            }
            public function getDate() {
                return $this -> bornDate;
            }
            public function setDate($bornDate) {
                return $this -> bornDate = $bornDate;
            }

            // metodi
            public function printFullPerson() {
                return "Nome: " . $this -> getName() . "<br>" . "Cognome: " . $this -> getSurname() . "<br>" . $this -> getDate();
            }

            public function __toString() {
                return "Nome: " . $this -> getName() . "<br>" . "Cognome: " . $this -> getSurname() . "<br>" . $this -> getDate();
            }
        }

        class Employee extends Person {

            private $retribution;
            private $hiringDate;

            public function __construct($name, $surname, $retribution) {

                parent::__construct();
                $this -> setRetribution($retribution);
            }

            // get e set per variabili private
            public function getRetribution() {
                return $this -> retribution;
            }
            public function setRetribution($retribution) {
                return $this -> retribution = $retribution;
            }
            public function getHiringDate() {
                return $this -> hiringDate;
            }
            public function setHiringDate($hiringDate) {
                return $this -> hiringDate = $hiringDate;
            }
            
            // metodi
            public function getFullEmployee() {
                return $this -> getName() . "<br>" . $this -> getSurname() . "<br>" . $this -> getRetribution() . " (" . $this -> getHiringDate() . ")";
            }

            public function __toString() {
                return $this -> getName() . "<br>" . $this -> getSurname() . "<br>" . $this -> getRetribution() . " (" . $this -> getHiringDate() . ")";
            }
        }

        $p1 = new Person("Bruce", "Banner");
        $p1 -> setDate("10/10/1979");

        $p2 = new Person("Matt", "Murdock");
        $p2 -> setDate("04/10/1982");

        $p3 = new Person("Frank", "Castle");
        $p3 -> setDate("22/11/1975");
        
        $e1 = new Employee("2.500$");
        $e1 -> setHiringDate("12/12/2000");

        $e2 = new Employee("3.500$");
        $e2 -> setHiringDate("20/05/2006");

        $e3 = new Employee("2.150$");
        $e3 -> setHiringDate("17/09/2002");

        echo $p1 . "<br><br>";
        echo $p2 . "<br><br>";
        echo $p3 . "<br><br>";

        echo "<hr>";
        
        echo $e1 . "<br><br>";
        echo $e2 . "<br><br>";
        echo $e3 . "<br><br>";
        ?>
        
</body>
</html>