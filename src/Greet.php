<?php 

namespace MyNamespace;

class Greet
{
   public static function sayHello($name){
      
      return "Hello, $name";
   }

   public function longGreeting($text){

      return "Welcome to my real greeting app, $text";
   }

}