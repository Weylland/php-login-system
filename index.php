<?php
    require "header.php";
?>

    <main>
        <div class="container-fluid">
        <?php
            if(isset($_SESSION['userId'])){
                 echo '            
                    <div class="row justify-content-center m-3 ">
                        <div class="col-2 ">
                            <p>You are logged in!</p>
                        </div>
                    </div>
                ';
            } else {
                echo '            
                    <div class="row justify-content-center m-3 ">
                        <div class="col-2 ">
                            <p>You are logged out!</p>
                        </div>
                    </div>
                ';
            }
        ?>
        </div>
    </main>

<?php
    require "footer.php";
?>