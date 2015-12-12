<h1>{{url('/')}}</h1>
@if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
{!! Form::open() !!}
    <input class="pure-input-1" type="text" name="username" placeholder="username"/>
    <input class="pure-input-1" type="password" name="password" placeholder="Password"/>
    <button class="pure-button" type="submit" name="Submit">Login</button>
{!! Form::close() !!}
