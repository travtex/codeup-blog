<div class="grid_12 alpha fll">
							
	{{ Form::text('title', $value = null, $attributes = array (
				'placeholder' => 'Title *',
				'class' => 'requiredField form-input'
	))}}
</div>
{{ $errors->first('body', '<h3 class=\'col-title\'>Must have body content.</h3>')}}
    {{ Form::textarea('body', $value = null, $attributes = array (
				'placeholder' => 'Body *',
				'class' => 'requiredField form-textarea'
    ))}}