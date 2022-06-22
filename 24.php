<?php
class emp
{
	public $a,$b,$c;
	function sum()
	{
	$this->c=$this->a+$this->b;
	return $this->c;
	}
	function mul()
	{
	$this->c=$this->a*$this->b;
	return $this->c;
	}
}
$employee_info=new emp();
$employee_info->a="Gagandeep Singh";
$employee_info->b="Vansh";
$sal=new emp();
$sal->a=50000;
$sal->b=50000;
echo "employee1_info <br>",$employee_info->a;
echo"<br>";
echo $sal->a;
echo"<br>";
echo "employee2_info <br>" ,$employee_info->b;
echo"<br>";
echo $sal->b;
?>