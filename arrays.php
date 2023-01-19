<?php

    $my_arr_constructor = array('Spandan','Chavda','Jeel','Patel');
    $my_arr_literal = ['Spandan','Chavda','Jeel','Patel'];
    $my_arr_init_vals = ['a', 'b', true,1,5.3];
    $mixed_arr=[
        "Spandan Chavda",
        true,
        44,30.62
    ];
    array_push($mixed_arr,"I love Dogs");
    $mixed_arr[]="I like Cats";

    array_unshift($mixed_arr,false);
    array_pop($mixed_arr);
    array_shift($mixed_arr);
    array_splice($mixed_arr,3,1);
    $mixed_arr[]=[
        "hello",
        "world"
    ];
    $mixed_arr[3]='I like America';
    