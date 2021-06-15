@extends('layouts.store')
@section('content')
<h2 class="text-dark">Carrinho de compra</h2>
<div class="mx-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Produto</th>
                <th></th>
                <th>Preço Unitario</th>
                <th>Quantidade</th>
                <th></th>
                <th></th>
                <th>Preço Total</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            @php
                $total = 0;
            @endphp
            @foreach($cart as $item)
                <tr class="fs-5">
                    <td><img src="{{ asset($item->product()->image) }}" style="width:100px"></td>
                    <td><a href="{{ route('product.show', $item->product()->id) }}">{{ $item->product()->name }}</a></td>
                    <td><span>R$ {{ number_format($item->product()->price,2, ',' , '.') }}</span></td>
                    <td>
                        <a href="{{ route('cart.remove', $item->product()->id) }}" class="btn btn-lg btn-danger">-</a>
                        <span class="text-center"> {{ $item->quantity }}</span>
                        <a href="{{ route('cart.add', $item->product()->id) }}" class="btn btn-lg btn-success">+</a>
                    </td>
                    <td>
                        
                        @php
                            $total += $item->product()->price * $item->quantity;
                        @endphp
                    </td>
                    <td></td>
                    <td> R$ {{ number_format($item->product()->price * $item->quantity, 2, ',' , '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex flex-column flex-wrap align-items-end">
    <span class="h5 mx-5 text-dark-90">Total: <span class="text-dark h4">R$ {{ number_format($total, 2, ',' , '.') }}</span></span>
    <a href="{{ route('cart.payment') }}" class="btn btn-lg btn-success mx-5 my-2">Finalizar compra</a>
<div>
@endsection