<?php 
// Object Oriented Programming
// class - object
// class Person {
//   public $user_Name;
//   public $user_email;
//   public $age;
//   public $tax;
//   public $absent;
//   public $rateAbsent;
//   public $overTime;
//   public $rateOverTime;

//   public function calcOverTime() 
//   {
//     return $this->overTime * $this->rateOverTime;
//   }
//   public function getAge($age2) {
//   if($age2<12) {
//     echo("age less Than 12 ");
//   }else {
//   $this->age=$age2;
//   }
//   }
// }

// // declare new user
// $ahmed = new Person;

// $ahmed->overTime = 30;
// $ahmed->rateOverTime = 2;

// echo $ahmed->calcOverTime();
 

//second Class

// class Persone_2 {
// public $name;
// public $age;
// public $email;
// public $sallery;
// public function userDataFunction() {
// return $this-> age + $this->sallery;
// }
// };

// $userData1=new Persone_2;
// $userData1 -> name="Ahmed";
// $userData1->age=25;
// $userData1->sallery=10;

// echo $userData1->userDataFunction() . "<br>";
// echo $userData1->name;

// Constructor

// class Student {
// public $name;
// public $age;
// public $level;
// public $score;
// public $maxSore;
// public $minScore;
// public $subject=["A"=>"0","E"=>"0","M"=>"0"];
// public function __construct($name,$age)
//   {
//     $this->name=$name;
//     $this->age=$age;
//   }
// }

// $student1=new Student("abdallh",10);

class father{
function moneyFather() {
echo "fath+er ammount is 1000$";
}
}

class son extends father{
  function moneySon() {
  echo "son ammount is 500$";
  }
  }

  $father_1=new father();
  $father_1->moneyFather() ;
  /////////////////
  $son_1=new son();
  echo "<br>";
  $son_1->moneySon();
  echo "<br>";+
  $son_1->moneyFather();