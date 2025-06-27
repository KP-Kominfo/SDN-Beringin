<div id="{{ $id }}" class="relative overflow-hidden w-full h-[calc(100dvh-98px)] sm:h-[calc(100dvh-154px)]">
    @foreach ($slides as $index => $slide)
    <div class="carousel-item-{{ $id }} absolute inset-0 transition-opacity duration-1000 {{ $index == 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
        <img src="{{ asset($slide['image']) }}" class="w-full h-full object-cover" alt="{{ $slide['alt'] }}">
        <div class="absolute inset-0 bg-black/35 flex flex-col items-center justify-center text-white text-center px-4">
            <h2 class="text-3xl md:text-5xl font-bold mb-4">{{ $slide['title'] }}</h2>
            <p class="mb-4 text-lg md:text-xl">{{ $slide['desc'] }}</p>
            @if(isset($slide['cta']))
                <a href="{{ $slide['cta']['href'] }}" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                    {{ $slide['cta']['text'] }}
                </a>
            @endif
        </div>
    </div>
    @endforeach
</div>
