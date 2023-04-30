<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>CRUD PHP APP</title>
</head>

<body>
    <main>
        <div class="container h-100 p-4">
            <h1 class="font-size-30 text-center w-100 mb-4">CRUD PHP APP</h1>
            <form action="create.php" method="post" class="">
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary w-100" value="Adicionar">
                    </div>
                </div>
            </form>
        </div>
        <div class="container table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <?php
                require_once 'connect.php';
                $sql_query = "SELECT * FROM user";
                if ($result = $conn->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) {
                        $Id = $row['id'];
                        $Name = $row['name'];
                        $Email = $row['email'];
                ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $Id; ?></th>
                                <th scope="row"><?php echo $Name; ?></th>
                                <th scope="row"><?php echo $Email; ?></th>
                                <th scope="row">
                                    <a class="btn btn-primary text-white" href="edit.php?id=<?php echo $Id; ?>">Editar</a>
                                    <a class="btn btn-danger text-white" href="delete.php?id=<?php echo $Id; ?>">Excluir</a>
                                </th>
                            </tr>
                    <?php
                    }
                }
                    ?>
                        </tbody>
            </table>
        </div>
    </main>

</body>

</html>