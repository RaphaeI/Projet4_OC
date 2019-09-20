<header class="container-fluid">
	<button>&#9776</button>
	<nav>
		<ul>
			<li><a href="http://projet4/">Accueil</a></li>
			<li><a href="/about">à propos</a></li>
			<div id="socialMedia">
				<li><i class="fab fa-facebook-f"></i></li>
				<li><i class="fab fa-twitter"></i></li>
				<li><i class="fab fa-instagram"></i></li>
			</div>
			<?php if (isset($_SESSION['auth']) && $_SESSION['auth'] === true){ ?>
				<li id="adminMenu">
					<a href="http://projet4/admin/">administration</a>
					<ul>
	        			<li><a href="/admin/logout">déconnexion</a></li>
      				</ul>		
				</li>
				<li id="deconnexion"><a href="/admin/logout">déconnexion</a></li>
				<?php
			}

			else{ ?>
				<li id="adminMenu"><a href="/admin/">connexion</a></li>
				<?php
				}
				?>
		</ul>
	</nav>
</header>