
<div class="form-group col-sm-6">
        {{ Form::label('name', 'Venue Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('states.index') }}" class="btn btn-secondary">Cancel</a>
</div>
