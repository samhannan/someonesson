<?php $slug = getSlug(); ?>
<ul>
	<li<?php if($slug == 'cyclists') echo ' class="active"'; ?>><a href="/cyclists">Cyclists</a></li>
	<li<?php if($slug == 'accident-map') echo ' class="active"'; ?>><a href="/accident-map">Accident Map</a></li>
	<li<?php if($slug == 'hgv-blind-spot') echo ' class="active"'; ?>><a href="/hgv-blind-spot">HGV Blind Spot</a></li>
	<li<?php if($slug == 'commuter-guide') echo ' class="active"'; ?>><a href="/commuter-guide">Commuter Guide</a></li>
	<li<?php if($slug == 'safety-equipment') echo ' class="active"'; ?>><a href="/safety-equipment">Safety Equipment</a></li>
</ul>