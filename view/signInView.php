
<body>


    <div class="container mt2 mb-2" id="containerSignIn" align="center">
        <div class="row justify-content-center mt-3 col-5" id="containerdiv" >
        <div class="row justify-content-center mt-3" id="primerdiv">
            <div class="" id="signInTitle">
                <h3 class="text-white bg-success text-center">SIGN IN</h3>
                <?php
                $message = $data['message'];
                if ($message != null) {
                    echo $message;
                }
                ?>

            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="">
                <form method="post" action="<?php echo $this->url("start", "RegisterSignin"); ?>">
                    <div class="form-group">
                        <label for="usuario">Email address</label>
                        <input type="text" name="user" class="form-control" id="usuario" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group" id="signInButton">
                    <button type="submit" class="btn btn-primary mt-4 mb-3">SignIn</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>


</body>



