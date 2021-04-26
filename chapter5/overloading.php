 

<!-- function add()
{
	$sum = 0;
	$arg = func_get_args();
	foreach($args as $arg)
	{
		$sum += $arg;
	}
	return $sum;

}
echo  add(1,2);
echo add(10.5,2.5);
echo add(10.2,5.2,9.6,55.2)
  -->
  <? php
class MyMagicClass
{
	private  $arr = array();
	public function __set($attribute,$value)
	{
		$this -> arr[$attribute] = $value;
	}
	public function __get($attribute)
	{
		if(array_key_exits($attribute,$this ->arr))
		{
			return $this -> arr[$attribute];
		}
		else
		{
			echo 'Error: undefined attribute';
		}
	}
}
$object = new MyMagicClass();
$object-> dynamicAttribute = 'I am magic ';
echo  $object ->dynamicAttribute .PHP_EOL;

  ?>