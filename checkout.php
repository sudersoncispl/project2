<?php
function bar(): iterable{

    return [1,2,3];
}

function showbar(iterable $iterable){
    foreach($iterable as $value){
        echo $value.'-';
    }
}

$items = bar();
showbar($items);