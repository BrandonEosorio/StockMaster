<!-- resources/views/partials/cart-drop.blade.php -->
@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-9">
                    <b>{{ $item->name }}</b><br>
                    <small>Qty: {{ $item->quantity }}</small>
                </div>
                <div class="col-lg-3">
                    <p>${{ $item->price * $item->quantity }}</p>
                </div>
            </div>
        </li>
    @endforeach
@else
    <li class="list-group-item">Tu Carrito está Vacío</li>
@endif
