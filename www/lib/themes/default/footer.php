<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
	
	if(isMobile()) {
		include "mobile/footer.php";
	} else {
?>
			</div>
		</div>

		<footer>
			<p>&copy; - Red social Frendz</p>
		</footer>
	  
		</div>
	</body>
</html>
<?php } ?>