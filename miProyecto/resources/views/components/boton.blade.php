
   <!-- <a href="{{--{{ $url }}" class="btn">
        <button type="{{ $type }}">{{ $texto }}</button>
    </a>-->--}}-->
<a href="{{ $url }}" class="{{ $class }}" type="{{ $type }}">
    {{ $texto }}
</a>
<!--
$texto: El texto que se mostrará dentro del botón.
$url: La URL de destino cuando se hace clic en el botón.
$type: El tipo de botón (por ejemplo, button, aunque en este caso se usará principalmente como enlace).
$class: La clase CSS que quieres aplicar al botón (esto te permitirá darle estilo).-->