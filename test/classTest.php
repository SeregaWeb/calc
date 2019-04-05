<?
require '../config/config.php';
require '../model/class.php';
 
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testPlus()
    {
        $values = [[1,2],[5,2],[50,50],[250,1000],[19,21],['werwer',21]];
        $results = [3,7,100,1250,40,UNCORECT_NUMBER];
        foreach($values as $key => $value){
            $result = $this->calculator->Plus($value[0], $value[1]);
            $this->assertEquals($results[$key], $result);
        }
    }
    public function testMinus()
    {
        $values = [[1,2],[5,2],[50,50],[250,1000],[19,21],['werwer',21]];
        $results = [-1,3,0,-750,-2,UNCORECT_NUMBER];
        foreach($values as $key => $value){
            $result = $this->calculator->Minus($value[0], $value[1]);
            $this->assertEquals($results[$key], $result);
        }
    }
    public function testMultiplicated()
    {
        $values = [[1,2],[5,2],[50,50],[250,1000],[19,21],['werwer',21]];
        $results = [2,10,2500,250000,399,UNCORECT_NUMBER];
        foreach($values as $key => $value){
            $result = $this->calculator->Multiplicated($value[0], $value[1]);
            $this->assertEquals($results[$key], $result);
        }
    }
    public function testDevine()
    {
        $values = [[1,2],[5,2],[50,50],[250,1000],[20,2],['werwer',21],[21,0]];
        $results = [0.5,2.5,1,.25,10,UNCORECT_NUMBER,DIVIDE_BY_ZERO];
        foreach($values as $key => $value){
            $result = $this->calculator->Devine($value[0], $value[1]);
            $this->assertEquals($results[$key], $result);
        }
    }
    public function testPercent()
    {
        $values = [[100,2],[100,25],[100,100],[1000,10],[200,2],['werwer',21]];
        $results = [2,25,100,100,4,UNCORECT_NUMBER];
        foreach($values as $key => $value){
            $result = $this->calculator->Percent($value[0], $value[1]);
            $this->assertEquals($results[$key], $result);
        }
    }
 
}