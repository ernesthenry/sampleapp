class Person{
    private $name; // can be acccessed  outside the class
    private $email; // can be acccessed  outside the class
    private static $ageLimit = 40;

    // constructor
    function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__. "created successfully". "<br>";
    }

    // deconstructor
    function __deconstruct(){
        echo __CLASS__. "destroyed<br>";
    }

    function setName($name){
        $this->name = $name;
    }


    function getName(){
        return $this->name. "<br>";;
    }

    public static function getAgeLimit(){
        return self::ageLimit;

    }
}

class Customer extends Person(){
    private $balance;

    function __construct($name, $email, $balance){
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;
        echo "A new ". __CLASS__. "has been created sucessfully";
    }

    function setBalance($balance){
        $this->balance = $balance;
    }

    function getBalance(){
        return $this->balance. "<br>";
    }
}

<!-- customer1 = new Custoomer("Ernest Kato", "test@gmail.com", 3000);
echo customer1->getBalance(); -->


//static props and methods
<!-- Person::$ageLimit; -->
Person::$setAgeLimit();

<!-- person1 = new Person("ernest kato", "test@gmail.com"); -->
<!-- person1->setName("Ernest Kato"); -->
<!-- echo person1->getName(); -->

<!-- person1 -> $name = "Ernest Henry";
echo person1->name; -->