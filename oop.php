<?php
	header('Content-Type:text/html;charset=utf-8');	
	#创建一个类
	//protected 在子类可访问
	class Person{
		private $name;
		// protected $name;
		private $email;
		// public static $age=40;
		private static $age=40;

		public static function getAge(){
			return Person::$age;
		}

		public function setName($sbqname){
			$this->name=$sbqname;
		}
		public function getName(){
			return $this->name;
		}
		public function setEmail($sbqemail){
			$this->email=$sbqemail;
		}
		public function getEmail(){
			return $this->email;
		}
		
		#构造函数
		public function __construct($name="Henry",$email="123@qq.com"){
			$this->name=$name;
			$this->email=$email;
			// echo "Person 对象已被创建";
			#神奇变量
			echo __CLASS__."对象已被创建";
		}

		#析构函数
		public function __destruct(){
			echo __CLASS__."对象已被销毁";
		}
	}

	// $person1=new Person;
	// $person1->name="sunshuai";
	// echo $person1->name;

	// $person1->setName("zxx");
	// echo $person1->getName();
	// $person1->setEmail("123456@qq.com");
	// echo $person1->getEmail();

	// $person1=new Person("miaojie","miaojie@qq.com");
	// echo $person1->getName();

	#继承
	class Customers extends Person{
		private $salary;
		public function setSalary($salary){
			$this->salary=$salary;
		}
		public function getSalary(){
			return $this->salary;
		}
		//protected
		// public function setName($name){
		// 	$this->name=$name;
		// }
		public function __construct($name,$email,$salary){
			parent::__construct($name,$email);
			$this->salary=$salary;
		}
	}
	$customer=new Customers("Bucky","bucky@qq.com",3000);
	// $customer->setSalary(3000);
	echo $customer->getName();
	echo $customer->getEmail();
	echo $customer->getSalary();

	#protected
	// $customer->setName("Henry");
	// echo $customer->getName();
	
	#调用静态变量
	# ::调用父级,调用静态变量
	// echo person::$age;
	// echo Person::getAge();
 ?>