@extends('master')

@section('content')
    <h1>Show</h1>
<table class="table table-bordered">
        <tr>
            <th>ID</th>            
            <th>ชื่อลูกค้า</th>            
            <th>ยอดเงิน</th>
            <th>ฝากธนาคาร</th>
            <th>ฝากเลขบัญชี</th>
            <th>ฝากชื่อบัญชี</th>            
            <th>วันที่โอน</th>            
            <th>โอนเข้าธนาคาร</th>
            <th>โอนเข้าเลขบัญชี</th>
            <th>โอนเข้าชื่อบัญชี</th>
            <th>วิธีการฝาก</th>
            <th>tel</th>
            <th>opinion</th>
            <th>สถานะ</th>            
        </tr>  
        <tr>                          
            <td>{{ $deposit->id }}</td>
            <td>{{ $deposit->username }}</td>
            <td>{{ $deposit->balance }}</td>            
            <td>{{ $deposit->frombank }}</td>
            <td>{{ $deposit->fromaccountnumber }}</td>
            <td>{{ $deposit->fromaccontname }}</td>
            <td>{{ $deposit->datetime }}</td>
            <td>{{ $deposit->tobank }}</td>
            <td>{{ $deposit->toaccountnumber }}</td>
            <td>{{ $deposit->toaccountname }}</td>
            <td>{{ $deposit->channel }}</td>
            <td>{{ $deposit->tel }}</td>
            <td>{{ $deposit->opinion }}</td>
            
        </tr>  
       
</table>  



@endsection

           




