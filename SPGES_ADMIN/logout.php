

				<?php

					session_start();

					unset($_SESSION['userID']);

					if(session_destroy())
					{
						$URL="index.php";
						echo "<script>window.location.href='$URL'</script>";
						exit;
					}
				?>
