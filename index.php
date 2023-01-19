<!DOCTYPE html>
<html lang="en">
    <head>
        <script>document.write('<script src="http://'
        + (location.host || 'localhost').split(':')[0]
        + ':35729/livereload.js?snipver=1"></'
        + 'script>')</script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <style>
            pre, code { white-space: pre-line; }
            section { margin-bottom: 3em; }
        </style>
        <title>PHP Syntax Lesson</title>
    </head>

    <body class="container">
        <h1 class="text-center my-5">PHP Syntax Lesson</h1>

        <hr class="my-5">

        <section>
            <h2>Commenting</h2>

            <p>
                Commenting in PHP is very simple and similar to many languages.
            </p>

            <h3>Single Line Comment</h3>
            <p>
                <code>
                    // This is a single line comment
                </code>
            </p>

            <h3>Multi Line Comment</h3>
            <p>
                <code>
                    /*
                    &nbsp;&nbsp;This is a
                    &nbsp;&nbsp;multi-line comment.
                    */
                </code>
            </p>
        </section>

        <hr class="my-5">

        <section>
            <h2>Strings</h2>

            <?php (function () { ?>
            <?php include_once("./strings.php") ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Syntax</th>
                            <th>Result</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>Single Quote</th>
                            <td>
                                <code>
                                    $single = 'Single quot\'d string';
                                </code>
                            </td>
                            <td><?= $single ?></td>
                        </tr>

                        <tr>
                            <th>Double Quote</th>
                            <td>
                                <code>
                                    $double = "Double \"quoted\" string";
                                </code>
                            </td>
                            <td><?= $double ?></td>
                        </tr>

                        <tr>
                            <th>String Interpolation</th>
                            <td>
                                <code>
                                    $my_name = "Shaun McKinnon";
                                    $interpolated = "Hello, {$my_name}!";
                                </code>
                            </td>
                            <td><?= $interpolated ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php })() ?>
        </section>

        <hr class="my-5">

        <section>
            <h2>Variables</h2>

            <p>
                Variables are essential to computer programming. They help us to reduce redundancy, as well as promote scalability, by providing us with a container to store a value in.
            </p>
            
            <p>
                Variables in PHP are looser than other languages like Java. They permit variables to be any data type without first declaring the data type. They can also dynamically change type at any point within the application without error.
            </p>

            <p>
                !!!IMPORTANT: Just because you CAN change the data type, it is bad practice to do so. Take the knowledge you gained in your Java/C#/C++ courses and apply it abstractly to PHP. Once you declare a varaiable and assign it a data type, don't modify the data type later on.
            </p>

            </p>

            <?php (function () { ?>
            <?php include_once("./variables.php") ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date Type</th>
                        <th>Syntax</th>
                        <th>Result</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td>String</td>
                        <td>
                            <code>$name = "Shaun McKinnon";</code>
                        </td>
                        <td>
                            <?= $name ?>
                        </td>
                    </tr>
    
                    <tr>
                        <td>Integer</td>
                        <td>
                            <code>$my_age = 42;</code>
                        </td>
                        <td>
                            <?= $my_age ?>
                        </td>
                    </tr>
    
                    <tr>
                        <td>Float/Double</td>
                        <td>
                            <code>$_gpa = 4.5;</code>
                        </td>
                        <td>
                            <?= $_gpa ?>
                        </td>
                    </tr>
    
                    <tr>
                        <td>Boolean</td>
                        <td>
                            <code>$employed_234 = true;</code>
                        </td>
                        <td>
                            <?= $employed_234 ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php })() ?>
        </section>

        <hr class="my-5">

        <section>
            <h2>Arrays</h2>

            <p>
                Arrays are fundamental in PHP as they allow us to store lists of data. Any data type can be stored in an array, including mixed data types. You do not have to declare it first.
            </p>

            <?php (function () { ?>
            <?php include_once("./arrays.php") ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Syntax</th>
                        <th>Result</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Creating an array using the array_diff_ukey constructor</td>
                        <td>
                            <code>
                                $my_arr_constructor = array();
                            </code>
                        </td>
                        <td><?php var_dump($my_arr_constructor) ?></td>
                    </tr>

                    <tr>
                        <td>Creating an array using the array literal</td>
                        <td>
                            <code>
                                $my_arr_literal = [];
                            </code>
                        </td>
                        <td><?php var_dump($my_arr_literal) ?></td>
                    </tr>

                    <tr>
                        <td>Creating an array using the array literal</td>
                        <td>
                            <code>
                                $my_arr_init_vals = ['a', 'b', 'c'];
                            </code>
                        </td>
                        <td><?php var_dump($my_arr_init_vals) ?></td>
                    </tr>

                    <tr>
                        <td>Creating an array with mixed values</td>
                        <td>
                            <code><pre>
                                $mixed_arr = [
                                &nbsp;&nbsp;'Shaun',
                                &nbsp;&nbsp;true,
                                &nbsp;&nbsp;44,
                                &nbsp;&nbsp;80.62
                                ];
                            </pre></code>
                        </td>
                        <td><?php var_dump($my_arr_init_vals) ?></td>
                    </tr>

                    <tr>
                        <td>Adding/Removing/Modifying Values in an array</td>
                        <td>
                            <code><pre>
                            // Adding to an array
                            array_push($mixed_arr, "I like cats");
                            $mixed_arr[] = "I like dogs";
                            
                            array_unshift($mixed_arr, false);

                            // Removing from an array
                            array_pop($mixed_arr);

                            array_shift($mixed_arr);

                            array_splice($mixed_arr, 3, 1);

                            // Nested Array
                            $mixed_arr[] = [
                            &nbsp;&nbsp;"Hello",
                            &nbsp;&nbsp;"World"
                            ];

                            // Modifying a value in an array
                            $mixed_arr[0] = "Shaun McKinnon";
                            </pre></code>
                        </td>
                        <td>
                            <?php var_dump($mixed_arr) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php })() ?>
        </section>

        <hr class="my-5">

        <section>
            <h2>Associative Arrays</h2>

            <p>
                First let's start with the hard rule that ALL ARRAYS IN PHP ARE ASSOCIATIVE ARRAYS. This implies that the key for the array does not have to be a number. In fact, it can be anything you want it to be, providing it's a number or a string.
            </p>

            <?php (function () { ?>
            <?php include_once("./associative-arrays.php") ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Syntax</th>
                        <th>Result</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Storing data that requires an index <strong>WITHOUT</strong> associative arrays</td>
                        <td>
                            <code>
                            $student_info_keys = [
                            &nbsp;&nbsp;'name',
                            &nbsp;&nbsp;'age',
                            &nbsp;&nbsp;'dob'
                            ];

                            $students = [
                            &nbsp;&nbsp;['Shaun McKinnon', 44, '12-22-1978'],
                            &nbsp;&nbsp;['Gagandeep Kaur', 26, '01-02-1997'],
                            &nbsp;&nbsp;['Sam Whitaker', 23, '05-17-1999']
                            ];
                            </code>
                        </td>
                        <td>
                            <?php var_dump($student_info_keys) ?>
                            <?php var_dump($students) ?>
                        </td>
                    </tr>

                    <tr>
                        <td>A better way to store the data above is to use an associative array</td>
                        <td>
                            <code>
                            $students = [
                            &nbsp;&nbsp;[
                            &nbsp;&nbsp;&nbsp;&nbsp;"name" => 'Shaun McKinnon',
                            &nbsp;&nbsp;&nbsp;&nbsp;"age" => 41,
                            &nbsp;&nbsp;&nbsp;&nbsp;"dob" => '12-22-1978'
                            &nbsp;&nbsp;],
                            &nbsp;&nbsp;[
                            &nbsp;&nbsp;&nbsp;&nbsp;"name" => 'Gagandeep Kaur',
                            &nbsp;&nbsp;&nbsp;&nbsp;"age" => 23,
                            &nbsp;&nbsp;&nbsp;&nbsp;"dob" => '01-02-1997'
                            &nbsp;&nbsp;],
                            &nbsp;&nbsp;[
                            &nbsp;&nbsp;&nbsp;&nbsp;"name" => 'Sam Whitaker',
                            &nbsp;&nbsp;&nbsp;&nbsp;"age" => 20,
                            &nbsp;&nbsp;&nbsp;&nbsp;"date of birth" => '05-17-1999'
                            &nbsp;&nbsp;]
                            ];
                            </code>
                        </td>
                        <td>
                            <?php var_dump($aa_students) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php })() ?>

            <p>
                Understanding associative arrays in PHP is imperative to understanding PHP. SQL queries in PHP can return data as an associative array. Functions can receive associative arrays as arguments. Associative arrays are used to build self-describing data which than can be converted into XML and JSON quite simply.
            </p>

            <p>
                It is important to remember the rule that ALL arrays in PHP are associative. This also means that all array functions that are available for standard arrays can be used on associative arrays. In fact, we should stop calling them standard arrays. We should instead call them "<strong>implicitly keyed arrays</strong>". That would make associative arrays "<strong>explicitly keyed arrays</strong>".
            </p>
        </section>

        <hr class="my-5">

        <section>
            <h2>Super Global Associative Arrays</h2>

            <section>
                <h3>$_GET</h3>

                <p>
                    PHP has a few built-in associative arrays you should be aware of. These include (and are not limited to) <strong>$_GET</strong>, <strong>$_POST</strong>, <strong>$_REQUEST</strong>, <strong>$_COOKIE</strong>, and <strong>$_SESSION</strong>. Some of these (like the ones above) are empty and allow for you to store data in them. Some contain crucial information, like $_SERVER, that can be used to help ascertain where you are, as well as information about your application.
                </p>

                <p>
                    $_GET allows you to retrieve query parameters (defined in a query string) and their values. Query strings are denoted by the question mark operator:

                    <code>example.com?key1=value1</code>
                </p>

                <p>
                    If you look at the $_GET value you will see the following structure:

                    <code>
                    $_GET = [
                      'key1' => 'value1',
                      'key2' => 'value2'
                    ];
                    </code>
                </p>

                <?php (function () { ?>
                <?php include_once("./get.php") ?>
                <div id="get" class="row border">
                    <div class="col">
                        <a href="<?= $get_link ?>#get">Click the link!</a><br>
                        <a href="./#get">Return</a>
                    </div>
                    <div class="col">
                        <?php
                            var_dump($_GET);
                        ?>
                    </div>
                </div>
                <?php })() ?>
            </section>

            <section>
                <h3>$_POST</h3>

                <p>
                    $_POST allows you to retrieve body parameters (defined in a request body string) and their values. Request body strings are passed generally from forms, but can be sent using other means like CuRL or through an endpoint tester like PostMan or HoppscotchIO.
                </p>

                <p>
                    $_GET allows you to retrieve query parameters (defined in a query string) and their values. Query strings are denoted by the question mark operator:

                    <code>example.com?key1=value1</code>
                </p>

                <p>
                    If you look at the $_GET value you will see the following structure:

                    <code>
                    $_GET = [
                      'key1' => 'value1',
                      'key2' => 'value2'
                    ];
                    </code>
                </p>

                <?php (function () { ?>
                <?php include_once("./post.php") ?>
                <div id="post" class="row border">
                    <div class="col">
                        <form method="post" action="./index.php#post">
                            <div>
                                <label for="name">Full Name:</label><br>
                                <input name="name">
                            </div>

                            <div>
                                <label for="age">Age:</label><br>
                                <input name="age">
                            </div>

                            <div>
                                <label for="married">Married:</label><br>
                                <input type="radio" name="married" value="true"> yes
                                <input type="radio" name="married" value="false"> no
                            </div>

                            <button type="submit">Submit</button>
                            <a href="./index.php#post">Reset</a>
                        </form>
                    </div>

                    <div class="col">
                        <?php
                            var_dump($_POST);
                        ?>
                    </div>
                </div>
                <?php })() ?>
            </section>
        </section>

        <footer class="my-5"></footer>
    </body>
</html>