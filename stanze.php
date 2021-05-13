<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>DB HOTEL stanze </title>
    <!-- font awesame -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- axios vue -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- js -->
    <script src="script.js"></script>
</head>

<body>
    <div id="app" class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-3">
                <div class="mt-2">
                    <div class="text-center">
                        <h1>caratteristica stanze</h1>
                        <?php
                            $conn = getConnection();

                            $sql = getRoomsDetailsSql();

                           
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>