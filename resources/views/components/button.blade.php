<div class="form-group col-3 my-6"> 
<button {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</button>
</div>