<?php

class HttpNotFoundException extends Exception {};

try {
  //dfo something
} catch(FooException $e){
  //...
} catch(BarException $e){
  //...
} catch(Exception $e){
  //...
}
