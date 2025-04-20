@props(['name'])


<div class=" text-red-600 text-sm">
    @error($name)
        {{ $message }}
    @enderror
</div>