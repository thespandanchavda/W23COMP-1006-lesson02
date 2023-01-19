<?php
$student_info_keys = [
    'name',
    'age',
    'dob'
  ];
  
  $students = [
    ['Shaun McKinnon', 44, '12-22-1978'],
    ['Gagandeep Kaur', 26, '01-02-1997'],
    ['Sam Whitaker', 23, '05-17-1999']
  ];

  $aa_students = [
    [
      "name" => 'Shaun McKinnon',
      "age" => 41,
      "dob" => '12-22-1978'
    ],
    [
      "name" => 'Gagandeep Kaur',
      "age" => 23,
      "dob" => '01-02-1997'
    ],
    [
      "name" => 'Sam Whitaker',
      "age" => 20,
      "date of birth" => '05-17-1999'
    ]
  ];

  foreach($aa_students as $student){
    echo $student["age"];
  }
   