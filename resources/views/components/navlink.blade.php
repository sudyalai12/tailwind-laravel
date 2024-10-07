@props(['active' => false])

<a {{ $attributes->class(['', 'active' => $active]) }}>
    <span>{{ $slot }}</span>
</a>
