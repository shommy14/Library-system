
<div class="margina">
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('dueDate','Due Date') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('dueDate') ? 'has-error' : "" }}">
                {{ Form::date('dueDate',NULL, ['class'=>'form-control', 'id'=>'dueDate', 'placeholder'=>'Insert']) }}
                {{ $errors->first('dueDate', ':message') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('userId','Member Identification') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('userId') ? 'has-error' : "" }}">
                {{ Form::text('userId',NULL, ['class'=>'form-control', 'id'=>'userId', 'placeholder'=>'Insert']) }}
                {{ $errors->first('userId', ':message') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('bookId','Book Identification') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('bookId') ? 'has-error' : "" }}">
                {{ Form::text('bookId',NULL, ['class'=>'form-control', 'id'=>'bookId', 'placeholder'=>'Insert']) }}
                {{ $errors->first('bookId', ':message') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('returned') ? 'has-error' : "" }}">
                {{ Form::hidden('returned', 0, ['class'=>'form-control', 'id'=>'returned', 'placeholder'=>'Insert']) }}
                {{ $errors->first('returned', ':message') }}
            </div>
        </div>
    </div>
    <div class="form-group">
        {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </div>
</div>



