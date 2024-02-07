@extends('layouts.master')

@section('style')
    <link href="css/style-sell.css" rel="stylesheet" />
@endsection

@section('body')

@include('profile.user.menu')

<div class="old-sell">
    @foreach($orders as $date => $items)
        <div class="form-login">
            <table>
                <tr>
                    <td colspan="2">{{ $date }}</td>
                </tr>
                <tr>
                    <td>نام کالا</td>
                    <td>وزن کالا</td>
                </tr>

                @foreach($items as $item)
                    
                    <tr>
                        <td>{{ $item->order_name }}</td>
                        <td>{{ $item->order_weight }}</td>
                    </tr>
                @endforeach
                
            </table>
        </div>
    @endforeach
</div>
@endsection