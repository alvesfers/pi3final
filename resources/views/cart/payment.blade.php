@extends('layouts.store')
@section('content')
<h2 class="text-dark">Pagamento</h2>
<div class="row justify-content-center">
    <div class="col-md-6 col-10 my-4 p-3">
        <h3 class="text-dark">Endereço de Entrega</h3>
        <address class="ms-3">
            Rua Germano Gottsfritz, 431<br>
            São Paulo, SP<br>
            CEP: 04713-030<br>
            Brasil
        </address>
    </div>
    <div class="col-md-6 col-10 bg-light my-4 p-3">
        <h3 class="text-dark">Resumo da Compra</h3>
        <div class="ms-3">
            <div>
                <span class="text-dark">Produtos comprados:</span>
                <a class="float-end me-4 text-dark">Preço</a>
            </div>
            @foreach($cart as $item)
            <span>{{ $item->quantity }}   x   {{ $item->product()->name }}</span>
            <a class="float-end me-4">R$ {{ number_format($item->product()->price * $item->quantity, 2, ',' , '.') }}</a><br>
            @endforeach
            <br>

            <div>
                <span class="text-dark">Frete:</span>
                <span class="float-end me-4 text-success fw-bold">GRÁTIS</span>
            </div> 
            <hr>
            <div>
                <span class="h4">Total a pagar:</span>
                <span class="float-end me-4 h4 text-dark">R$ {{ number_format(\App\Models\Cart::totalValue(), 2, ',' , '.') }}</span>
            </div>
        </div>
    </div>
</div>
<hr>
<form style="margin-top: 25px; margin-bottom: 70px;" method="POST" action="{{ route('order.add') }}">
    <h3 class="text-dark">Dados de pagamento</h3>
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-5 col-10 mb-3">
            <label for="cc-nome">Nome no cartão</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                <input type="text" id="cc-nome" name="cc-nome" class="form-control" required>
            </div>
            <small class="text-muted">Você deve preencher o nome igual está no cartão</small>
        </div>
        <div class="col-md-5 col-10 mb-3">
            <label for="cc_card" >Número do cartão</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                <input type="text" id="cc_card" name="cc_card" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 col-10 mb-3">
            <label for="cc-nome">Código CVV (Atras do cartão)</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-unlock"></i></span>
                <input type="text" id="cc-cvv" name="cc-cvv" class="form-control" required>
            </div>
        </div>
        <div class="col-md-5 col-10 mb-3">
            <label for="cc-nome">Data de expiração</label>
            <div class="input-group">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                <input type="text" id="cc-date" name="cc-date" class="form-control" required>
            </div>
        </div>
    </div>
    <a href="{{ route('cart.show') }}" class="btn btn-danger">Voltar ao carrinho</a>
    <button type="submit" class="btn btn-lg btn-success float-end">Efetuar Pagamento</button>
    
</form>
@endsection