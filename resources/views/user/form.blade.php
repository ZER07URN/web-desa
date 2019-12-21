@php
$btnLabel = isset($user)?'Update':'Create'; 
@endphp


<table class='table table-bordered'>
    <tr>
        <td>Name</td>
        <td>{{ Form::text('name',null,['placeholder'=>'User Name','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ Form::email('email',null,['placeholder'=>'User Email','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>{{ Form::password('password',['placeholder'=>'user password','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Level</td>
        <td>
            {{ Form::select('admin',[1=>'admin',0=>'User'],null,['class'=>'form-control'])}}
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            {{ Form::submit($btnLabel,['class'=>'btn btn-success'])}}
<<<<<<< HEAD
            {{ link_to('/admin/user','Back',['class'=>'btn btn-info'])}}
=======
            {{ link_to('admin/user','Back',['class'=>'btn btn-info'])}}
>>>>>>> 6a310f1d9fc33261da7c2bf6b01bae6ecc45b15f
        </td>
    </tr>
</table>