<div id="popupAdd" class="popup-orders">
    <div class="popup-content">
        <div class="popup-close">
            <i class="fas fa-times" onclick="togglePopupAdd();"></i>
        </div>
        <h1 id="popup-heading">Добавление заказа</h1>
        <form class="popup-form" action="/orders" method="post">
            {{ csrf_field() }}
            <div class="popup-form-row">
                <label for="product-add">
                    <span class="required" title="Required field">
                        Продукт:
                    </span>
                </label>
                <select name="product_id[]" id="product-add" required>
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{ $product->title.' ('.$product->price.'₴)' }} </option>
                        @endforeach
                </select>
            </div>
            <div class="popup-form-row">
                <label for="quantity-add">
                    <span class="required" title="Required field">
                        Количество:
                    </span>
                </label>
                <select name="quantity[]" id="quantity-add">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                {{--<input type="number" step="0.01" min="0" max="999999"--}}
                       {{--name="amount" id="amount-add" placeholder="500.0" required>--}}
            </div>
            <hr style="width: 100%">
            <div class="extra-products">

            </div>
            <div class="popup-form-button">
                <button
                        @if(Auth::user()->role->display_name == 'Стафф') disabled @endif>
                    Добавить
                </button>
            </div>
        </form>
        <div class="popup-form-button extra-product">
            <button
                    @if(Auth::user()->role->display_name == 'Стафф') disabled @endif>
                Еще продукт
            </button>
        </div>
        <p>Итого к Оплате: </p>
    </div>
</div>

<script>
    $('.extra-product').on('click', function () {
        $('.extra-products').append(
        '<div class="extra-product"> <div class="popup-form-row"> <label for="product-add"> <span class="required" title="Required field"> Продукт: </span> </label> <select name="product_id[]" id="product-add" required> @foreach($products as $product) <option value="{{$product->id}}">{{ $product->title." (".$product->price."грн)" }} </option> @endforeach </select> </div> <div class="popup-form-row"> <label for="quantity-add"> <span class="required" title="Required field"> Количество: </span> </label> <select name="quantity[]" id="quantity-add"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> <hr style="width: 100%"> </div>'
        )
    })
</script>

