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
         @foreach($deposit as $d)               
            <td>{{ $d->id }}</td>
            <td>{{ $d->username }}</td>
            <td>{{ $d->balance }}</td>            
            <td>{{ $d->frombank }}</td>
            <td>{{ $d->fromaccountnumber }}</td>
            <td>{{ $d->fromaccontname }}</td>
            <td>{{ $d->datetime }}</td>
            <td>{{ $d->tobank }}</td>
            <td>{{ $d->toaccountnumber }}</td>
            <td>{{ $d->toaccountname }}</td>
            <td>{{ $d->channel }}</td>
            <td>{{ $d->tel }}</td>
            <td>{{ $d->opinion }}</td>
            <td></td>
            <td></td>            
        </tr>
                


        @endforeach
        
</table>  



@endsection

           




