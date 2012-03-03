<script src="http://ulogin.ru/js/ulogin.js"></script>

<?php if ($cfg['type'] == 'window') :?>

	<a id="<?php echo $uniq_id; ?>" href="#" x-ulogin-params="<?php echo $params; ?>">
		<img src="http://ulogin.ru/img/button.png" width=187 height=30 alt="ÌóëüòèÂõîä"/>
	</a>

<?php else: ?>

	<script src="http://ulogin.ru/js/ulogin.js"></script>
	<div id="<?php echo $uniq_id; ?>" x-ulogin-params="<?php echo $params; ?>"></div>
	
<?php endif; ?>