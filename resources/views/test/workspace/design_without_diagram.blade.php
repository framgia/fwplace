<div>
    <div class="choose-column-row">
        <div class="form-group row">
            {!! Form::label('row', __('Row'), ['class' => 'col-form-label col-md-1']) !!}
            <div class="col-md-2">
                {!! Form::number('row', 0, ['class' => 'form-control']) !!}
            </div>
            {!! Form::label('column', __('Column'), ['class' => 'col-form-label col-md-1']) !!}
            <div class="col-md-2">
                {!! Form::number('column', 0, ['class' => 'form-control']) !!}
            </div>
            <button class="generate btn btn-success">{{ __('Generate') }}</button>                 
        </div>
        <div class="cell-options">
            <button class="btn btn-success default-areas door">{{ __('Door') }}</button>
            <button class="btn btn-success default-areas path">{{ __('Path') }}</button>
            <button class="btn btn-success default-areas freespace">{{ __('Freespace') }}</button>
            <div class="form-group row mt-2">
                {!! Form::label('name', __('Area Name'), ['class' => 'col-form-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::label('color', __('Choose Color'), ['class' => 'col-form-label']) !!}
                <div class="col-md-4">
                    {!! Form::input('color', 'color', null) !!}
                    <button class="btn btn-primary" id="newArea">{{ __('Create New Area') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="area-section">

    </div>

    <div class="design-section">

    </div>
</div>
<script src="{{ asset('js/design_without_diagram.js') }}"></script>
