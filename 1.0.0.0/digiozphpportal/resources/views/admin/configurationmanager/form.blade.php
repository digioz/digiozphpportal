
    <div class="form-horizontal">
        <hr />

        <div class="form-group">
            {!! Form::label('configkey', 'Config Key', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('configkey', null, array('placeholder' => 'Config Key','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('configvalue', 'Config Value', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('configvalue', null, array('placeholder' => 'Config Value','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('isencrypted', 'Is Encrypted', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::checkbox('isencrypted', 1, array('class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Submit" class="btn btn-primary" />
            </div>
        </div>
    </div>

