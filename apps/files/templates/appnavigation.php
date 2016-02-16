<div id="app-navigation">
	<ul>
		<?php foreach ($_['navigationItems'] as $item) { ?>
		<li data-id="<?php p($item['id']) ?>" class="nav-<?php p($item['id']) ?>"><a href="<?php p(isset($item['href']) ? $item['href'] : '#') ?>"><?php p($item['name']);?></a></li>
		<?php } ?>
	</ul>
	<div id="app-settings">
		<div id="app-settings-header">
			<button class="settings-button" data-apps-slide-toggle="#app-settings-content">
				<span class="hidden-visually"><?php p($l->t('Settings'));?></span>
			</button>
		</div>
		<div id="app-settings-content">
				<h2>
					<label for="webdavurl"><?php p($l->t('WebDAV'));?></label>
				</h2>
				<input id="webdavurl" type="text" readonly="readonly" value="<?php p(OC_Helper::linkToRemote('webdav')); ?>" />
				<em>Use this address to access your Files via WebDAV</em>
		</div>
	</div>
</div>
