
<div class="margina">
    <h3>ARE YOU SURE? </h3>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('issueDate') ? 'has-error' : "" }}">
            {{ Form::hidden('issueDate',NULL, ['class'=>'form-control', 'id'=>'issueDate', 'placeholder'=>'Insert']) }}
            {{ $errors->first('issueDate', '<p class="help-block">:message</p>') }}
        </div>
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('dueDate') ? 'has-error' : "" }}">
            {{ Form::hidden('dueDate',NULL, ['class'=>'form-control', 'id'=>'dueDate', 'placeholder'=>'Insert']) }}
            {{ $errors->first('dueDate', '<p class="help-block">:message</p>') }}
        </div>
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('userId') ? 'has-error' : "" }}">
            {{ Form::hidden('userId',NULL, ['class'=>'form-control', 'id'=>'userId', 'placeholder'=>'Insert']) }}
            {{ $errors->first('userId', '<p class="help-block">:message</p>') }}
        </div>
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('bookId') ? 'has-error' : "" }}">
            {{ Form::hidden('bookId',NULL, ['class'=>'form-control', 'id'=>'bookId', 'placeholder'=>'Insert']) }}
            {{ $errors->first('bookId', '<p class="help-block">:message</p>') }}
        </div>
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('returned') ? 'has-error' : "" }}">
            {{ Form::hidden('returned', 1, ['class'=>'form-control', 'id'=>'returned', 'placeholder'=>'Insert']) }}
            {{ $errors->first('returned', '<p class="help-block">:message</p>') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </div>
</div>






