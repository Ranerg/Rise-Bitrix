		</div>
		<!-- end of center layout -->

		
		<div id="right">
			<div class="caption"><p>Latest Posts</p></div>
			<div class="box">
				<ul>
					<li><a href="#">Genelia Photos</a></li>
					<li><a href="#">Genelia Ready</a></li>
					<li><a href="#">Trisha Private</a></li>
					<li><a href="#">Actress</a></li>
					<li><a href="#">Bollywood</a></li>
					<li><a href="#">Phasellus vel leo</a></li>
					<li><a href="#">Nam gravida nulla </a></li>
					<li><a href="#">Curabitur sollicit</a></li>
					<li><a href="#">Suspendisse </a></li>
					<li><a href="#">Maecenas libero</a></li>
					<li><a href="#">Curabitur sodales</a></li>
				</ul>
			</div>
		</div>
		
		<div id="footer">
			<div id="fl">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/inc/footer.php",
					),
				false
				);?>
			</div>
		</div>
	</div>
</body>
</html>