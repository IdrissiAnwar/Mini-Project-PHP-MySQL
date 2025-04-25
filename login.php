<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini Projet PHP MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/ests_logo-800x450-1.png">
</head>
<body class= "body-home">
    <div class="black-fill"><br /> <br />
        <div class="d-flex justify-content-center align-items-center flex-column">  
        <form class="login">
            <div class="text-center">
                <a href="index.php">
                <img src="images/ests_logo-800x450-1.png" width="175">
                </a>
            </div>
            <h3>Login</h3>
            <div class="mb-3 ">
                <label class="form-label ">Username</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3 ">
                <label class="form-label ">Password</label>
                <input type="password" class="form-control">
            </div>
            <div class="mb-3 ">
                <label class="form-label ">Login As</label>
                <select name="" id="">
                    <option value="1">Administrateur</option>
                    <option value="2">Enseignant</option>
                    <option value="3">Étudiant</option>   
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
        <br /> <br />
            <div>
                <h5 class="text-center text-light">
                    Copyright &copy 2025 EST Sale. All rights reserved.
                </h5>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>