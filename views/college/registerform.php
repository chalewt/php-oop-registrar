<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>College Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../content/bootstrap-5/css/bootstrap.min.css">
</head>

<body>

    <div class="row p-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    College Registration Form
                </div>
                <div class="card-body">
                    <form action="register.php" method="POST">
                        <div class="form-group"> 
                            <label for="txtName">College</label> 
                            <input class="form-control" type="text" id="txtName" name="txtName" placeholder="College"> 
                        </div>
                        <div class="form-group"> 
                            <label for="txtPhone">Phone</label> 
                            <input type="text" class="form-control" id="txtPhone" name="txtPhone" placeholder="Phone"> 
                        </div>
                        <div class="form-group t-1"> 
                            <input type="submit" value="Save" name="submit" class="btn btn-primary" /> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>