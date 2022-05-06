<?php

function runTest()
{
	$student1 = new Student('Ivan', 'Ivanov', 'ФМиИТ', 4, 2);
	$student2 = new Student('Vladimir', 'Demidov', 'ФМиИТ', 3, 1);
	$student3 = new Student('Dima', 'Zavodov', 'ФМиИТ', 3, 1);
	$student4 = new Student('Nikita', 'Bochkov', 'ФМиИТ', 2, 1);
	$student5 = new Student('Nikita', 'Zaharov', 'ФМиИТ', 1, 2);

	$studentsList = new StudentsList();
	$studentsList->add($student1);
	$studentsList->add($student2);
	$studentsList->add($student3);
	$studentsList->add($student4);
	$studentsList->add($student5);
	$studentsList->store('students.txt');

	echo $studentsList->get(0)->__toString(). "<br>";
	echo $studentsList->get(1)->__toString(). "<br>";
	echo $studentsList->get(2)->__toString(). "<br>";
	echo $studentsList->get(3)->__toString(). "<br>";
}