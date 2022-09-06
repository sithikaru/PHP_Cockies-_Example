<!DOCTYPE html>

<html>

<head>
    <title>PHP 15</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <br /><br /><br />
        <form class="col-lg-3">
            <div class="form-group">
                <?php
                    $email = "";
                    $pass = "";
                    if(isset($_COOKIE["email"])){
                        $email = $_COOKIE["email"];
                    }
                    if(isset($_COOKIE["password"])){
                        $pass = $_COOKIE["password"];
                    }

                ?>
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" value="<?php echo $email; ?>" class="form-control" id="e" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" value="<?php echo $pass; ?>" class="form-control" id="p" placeholder="Password">
            </div>
            <br />
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="c">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <br />
            <button type="submit" onclick="signin();" class="btn btn-success">Sign In</button>
        </form>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>