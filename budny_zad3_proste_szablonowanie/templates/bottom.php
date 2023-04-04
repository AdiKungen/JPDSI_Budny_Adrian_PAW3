</div>

<div class="container p-3">
    Zalogowano jako <b>
        <?php if(!empty($rola)): 
            out($rola); ?>
            <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="link-danger">Wyloguj</a>
        <?php else: ?>
            nikt
        <?php endif; ?>
        </b>       
	<p>
		Widok oparty na frameworku <a href="https://getbootstrap.com/" class="link-warning" target="_blank">Bootstrap</a>.
	</p>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>