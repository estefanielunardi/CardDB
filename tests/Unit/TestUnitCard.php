<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Card;


class StudentTest extends TestCase
{

    public function test_can_create_only_named_Student()
    {
        $student = new Student("Joana");
        $this->assertEquals("Joana", $student->getName());
    }