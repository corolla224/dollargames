@extends('master')

@section('content')
<h3>การฝาก</h3> 
      @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
            @endif
      <form method="post" action="/dollargame">
        {{ csrf_field() }}
         <div class="form-group">
            <label for="username">username</label>
            <input type="text" class="form-control" name="username" placeholder="name">
        </div>
        <div class="form-group">
            <label for="balance">balance</label>
            <input type="text" class="form-control" name="balance"  placeholder=balance>
        </div>
        <div class="form-group">
            <label for="fromBank">fromBank</label>
            <input type="text" class="form-control" name="fromBank" placeholder="Bank">
        </div>
        <div class="form-group">
            <label for="fromAccountNumber">fromAccountNumber</label>
            <input type="text" class="form-control" name="fromAccountNumber" placeholder="AccountNumber">
        </div>
        <div class="form-group">
            <label for="fromAccountName">fromAccountName</label>
            <input type="text" class="form-control" name="fromAccountName" placeholder="fromAccountName">
        </div>
        <div class="form-group">
            <label for="datetime">datetime</label>
            <input  type="text" class="form-control" name="dateadd" id="datepicker"placeholder="dateadd">
        </div>
        <div class="form-group">
            <label for="tobank">tobank</label>
            <input type="text" class="form-control" name="tobank" placeholder="tobank">
        </div>
        <div class="form-group">
            <label for="toaccountnumber">toaccountnumber</label>
            <input type="text" class="form-control" name="toaccountnumber" placeholder="toaccountnumber">
        </div>
        <div class="form-group">
            <label for="toaccountname">toaccountname</label>
            <input type="text" class="form-control" name="toaccountname" placeholder="toaccountname">
        </div>
        <div class="form-group">
            <label for="channel">channel</label>
            <input type="text" class="form-control" name="channel" placeholder="channel">
        </div>
       <div class="form-group">
            <label for="tel">tel</label>
            <input type="text" class="form-control" name="tel" placeholder="tel">
        </div>
        <div class="form-group">
            <label for="opinion">opinion</label>
            <input type="text" class="form-control" name="opinion" placeholder="opinion">
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input type="text" class="form-control" name="status" placeholder="status">
        </div>
        <input type="submit" class="btn btn-primary" value="submit">
        <input type="submit" class="btn btn-danger" value="cancel">
      </form>
    
@endsection





            