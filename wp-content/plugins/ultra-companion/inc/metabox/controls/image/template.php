<div class="ultra-mb-desc">
	
		<span class="butterbean-label">{{ data.label }}</span>
	

	
		<span class="butterbean-description">{{{ data.description }}}</span>
	
</div>

<div class="ultra-mb-field">
	<input type="hidden" class="butterbean-attachment-id" name="{{ data.field_name }}" value="{{ data.value }}">

	
		<img class="butterbean-img" src="https://ricocalo.com/wp-content/plugins/ultra-companion/inc/metabox/controls/image/{{ data.src }}" alt="{{ data.alt }}">
	
		<div class="butterbean-placeholder">{{ data.l10n.placeholder }}</div>
	

	<p>
		
			<button type="button" class="button button-secondary butterbean-change-media">{{ data.l10n.change }}</button>
			<button type="button" class="button button-secondary butterbean-remove-media">{{ data.l10n.remove }}</button>
		
			<button type="button" class="button button-secondary butterbean-add-media">{{ data.l10n.upload }}</button>
		
	</p>
</div>