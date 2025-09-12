@props(['active' => false])

<a {{ $attributes }}class="{{ $active ? 'bg-red-900/30 text-red-400 border-glow-red' : 'text-gray-300 hover:bg-red-900/20 hover:text-red-400' }} rounded-md px-3 py-2 text-sm font-medium font-body transition-all duration-300 hover-glow-red"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
