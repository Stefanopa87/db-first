<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> DB HOTEL </title>
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
                        <h1>elenco stanze:</h1>
                         <?php
                            require_once "data.php";

                            echo '<h6> hotel miramare </h6>';
                            

                            $conn = getConnection();

                            $sql = getRoomsSql();

                            $result = $conn -> query($sql);

                            // var_dump($result);
                            
                            while ($row = $result -> fetch_assoc()) 
                                if ($result && $result -> num_rows > 0){

                                        // ricordarsi di collegare campo a id=
                                    echo '<a href="/stanze.php?id=">'
                                        . $row['room_number'] . '</a><br>';

                                }

                            closeConn($conn, $stmt);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>