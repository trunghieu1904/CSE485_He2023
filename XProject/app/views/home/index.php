    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LIST OF EMPLOYEES</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container">
            <h3 class="text-center text uppercase text-success my-3">LIST OF EMPLOYEES</h3>
            <div class="text-right" style="position: absolute; top: 0; right: 0;">
            <a href="<?= DOMAIN.'/app/views/patient/add.php'; ?>" class="btn btn-success"> + Add New Employee</a>
            </div>
            <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Salary</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($patients as $patient){
        ?>
                <tr>
                    <th scope="row"><?= $patient->getId(); ?></th>
                    <td><?= $patient->getFullname(); ?></td>
                    <td><?= $patient->getAddress(); ?></td>
                    <td><?= $patient->getSalary(); ?></td>
                    <td>
                        <a href="<?= DOMAIN.'app/views/patient/edit.php?id='.$patient->getId(); ?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="<?= DOMAIN.'app/views/patient/remove.php?id='.$patient->getId(); ?>"><i class="bi bi-trash3"></i></a>
                        <a href="<?= DOMAIN.'app/views/patient/detail.php?id='.$patient->getId(); ?>"><i class ="bi bi-eye"></i></a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
    </html>