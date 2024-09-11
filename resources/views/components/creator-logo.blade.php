@props(['creator', 'width' => 90])

<img src="{{ asset($creator->avatar) }}" alt="" class="rounded-xl" width="{{ $width }}">