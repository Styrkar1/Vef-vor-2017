<p>Munurinn á public, protected og private.</p>

<p>Public method geta verið notuð utan við methodin með $method->publicMember og innan við með $this->publicMember og önnur method geta inheritað frá public methods</p>

<p>Protected method geta bara verið aðgengið að frá innan við methodinu t.d $this->protectedMember. Ef eitthvað annað inheritar frá þessu method eru sömu reglur, bara frá innan methodinar með $this.</p>

<p>Private method eru lík Protected method nema þau geta bara verið notuð innan við methodinu og geta ekki verið inherituð frá neinu öðru</p>

<p>------------------------------------------------------------------------------------------------</p>

<p>Inheritance er notað þegar þú ert að búa til marga hluti sem eru líkir t.d dýr</p>
t.d

<p>
<?php
class Animal
{

	public $name;

	public function Greet()
	{
		return "Hello world, i am an Animal and i seem to have no name at all"."<br>";
	}
}

class Dog extends Animal
{
	public function Greet()
	{
		return "Hello world, i am a dog and my name is ".$this->name."<br>";
	}
}

$Animal = new Animal();
echo $Animal->Greet();
echo "\r\nand then i add the specifics via the inheritor"."<br>";
$Animal = new Dog();
$Animal->name = "'C'tan the destroyer of worlds'"."<br>";
echo $Animal->Greet();
?>
just look at the code on www.github.com/Styrkar1/Vef-vor-2017

<p>-----------------------------------------------------------------</p>

Ég skil það þannig að Autoloader er function sem maður búr til í byrjun á skjali sem hlaðar inn önnur skjöl strax þegar þau eru delcaruð þannig að ef ég myndi segja t.d <p>$fileman = new Fileman(); myndi autoloader ná í Fileman.php úr pre-defined skjali strax.</p>

<p>-----------------------------------------------------------------</p>

<?php
	class User
	{
		protected $email;
		protected $password;

		public function setPassword($password)
		{
			$this->password = $password;
		}

		public function getPassword($password)
		{
			return $this->password;
		}

		public function setEmail($email)
		{
			$this->email = $email;
		}

		public function getEmail($email)
		{
			return $this->email;
		}
	}

  ?>