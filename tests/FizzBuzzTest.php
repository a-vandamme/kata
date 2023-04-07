<?php

use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
   public function test_print_1(): void
   {
      $this->assertEquals(FizzBuzz::print(1), '1');
   }
   public function test_print_2(): void 
   {
      $this->assertEquals(FizzBuzz::print(2), '2');   
   }
}

final class FizzBuzz {
   public static function print(int $number):string
   {
      return '1';
   }
   
}