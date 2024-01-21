<?php

	if($user_id) {
		header("location:".BASE_URL);
	}

?>

<div id="container-user-akses">
    <form action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">

        <?php
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;

			if ($notif == 'true') {
				echo '<div class="notif">Maaf, email atau password yang kamu masukkan tidak cocok</div>';
			}
			
		?>

        <div class="element-form">
            <label>Email</label>
            <span>
                <input type="text" name="email" />
            </span>
        </div>

        <div class="element-form">
            <div class="label-password">
                <label>Password</label>
                <i class="btn-hide-show fa-solid fa-eye-slash" title="Show Password"></i>
            </div>
            <span>
                <input type="password" name="password" class="input-password" />
            </span>
        </div>

        <div class="element-form">
            <span>
                <input type="submit" value="Login" />
            </span>
        </div>
    </form>
</div>