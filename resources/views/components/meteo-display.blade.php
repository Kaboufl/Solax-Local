<div {{ $attributes->merge(['class' => '']) }}>
    <div class="@if($partOfDay == 'matin')
                bg-gradient-to-b from-yellow-400 via-red-500 to-pink-500 
                @elseif($partOfDay == 'midi') 
                bg-gradient-to-b from-cyan-600 via-cyan-500 to-cyan-300 
                @elseif($partOfDay == 'soir')
                bg-gradient-to-b from-blue-700 via-gray-400 to-orange-500
                @elseif($partOfDay == 'nuit')
                bg-gradient-to-tr from-blue-900 via-purple-900 to-indigo-900 
                @endif
                min-w-max w-full max-w-96 h-40 rounded-lg overflow-hidden relative">
        @if($weather->weatherCode == 1)
        <div class="absolute w-full h-full z-20">
            <img class="object-fill min-h-full" src="{{ asset('images/weather/thin-clouds.png') }}" height="100%" alt="" style="">
        </div>
        @elseif($weather->weatherCode == 2)
        <div class="absolute w-full h-full z-20">
            <img class="object-contain object-top bottom-0 h-full w-full -translate-y-1/4" src="{{ asset('images/weather/clouds.png') }}" alt="" style="">
        </div>
        @elseif($weather->weatherCode == 3)
        <div class="absolute w-full h-full bg-gradient-to-b @if($weather->isDay) from-slate-500 via-slate-300 @else from-slate-700 via-slate-600 @endif to-transparent">
            <img class="object-contain object-top bottom-0 h-full w-full z-20 -translate-y-1/4 opacity-30" src="{{ asset('images/weather/clouds.png') }}" alt="" style="">
        </div>
        @endif

        @if($partOfDay == 'matin')
        <span class="absolute left-8 -bottom-8 w-24 h-24 rounded-full bg-yellow-300 z-10"></span>
        @elseif($partOfDay == 'midi')
        <span class="absolute left-1/2 top-8 w-14 h-14 rounded-full bg-yellow-400 z-10"></span>
        @elseif($partOfDay == 'soir')
        <span class="absolute right-8 -bottom-8 w-32 h-32 rounded-full bg-yellow-400 z-10"></span>
        @elseif($partOfDay == 'nuit')
        <span class="absolute right-1/4 top-1/4 w-12 h-12 rounded-full bg-slate-400 z-10"></span>

        @endif

        <div class="relative w-full h-full p-3 pl-6 grid">
            <p class="z-50 text-5xl my-4 font-bold @if(!$weather->isDay) text-white @else text-slate-700 @endif">{{ $time }}</p>
            <p class="z-50 text-lg font-bold @if(!$weather->isDay) text-white @else text-slate-700 @endif">{{ $weather->decodeWeatherCode() }}</p>
            <p class="absolute z-50 text-2xl right-4 bottom-4 font-bold @if(!$weather->isDay) text-slate-100 @else text-slate-700 @endif">{{ $weather->temperature.' °C' }}</p>
        </div>

    </div>
</div>