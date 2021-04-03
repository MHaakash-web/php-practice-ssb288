<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Shorif Jonota', sans-serif;
        }
    </style>

    <title>Home</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="container mt-5">
        <h1 class="mb-5">Hello, this is the homepage!</h1>
        <div class="row">
            <div class="col-6">
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input class="form-control" name="email">

                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="check" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" name="login-submit" class="btn-block btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="offset-1 col">

                <?php

                if (isset($_POST['login-submit'])) {

                    $email = $_POST["email"];

                    // Check if the form is submitted
                    if (isset($_POST['login-submit'])) {
                        // retrieve the form data by using the element's name attributes value as key
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        // display the results

                        echo '<h2>Your email is: ' . $email . '</h2><br />';
                        echo '<h2>Your password is: ' . $password . '</h2>';
                    }
                }

                ?>

            </div>

        </div>
    </div>



    <section class="list mt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">

                    <form action="index.php" method="POST">
                        <h2> নাম এর উপর মাউস চাইপ্পা ধরেন </h2>

                        <div class="h4 form-check">
                            <input class="form-check-input" type="checkbox" value="রহিম" id="রহিম" name="names-options[]">
                            <label class="form-check-label" for="রহিম">
                                রহিম
                            </label>
                        </div>

                        <div class="h4 form-check">
                            <input class="form-check-input" type="checkbox" value="করিম" id="করিম" name="names-options[]">
                            <label class="form-check-label" for="করিম">
                                করিম
                            </label>
                        </div>

                        <div class="h4 form-check">
                            <input class="form-check-input" type="checkbox" value="রুপবান" id="রুপবান" name="names-options[]">
                            <label class="form-check-label" for="রুপবান">
                                রুপবান
                            </label>
                        </div>

                        <div class="h4 form-check">
                            <input class="form-check-input" type="checkbox" value="সখিনা" id="সখিনা" name="names-options[]">
                            <label class="form-check-label" for="সখিনা">
                                সখিনা
                            </label>
                        </div>

                        <button type="submit" name="names-submit" class="fs-3 mt-4 w-50 btn btn-danger">
                            চাপুন
                        </button>

                    </form>
                </div>


                <div class="col-6 d-flex fs-1 justify-content-center align-items-center">

                    <?php

                    if (isset($_POST['names-submit']) && isset($_POST['names-options'])) {

                        $counter = count($_POST['names-options']);
                        $names = $_POST['names-options'];

                        for ($i = 0; $i < $counter; $i++) {
                            echo $names[$i] . "<br>";
                        }
                    } else {
                        echo ('<h2> কমপক্ষে একটা টিক দেন ভাই! </h2>');
                    }

                    ?>

                </div>

            </div>
        </div>

    </section>





</body>

</html>