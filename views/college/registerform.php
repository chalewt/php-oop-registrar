<?php
require_once '../../layout/header.php';
require '../../core/College.php';

if (isset($_POST['submit'])) {
    if (empty($_POST['txtName'])) {
        $msg = 'Please enter college name';
    } else {

        $txtName = $_POST['txtName'];
        $txtPhone = $_POST['txtPhone'];

        $college = new College();
        $college->setName($txtName);
        $college->setPhone($txtPhone);
        $is_success = $college->register($college);
        if ($is_success == true) {
            $msg = "Record saved successfully.";
            print_r($college->get());
        } else {
            $msg =  "Sorry, Something went wrong. Try again.";
        }
    }
    echo $msg;
}
?>
<div class="container-fluid">
    <div class="row pt-2">

        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    College Registration
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="txtName">College</label>
                            <input class="form-control" type="text" id="txtName" name="txtName" placeholder="College">
                        </div>
                        <div class="form-group">
                            <label for="txtPhone">Phone</label>
                            <input type="text" class="form-control" id="txtPhone" name="txtPhone" placeholder="Phone">
                        </div>
                        <div class="form-group pt-2">
                            <input type="submit" value="Save" name="submit" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once '../../layout/footer.php';
?>