<?php

if (filter_input(INPUT_POST, "submit", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
    # code...
    $errorMessage = "";
    $goodMessage ="";
    $currentPassword = filter_input(INPUT_POST, "currentPassword");
    $newPassword = filter_input(INPUT_POST, "newPassword");
    $confirmPassword = filter_input(INPUT_POST, "confirmPassword");
    if ($confirmPassword != $newPassword) {
        # code...
        $errorMessage = "jelszavak nem egyeznek!";
    } elseif ($db->valid_password($currentPassword)) {
        # csere indulhat
        if ($db->changePassword($newPassword)) {
            # code...
            $goodMessage="Sikeres jelszó változtatás!";
        } else {
            $errorMessage = "Sikertelen jelszóváltoztatás! Próbálja újra.";
        }
        exit();
    }
} else {

?>

    <section class="settings">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-container">
                        <h2>Password Change</h2>
                        <h1><?php echo $errorMessage; ?></h1>
                        <form id="passwordForm" method="post">
                            <div class="form-group">
                                <label for="currentPassword">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3" name="submit" value="true">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
