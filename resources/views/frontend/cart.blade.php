@extends('layouts.front')

@section('title')
   Welcome to E-Shop
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
<div class="container">
    <h6 class="mb-0">
        <a href="{{url('/')}}">
           Home
        </a> / 
        <a href="{{url('cart')}}">
           Cart
        </a>
    </h6>
</div>
</div>
   
<div class="container my-5">
    <div class="card shadow">
        <div class="card-body">
            @php $total = 0; @endphp
            @foreach($cartitems as $item)
           <div class="row product_data">
            <div class="col-md-2">
                <img src="{{asset('assets/uploads/products/'.$item->products->image)}}" alt="Image here" height="70px" width="70px">
            </div>
            <div class="col-md-3 my-auto">
                <h6>{{$item->products->name}}</h6>
            </div>
            <div class="col-md-2 my-auto">
                <h6>{{$item->products->selling_price}}</h6>
            </div>
                <div class="col-md-3 my-auto">
                <input type="hidden" value="{{ $item->prod_id }}" class="prod_id">
                    @if($item->products->qty > $item->prod_qty)
                    <label for="Quantity">Quantity</label>
                    <div class="input-group text-center mb-3" style="width:130px;">
                        <button class="input-group-text changeQuantity decrement-btn">-</button>
                        <input type="text" name="quantity" value="{{$item->prod_qty}}" class="form-control qty-input text-center" />
                        <button class="input-group-text changeQuantity increment-btn">+</button>
                    </div>
                    @php $total += $item->products->selling_price * $item->prod_qty ; @endphp
                    @else
                    <h6>Out of Stock</h6>
                    @endif
                </div>
                <div class="col-md-2 my-auto">
                    <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash"></i>Remove</button>
                </div>
           </div>
           @endforeach
        </div>
        <div class="cart-footer">
            <h6>Total Price: Rs {{$total}}</h6>
            <a href="{{ url('checkout') }}" class="btn btn-success">Proceed to Checkout</a>
        </div>
    </div>
</div>
@endsection