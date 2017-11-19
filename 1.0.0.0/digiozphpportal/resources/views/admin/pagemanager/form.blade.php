@section('head')
<script src="{{ asset('/js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script>tinymce.init({ 
        selector:'#body', 
        height: 500,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks fullscreen',
            'insertdatetime media table contextmenu '
          ],
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | fontselect fontsizeselect'
    });
</script>
@endsection

    <div class="form-horizontal">
        <hr />

        {{ Form::hidden('invisible', 'user_id', array('id' => 'invisible_id')) }}

        <div class="form-group">
            {!! Form::label('title', 'Title', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('url', 'URL', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('url', null, array('placeholder' => 'URL','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Body', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::textarea('body', null, array('placeholder' => 'Body','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('keywords', 'Keywords', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('keywords', null, array('placeholder' => 'Keywords','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="form-group">
            {!!Form::label('visible', 'Visible', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-10">
                {{ Form::checkbox('visible') }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Submit" class="btn btn-primary" />
            </div>
        </div>
    </div>

