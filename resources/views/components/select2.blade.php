<div>
    <div wire:ignore class="w-full">
        <select class="select2 w-full" data-placeholder="Select your option" {{ $attributes }}>
            @if(!isset($attributes['multiple']))
            <option></option>
            @endif
            @foreach($options as $key=> $option)
                <option value="{{$key}}">{{ $option}}</option>
            @endforeach
        </select>
    </div>
</div>