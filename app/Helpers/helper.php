<?php
 function arrayCard(){
    $cartCollection = Cart::getContent();
return  $cartCollection->toArray();

}