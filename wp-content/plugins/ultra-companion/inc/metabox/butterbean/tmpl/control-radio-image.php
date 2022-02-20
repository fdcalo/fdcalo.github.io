<span class="butterbean-label">{{ data.label }}</span>



	<span class="butterbean-description">{{{ data.description }}}</span>




	<label>
		<input type="radio" value="{{ choice }}" name="{{ data.field_name }}" if data.value="==" choice> checked="checked"  />
		<span class="screen-reader-text">{{ args.label }}</span>
		<img src="https://ricocalo.com/wp-content/plugins/ultra-companion/inc/metabox/butterbean/tmpl/{{ args.url }}" alt="{{ args.label }}">
	</label>