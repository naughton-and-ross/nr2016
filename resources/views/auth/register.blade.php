<h1>{{url('/')}}</h1>
{!! Form::open(['class' => 'pure-form pure-form-stacked']) !!}
    <input class="pure-input-1" type="text" name="username" placeholder="username"/>
    <input class="pure-input-1" type="password" name="password" placeholder="Password"/>
    <input class="pure-input-1" type="password" name="password_confirmation" placeholder="Password Confirmation"/>
    <button class="pure-button" type="submit" name="Submit">Sign up</button>
{!! Form::close() !!}
