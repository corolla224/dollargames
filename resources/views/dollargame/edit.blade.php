@extends('master')

@section('content')
 <h3>Edit</h3>   
 <form  action="/dollargame/{{$deposit -> id}}" method="post">
{{ csrf_field() }}
{{ method_field('PUT')}}
 <input type="text" class="form-control" name="username" value="{{ $deposit->username }}">

 <input type="text" class="form-control" name="balance" value="{{ $deposit->balance }}">

 <input type="text" class="form-control" name="frombank" value="{{ $deposit->frombank }}">

 <input type="text" class="form-control" name="fromaccountnumber" value="{{ $deposit->fromaccountnumber }}">

 <input type="text" class="form-control" name="fromaccontname" value="{{ $deposit->fromaccontname }}">

 <input type="text" class="form-control" name="datetime" value="{{ $deposit->datetime }}">

 <input type="text" class="form-control" name="tobank" value="{{ $deposit->tobank }}">

 <input type="text" class="form-control" name="toaccountnumber" value="{{ $deposit->toaccountnumber }}">

 <input type="text" class="form-control" name="toaccountname" value="{{ $deposit->toaccountname }}">

 <input type="text" class="form-control" name="channel" value="{{ $deposit->channel }}">

 <input type="text" class="form-control" name="tel" value="{{ $deposit->tel }}">

 <input type="text" class="form-control" name="opinion" value="{{ $deposit->opinion }}">

 {{-- <input {{ oldHelper(old()) }} type="radio" name="gender" value="M">Male
 <input type="radio" name="gender" value="F">Female --}}
 
 <input type="submit" class="btn btn-primary" value="save">
 <input type="submit" class="btn btn-primary" value="cancel">
 
 </form>


@endsection