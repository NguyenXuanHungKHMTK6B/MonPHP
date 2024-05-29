<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            .eror {color: #FF0000;}
        </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <?php
            $nameErr = $emailErr = $genderErr = $commentErr = $webErr = "";
            $name = $email = $gender = $comment = $web = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(empty($_POST["name"])){
                    $nameErr = " Name is required";
                }else{
                    $name = test_input($_POST["name"]);
                }
                if(empty($_POST["email"])){
                    $emailErr = "Email is required";
                }else{
                    $email = test_input(($_POST["email"]));
                }
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Name: </label>
            <span class="error">* <?php echo $nameErr;?> </span>
            <input
                type="text"
                class="form-control"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder="Nhập tên"
            />
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <span class="error">* <?php echo $emailErr;?> </span>
            <input
                type="email"
                class="form-control"
                name="email"
                id=""
                aria-describedby="emailHelpId"
                placeholder="Nhập email"
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Webserver</label>
            <select
                class="form-select form-select-lg"
                name="web"
                id=""
            >
                <option selected value="None">Select one</option>
                <option value="Ha long">Ha long</option>
                <option value="Quang Ninh">Quang Ninh</option>
                <option value="Ho Chi Minh">Ho Chi Minh</option>
            </select>
            <span class="error">* <?php echo $webErr;?> </span>
        </div>
        <br>
        Gender:
        <div class="form-check">
            <label class="form-check-label"> Male
                <input
                    class="form-check-input"
                    name="gender"
                    id=""
                    type="radio"
                    value="Male"
                    aria-label="Text for screen reader"
                />
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label"> FeMale
                <input
                    class="form-check-input"
                    name="gender"
                    id=""
                    type="radio"
                    value="FeMale"
                    aria-label="Text for screen reader"
                />
            </label>
            <span class="error">* <?php echo $genderErr;?> </span>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Comment</label>
            <textarea class="form-control" name="" id="" rows="3"></textarea>
            <span class="error">* <?php echo $commentErr;?> </span>
        </div>
        
        <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
        </button>
        <?php
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        } 
        ?>
        <?php
        echo "<h2>Your Input: </h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $web;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        ?>
    </form>
    </body>
</html>
