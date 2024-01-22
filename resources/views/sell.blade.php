@extends('layouts.master')

@section('style')
    <link href="css/style-sell.css" rel="stylesheet" />
@endsection

@section('body')

<div class="menuProfile">
    <div>
        <span class="icon-cabinet"></span>
        <a href="/oldOrder">سفارشات گذشته</a>
    </div>
    <div>
        <span class="icon-clipboard"></span>    
        <a href="/sell">سفارشات تایید نشده</a>
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
            @forelse($orders as $ordernull)
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
                @empty  
                <tr>  
                    <td colspan="3">شما کالایی برای تایید وزن در سبد خود ندارید.لطفا از صفحه اول کالاهای خود را انتخاب و از منوی بالای صفحه سبد خود را تایید کنید.</td>
                </tr>
            @endforelse
            <tr>
                <td  colspan="3"><input type="submit" value="تایید وزن"></td>
            </tr>
            </form>
        </table>

</div>



@endsection