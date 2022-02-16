<?php
include "./Utils/Header.php";
?>


<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div id="first">
                <div class="myform form">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Login</h1>
                        </div>
                    </div>
                    <form action="process/login.php" method="POST" name="login">
                        <div class="form-group">
                            <input type="name" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Entrez votre nom">
                        </div>
                        <div class="col-md-12 text-center ">
                            <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>