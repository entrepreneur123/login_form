
<?php
//open abstractvehical.php and add following private attribute,which holds dynamic time attributes

//private  $runtimeAttributes = Array()
//now we should add  hte magic setter ,__set(),in  hte abstractvahical class
function __set($attribute,$value)
{
	$this-> runtimeAttributes[$attribute] = $value;
}
//lets add  the magic_getter,__get(),as well
function __get($attribute)
{
	if(array_key_exits($attribute,$this->runtimeAttributes))
	{
		return $this->runtimeAttributes[$attribute];
	}
	else
	{
		echo "Error:undefined attribute ." .PHP_EOL;
	}
}
$car = new Car('Honda','civic','Red',4,'354tjh');
$car->ownerName = 'john doe';
echo "owner :" .$car->ownerName .PHP_EOL;
$car->year = 2015;
echo "year :" .$car->year .PHP_EOL;
$car->wipers;

function __call($method,$arguments)
{
	echo "the method $method() called ." .PHP_EOL;
}
$car->honk();
function __call($method,$arguments)
{
	switch($method)
	
{
case 'honk':
if(isset($arguments[0]))
{
	echo "honking $arguments[0]..." .PHP_EOL;
}
else
{
	echo "honking....".PHP_EOL;
}
if(isset($arguments[1]))
{
	echo "$argument[1] enabled..." .PHP_EOL;
}
break;
default:
echo"the method $method() called." .PHP_EOL;
break;
}
}
$car->honk('gently')
$car->honk('louder','siren')