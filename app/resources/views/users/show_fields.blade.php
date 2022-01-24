<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- User Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- User Icon Field -->
<div class="col-sm-12">
    {!! Form::label('icon', 'Icon:') !!}
    <div>
        <p>{{ basename($user->icon) }}</p>
        <img src="{{ asset($user->icon) }}" alt="" class="elevation-2">
    </div>
</div>
