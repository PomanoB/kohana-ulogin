<?php if ($cfg['type'] == 'window') :?>
	
	<a href="#" id="uLogin">
		<img src="http://ulogin.ru/img/button.png" width=187 height=30 alt="ÌóëüòèÂõîä"/>
	</a>
	<script src="http://ulogin.ru/js/widget.js?<?php echo $params; ?>"></script>
	
<?php else: ?>
	
	<div id="uLogin"></div>
	<script src="http://ulogin.ru/js/widget.js?<?php echo $params; ?>"></script>

<?php endif; ?>