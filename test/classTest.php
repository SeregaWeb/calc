<?
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
 
    public function testgetResult()
    {
        $result = $this->calculator->Plus(1, 2);
        $this->assertEquals(3, $result);

        $result = $this->calculator->Plus(5, 2);
        $this->assertEquals(7, $result);
            // $result = $this->calculator->getResult(3, 6, '/');
            // $this->assertEquals(2, $result);

            // $result = $this->calculator->getResult(12, 22 ,'+');
            // $this->assertEquals(34, $result);
    }
 
}