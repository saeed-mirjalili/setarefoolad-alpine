@extends('layouts.master')

@section('style')
    <link href="css/style-sell.css" rel="stylesheet" />
@endsection

@section('body')

<div class="menuProfile">
    <div>
        <span class="icon-cabinet"></span>
        سفارشات گذشته
    </div>
    <div>
        <span class="icon-clipboard"></span>    
        سفارشات تایید نشده
    </div>
    <div>
        <span class="icon-profile"></span>  
        مشخصات
    </div>
    <div>
        <span class="icon-profile"></span>  
        محصولات
    </div>
</div>

<div style="width:70%;margin:0px auto;">
        <table>
            <tr>
                <th>کالا</th>
                <th>تاریخ</th>
                <th>وزن</th>
            </tr>
            <form method="POST" action="{{ route('orders.update') }}">
            @csrf
            @foreach($orders as $ordernull)
                @if($ordernull->order_weight == null)
                
                    <tr>
                        <td>
                            {{ $ordernull->order_name }}
                        </td>
                        <td>
                            {{ $ordernull->created_at }}
                        </td>
                            <input type="text" name="orders[]" value="{{$ordernull->id}}" class="search-input" hidden>
                        <td>
                            <input type="text" name="{{ $ordernull->id }}" class="search-input">
                        </td>
                    </tr>
                @endif
            @endforeach
            <tr>
                <td></td>
                <td><input type="submit" value="submit"></td>
                <td></td>
            </tr>
            </form>
        </table>

</div>



@endsection