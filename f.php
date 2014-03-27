class Fish
{
public $common_name;
public $flavor;
public $record_weight;

function __construct($name, $flavor, $record){
$this->common_name = $name;
$this->flavor = $flavor;
$this->record_weight = $record;
}

public function getInfo() {
$output  = "The {$this->common_name} is an awesome fish. ";
$output .= "It is very {$this->flavor} when eaten. ";
$output .= "Currently the world record {$this->common_name} weighed {$this->record_weight}.";
return $output;
}
}
class Trout extends Fish
{
public $species = 'species';

function __construct($name, $flavor, $record, $species){
parent::__construct($name, $flavor, $record);
$this->species = $species;
}
public function getInfo() {
$output  = "The {$this->name} is an awesome fish. ";
$output .= "It tastes {$this->flavor} when eaten. ";
$output .= "The world record {$this->common_name} {$this->species} weighed {$this->record_weight}.";
return $output;
}
}

$brook_trout = new Trout('Trout', 'Delicious', '14 pounds 8 ounces', 'Brook');
$brook_trout::getInfo();