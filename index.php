<?php 
require 'header.php';
	include('function.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		require_once __DIR__ . '/login.php';
	}


?>

	<div class="content">
		
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
<?php
require 'menu.php';
if (isset($_GET['main'])) {
    require_once __DIR__ . '/content.php';
}
require 'content.php';
require 'footer.php';
