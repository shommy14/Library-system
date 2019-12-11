<div class="margina">
<div class="row">
    <div class="col-sm-2">
        {!! form::label('title','Title') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
            {{ Form::text('title',NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Insert']) }}
            {{ $errors->first('title', ':message') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('published','Published') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('published') ? 'has-error' : "" }}">
            {{ Form::date('published',NULL, ['class'=>'form-control', 'id'=>'published', 'placeholder'=>'Insert']) }}
            {{ $errors->first('published', ':message') }}
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('cat_id','Category') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('cat_id') ? 'has-error' : "" }}">
                <select name="cat_id" id="cat_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category -> id}}">{{ $category -> name }}</option>
                        @endforeach
                </select>
                {{ $errors->first('cat_id', ':message') }}
            </div>
        </div>
    </div>


<div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
</div>


