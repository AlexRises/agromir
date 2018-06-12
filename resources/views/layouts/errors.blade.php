@if(count($errors))
    <div class="message-alert errors-block alert-error">
        <p>Ошибка при вводе данных</p>
        <ul class="errors-list">
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

