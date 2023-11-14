
<div {{ $attributes->merge(['class' => '']) }}>
    <div class="@if($weather->isDay)
                bg-gradient-to-tr from-yellow-400 via-red-500 to-pink-500 
                @else 
                bg-gradient-to-tr from-blue-900 via-purple-900 to-indigo-900 
                @endif
                w-full h-20 rounded-lg">

                                <h1>{{ $weather->temperature }}</h1>
    </div>
</div>