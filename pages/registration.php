<h1>Registration</h1>

<?php
if (isset($_SESSION['registration_errors'])) {
?>
    <div class="alert alert-danger">
        <ul>
            <?php
                foreach($_SESSION['registration_errors'] as $errorMsg) {
                    echo '<li>' . $errorMsg . '</li>';
                }
            ?>
        </ul>
    </div>
<?php
    unset($_SESSION['registration_errors']);
}
?>

<form action="registration_action.php" method="POST">
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="first_name">First name:</label>
        <input type="text" name="first_name" id="first_name">
    </div>
    <div>
        <label for="last_name">Last name:</label>
        <input type="text" name="last_name" id="last_name">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password2">Retype password:</label>
        <input type="password" name="password2" id="password2">
    </div>
    <div>
        <input type="submit" value="Register">
    </div>
</form>