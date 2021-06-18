<!DOCTYPE html>

<?php
?>
<html>

    <head>
        <title>Stymoon Store</title>
        <link rel="shortcut icon" href="images/triangleicon.jpg"> 
        <meta charset="utf-8"/>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <base<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel=stylesheet type="text/css" href="resources/css/MusicWebStyles.css">

    <?php $nameuser = $data['message'] ?>
</head>
<body>
    <?php if ($view == 'signIn') { ?>


        <?php
    } else {
        ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" >
                    <li class="nav-item active">
                        <a class="nav-link" href="#" id="homenav">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown" id="dropdownnav">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" id="divnav" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                    <li class="nav-item" style="position: absolute; margin-left: 950px; margin-top:10px;">
                        <?php
                        if (isset($_SESSION["USER_NAME"]) && !empty($_SESSION["USER_NAME"])) { /* si se ha iniciado sesion, muestra el mensaje */
                            echo $nameuser;
                        }
                        ?>
                    </li>
                    <?php
                    if (isset($_SESSION["USER_NAME"]) && !empty($_SESSION["USER_NAME"])) { /* si se ha iniciado sesion, muestra el mensaje */
                        ?>

                        <li class="nav-item" style="position: absolute; margin-left: 1280px;">
                            <form method="post" action="<?php echo $this->url("start", "Logout")/* start hace referencia al controlador */ ?>"> 
                                <button type="submit" class="btn btn-primary mr" id="logoutButton" >LOGOUT</button>
                            </form>
                        </li>



                        <?php
                    } else {
                        ?>
                        <li class="nav-item" style="position: absolute; margin-left: 1280px;">
                            <button type="button" class="btn btn-primary mr" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">LOGIN</button>
                        </li>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="max-height: 350px;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close" style="max-height: 25px; max-weight: 25px;">
                                            <span aria-hidden="true">X</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo $this->url("start", "Login") /* start llama al controlador y Login al metodo */ ?>">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">User:</label>
                                                <input type="text" name="user" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-password" class="col-form-label">Password:</label>
                                                <input type="text" name="password" class="form-control" id="recipient-password">
                                            </div>

                                    </div>
                                    <a href="<?php echo $this->url("start", "Signin") ?>" align="center">Haven't Account yet?<br> Register Here</a>               
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Log In</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>      



                </ul>
            </div>

        </nav>

        <?php
    }
    ?>


