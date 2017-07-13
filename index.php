<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	
	<title>JRV_PHP_Study</title>
  </head>
  <body>
	<div class="container">
	JRV_PHP_Study <br/><br/>
		<?php
			echo "== Variables ==<br/>";
			
			$name = "James";
			echo "<p>My name is $name</p>";
			
			$string1 = "<p>This is the first part";
			
			$string2 = "of a sentence</p>";
			
			echo " ".$string1." ".$string2;
			
			$myNumber = 45;
			
			$calculation = $myNumber * 31 / 97 + 4;
			
			echo "The result of the calculation (45 * 31 / 97 + 4) is ".$calculation;
			
			$myBool = true;
			echo "<p>This statement is true? ".$myBool."</p>";
			
			$variableName = "name";
			
			echo $$variableName."<br/>";
			
			$x = 10; echo "x: ".$x."<br/>";
			$y = &$x; echo "y: ".$y."<br/>";
			
			echo "<br/>";
			$a = 10;
			echo $a+++$a++ + " "; echo " ";
			echo $a + " "; echo " ";
			echo $a---$a-- + " "; echo " ";
			echo $a;
			
			echo "<br/><br/>";
			$c = PHP_INT_MAX;
			echo $c."<br/>";
			$c++;
			echo $c."<br/>";
			$c++;
			echo $c."<br/>";
			echo (int)($c)."<br/>";
			var_dump($c);
			
			// integer overflow...
			
			echo"<br/><br/>";
			
			echo "3" + "15%" + "$25"; // echoes 18; $25 is ignored...
			
			echo"<br/><br/>";
			
			$bool2 = true and false; // the second statement is just "false" and does nothing
			var_dump($bool2);
			echo"<br/>";
			$bool2 = true and $bool2 = false; // 'and' keyword execs 2 statements
			var_dump($bool2);
			
			echo"<br/><br/>";
			
			$bool3 = (071 == 71); var_dump($bool3); echo "<br/>";
			echo (int)(071); echo "<br/>"; // 071 is an octet and is (8*7 + 8*1) = 57
			$bool3 = ('071' == 71); var_dump($bool3); echo "<br/>";
			$bool3 = ('071' === 71); var_dump($bool3); echo "<br/>";
			
			echo"<br/><br/>";
			
			
		?>
		
		<?php
			echo "== Arrays ==<br/>";
			$myArray = array("Bill", "Lauren", "Thomas", "Ryan");
			
			$myArray[] = "Katy";
			
			print_r($myArray);
			
			echo $myArray[0];
			
			$anotherArray[0] = "pizza";
			$anotherArray[1] = "yogurt";
			
			$anotherArray[5] = "coffee";
			
			$anotherArray["myFavouriteFood"] = "ice cream";
			
			echo "<br><br>";
			
			print_r($anotherArray);
			
			echo "<br><br>";
			
			$thirdArray = array(
				"France" => "French",
				"USA" => "English",
				"Germany" => "German"
			);
			unset($thirdArray["France"]);
			
			print_r($thirdArray);
			echo "Array size: ".sizeof($thirdArray);
			
			echo "<br/><br/>";
			
			
			$family = array("Bob", "Joe", "Mel", "Fern");

			for ($i = 0; $i < sizeof($family); $i++){
				echo $family[$i]."<br/>";
			}
			
			echo "<br>";
			
			foreach($family as $key => $value)
			{
				echo "Array item ".$key." is ".$value." Smith<br>";
				
			}	
			
			echo "<br>";
			$str1="bob smith";
			$str2="bob";
			echo strpos($str1, $str2); echo "<br>";
			
			$array1 = array("color" => "red", 2, 4);
			$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
			$result = array_merge($array1, $array2);
			print_r($result);
			
			$b = 5;
			$result = array_merge($array1, $b);
			print_r($result);
			echo "Author's note: you cannot merge an array with a number!<br/><br/>";
			
			$array3= array(3);
			$result = array_merge($array1, $array3);
			print_r($result); echo "<br/>";
			echo "Author's note: you can merge an array with a single entity array!";
			
			echo "<br/><br/>";
			
			$x = "Robert";
			$x[14] = "Tron";
			echo $x."<br/>";
			echo strlen($x)."<br/>";
			
			
			echo "<br/><br/>";
		?>
		
		<?php
			echo "== If Statements ==<br/>";
			$user = "andy";

			if ($user == "rob") {
				echo "Hello Rob!";
			}
			else {
				echo "Not a recognized user.";
			}
			
			$age = 17;
			
			echo "<br><br>";
			
			if ($age >= 18 || $user == "rob") {
				echo "You're old enough";
			}
			else {
				echo "you are too young";
			}
			
			echo "<br><br>";
		?>
		
		
		<?php
			echo "== Loops ==<br/>";
			$i = 0;
	
			while($i < 10){
				echo ($i*5)."<br>";
				$i++;
			}
			
			$myArray = array("1", "2", "3", "4");
			
			$i = 0;
			while ($i < sizeof($myArray))
			{
				echo $myArray[$i]." ";
				
				$i++;
			}
			
			echo "<br><br>";
		?>
		
		<?php
			echo "== GET Variables ==<br/>";
			//http://79.170.44.122/jrvaughan917.com/PHP/index.php/?name="rob"&password="1234"&gender="male"
			if($_GET) {
				echo "S_GET: ";
				print_r($_GET);
			}
			
			echo "<br/>";
			
			if(isset($_GET["name"])) {
				echo "Hi there ".$_GET['name']."!<br/>";
			}
			
			if(isset($_GET["favoriteFood"])) {
				echo "Your favorite food is ".$_GET['favoriteFood']."!<br/>";
			}
			
			
			
		?>

		<p>
			<form>
				<label for="nameInput">What's your name?</label>
				<input name="name" type="text" id="nameInput">
				<br/>
				<label for="favoriteFoodInput">What's your favorite food?</label>
				<input name="favoriteFood" type="text" id="favoriteFoodInput">
				<br/>
				<input type="submit" value="Go!">
			</form>
		</p>
		
		<br/>
		
		<?php	
			if (isset($_GET['number'])) {
				if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)) {
					$isPrime = true;
					
					$i = 2;
					while ($i < $_GET['number']) {
						if ($_GET['number'] % $i == 0) {
							// number is not prime!
							$isPrime = false;
						}
						
						$i++;
					}
					
					if ($_GET['number'] == 1) {$isPrime = false; $i = 1;}
					
					if($isPrime) {
						echo "<p>".$i." is a prime number!</p>";
					} else {
						echo "<p>".$i." is a not prime number!</p>";
					}
				} else {
					// user has submitted something not a positive whole number
					echo "<p>Sorry, that input is not valid.</p>";
				}
			}
		?>

		<form>
			<label for="number">Please enter a positive whole number: </label>
			<input name="number" type="text" id="number">
			<input type="submit" value="Go!">
		</form>
		
		<br/>
		
		<?php
			echo "== POST Variables ==<br/>";
			
			echo "\$_POST: ";
			print_r($_POST);
			
			echo "Hint: Only Bob and Anne are recognized users.</br></br>";
			$myArray = array("Bob", "Anne");
			
			$userMatch = false;
			
			if(isset ($_POST["name2"])) {
				for ($i = 0; $i < sizeof($myArray); $i++){
					if ($_POST["name2"] == $myArray[$i]) {
						$userMatch = true;
					}
				}
				
				if ($userMatch) {
					echo "Welcome, recognized user. <br>";
				} else {
					echo "You are not a recognized user. <br>";
				}
			}
		?>

		<form method="post">
			<label for="name2">Please enter a user name: </label>
			<input name="name2" type="text">
			<input type="submit" value="Go!">
		</form>
		
		<br/><br/>
		
		<?php
			if(
				isset($_POST["emailTo"]) && 
				isset($_POST["subject"]) && 
				isset($_POST["body"]) && 
				isset($_POST["headers"])
			) {
				$emailTo = $_POST["emailTo"];
				$subject = $_POST["subject"];
				$body = $_POST["body"];
				$headers = $_POST["headers"];
			
				if(mail($emailTo, $subject, $body, $headers) == 1) {
				echo "Email has been sent successfully!";
				} else {
					echo "Email attempt failed.";
				}
			}
		?>
		Send an email! Please don't spam anyone! * Note this will most likely get caught by a spam filter.
		<form method="post">
			<label for="headers">Headers such as 'from: example@examplemail.com': </label> <input name="headers" type="text"><br/>
			<label for="emailTo">Send email to: </label> <input name="emailTo" type="text"><br/>
			<label for="subject">Subject: </label> <input name="subject" type="text"><br/>
			<label for="body">Body: </label> <input name="body" type="text"><br/>
			<input type="submit" value="Send!">
		</form>
		
		<br/><br/>
		
		<?php 
			echo "== Functions ==<br/>";
			$x = 5;
			$y = 10;
			
			function addVariables() {
				global $x, $y;
				$y = $x + $y;
			}
			
			addVariables();
			echo "global x + global y: ".$y."<br/><br/>";
		
			function incrementVariable(){
				static $z = 0;
				echo "static z: ".$z."<br/>";
				$z++;
			}
			
			incrementVariable();incrementVariable();incrementVariable();incrementVariable();
			
			echo "<br/>";
			
			echo function_exists('incrementVariable');
		?>
		
		<br/><br/><br/>
		
		<?php
			echo "== Magic Methods ==<br/>";
			
			class toStringTest {
				private $d;
				
				public function __construct($d) {
					$this->d = $d;
				}
				
				public function __toString() {
					return $this->d;
				}
			}
			
			$class = new toStringTest("bobby");
			echo $class;
			
			echo "<br/><br/>";

			class invokeTest {
				public function __invoke($e) {
					echo "Ye have invoked me to say ".$e."!!!";
				}
				
			}
			$invo = new invokeTest;
			$invo("ayyy"); echo "<br/>";
			var_dump(is_callable($invo));
			
			
		?>
		
		<br/><br/>
		
		<?php
			echo "== Trait ==<br/>";
			
			trait abcs {
				public function sayAbcs() {
					echo "abcdefghijklmnopqrstuvwxyz<br/>";
				}
			}
			
			trait oneTwoThrees {
				public function say123s() {
					echo "0123456789<br/>";
				}
			}
			
			class specialCharacters {
				use oneTwoThrees, abcs;
				
				public function saySpecialCharacters() {
					echo "!@#$%^&*\(\)-_=+<br/>";
				}
			}
			
			$say = new specialCharacters();
			
			$say->sayAbcs();
			$say->say123s();
			$say->saySpecialCharacters();
		?>
		
		<br/><br/>
		
		<?php
			echo "== Closures ==<br/>";
			
			$b = function($a) { echo $a." ".$a." ".$a; };
			$b("apple"); 
			
			echo "<br/><br/>";
			
			$a = "banana";
			$c = function() use (&$a) {
				echo $a." ".$a." ".$a." ".$a." ".$a;
			};
			$c();
			
			echo "<br/><br/>";
			
			class shoppingCart {
				const PRICE_BREAD = 2.00;
				const PRICE_ORANGE_JUICE = 2.50;
				const PRICE_HAM = 4.50;
				
				protected $items = array();
				
				public function addItem($item, $quantity) {
					$this -> items[$item] = $quantity;
				}
				
				public function getQuantity($item) {
					return isset($this->items[$item]) ? $this->items[$item] : FALSE;
				}
				
				public function getTotal($tax) {
					$total = 0.00;
					$callback = function ($quantity, $item) use ($tax, &$total) { // closure
						$pricePerItem = constant(__CLASS__."::PRICE_".strtoupper($item));
						$total += ($pricePerItem * $quantity) * (1 + $tax);
					};
					
					array_walk($this->items, $callback);
					return round($total,2);
				}
			}
			
			$myNewCart = new shoppingCart;
			
			$myNewCart->addItem('bread', 1);
			$myNewCart->addItem('orange_juice', 2);
			$myNewCart->addItem('ham', 3);
			
			
			echo $myNewCart->getQuantity('bread'); echo "<br/>";
			echo $myNewCart->getQuantity('orange_juice'); echo "<br/>";
			echo $myNewCart->getQuantity('ham'); echo "<br/>";
			echo "<br/>";
			echo "total: $".($myNewCart->getTotal(0.0825))."<br/>";
			
		?>
		
		
		
		
		
		
	</div>
  </body>
</html>


