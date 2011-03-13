<?php
@@AnA
@@AnB(a="/")
class someClass
{
	const aconstant = 1;

	private $something;
	@@SomePropertyAnnotation
	@@SomePropertyAnnotation(a1="b1")
	@@SomeProperty2Annotation("a2")
	@@SomeProperty3Annotation(a3="\"/!@#$%^&*()b",c3="d3")
	private $something2;

	@@SomeMethod(a1="b1")
	@@SomeMethod("a2")
	@@SomeMethod(a3="\"/!@#$%^&*()b",c3="d3")
	public function a(@@AnAnnotation(somearg="yeah") $a, $b, @@An1 @@An2 $c)
	{
	}

	public function b($a)
	{
	}
}

class someClass2
{
	const aconstant = 1;
	public function a()
	{
	}
}


$a = new ReflectionClass('someClass');
var_dump($a->getAnnotations());
foreach ($a->getProperties() as $property) {
	echo "Property: " . $property->getName() . "\n";
	var_dump($property->getAnnotations());
}

foreach ($a->getMethods() as $method) {
	echo "Method: " . $method->getName() . "\n";
	var_dump($method->getAnnotations());
	foreach ($method->getParameters() as $argument) {
		echo "Argument: " . $argument->getName() . "\n";
		var_dump($argument->getAnnotations());
	}
}
$a = new ReflectionClass('someClass2');
var_dump($a->getAnnotations());
