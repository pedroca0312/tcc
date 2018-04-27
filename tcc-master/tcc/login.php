<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>

        <style type="text/css">

            body{
                background-color: #383f52;
            }


       #usuario{
            padding-top: 20%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
       #senha{

           margin-left: auto;
           margin-right: auto;
           text-align: center;
       }
       #entrar{

           margin-left: auto;
           margin-right: auto;
           text-align: center;
       }
    </style>

</head>
<body>
<div id="usuario">

    <form action="login.php">

    <input type="text" name="usuario" placeholder="Usuario"> <br><br>


    </form>
    <div id="senha">

        <form action="login.php">

            <input type="password" name="senha" placeholder="Senha"> <br><br>

        </form>
        <div id="entrar">


            <form action="login.php">

                <button name="entrar" type="button" class="btn btn-primary btn-lg">Entrar</button>

            </form>
</div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
