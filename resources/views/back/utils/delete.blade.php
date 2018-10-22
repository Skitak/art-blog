{!! Form::model($object, ['method' => 'delete', 'url' => route($route, [$object])]) !!}

        <button>Delete</button>

{!! Form::close() !!}