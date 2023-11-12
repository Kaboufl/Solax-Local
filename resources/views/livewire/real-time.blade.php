<div class="bg-white rounded px-4 py-8 flex flex-col">
    {{-- Do your work, then step back. --}}

    <div class="w-full flex flex-col justify-between">

        {{-- <div class="relative flex flex-row items-center w-fit h-fit">
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            
            @if ($apiStatus == null)
            <div class="absolute w-full h-full grid place-items-center z-20">
                
                <div class="w-fit h-hit bg-gray-300 p-2 rounded-full shadow-lg shadow-gray-600 animate-pulse">
                    <svg class="w-16 h-16" xmlns:x="http://ns.adobe.com/Extensibility/1.0/" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/"
                    xmlns:graph="http://ns.adobe.com/Graphs/1.0/" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                    style="enable-background:new 0 0 100 100;" xml:space="preserve">
                    <switch>
                        <foreignObject requiredExtensions="http://ns.adobe.com/AdobeIllustrator/10.0/" x="0" y="0"
                        width="1" height="1" />
                        <g i:extraneous="self">
                            <g>
                                <path
                                d="M69.5,50c0-10.8-8.7-19.5-19.5-19.5c-2.1,0-4.1,0.3-6,1L68.5,56C69.1,54.1,69.5,52.1,69.5,50z" />
                                <path
                                d="M50,20.5c1.9,0,3.4-1.5,3.4-3.4V5.9c0-1.9-1.5-3.4-3.4-3.4S46.6,4,46.6,5.9v11.2C46.6,19,48.1,20.5,50,20.5z" />
                                <path
                                d="M21.8,17c-1.3-1.3-3.5-1.3-4.8,0s-1.3,3.5,0,4.8L34,38.9c-2.2,3.2-3.5,7-3.5,11.1c0,10.7,8.7,19.5,19.5,19.5     c4.1,0,8-1.3,11.1-3.5l17.6,17.6c0.7,0.7,1.5,1,2.4,1c0.9,0,1.7-0.3,2.4-1c1.3-1.3,1.3-3.5,0-4.8L21.8,17z" />
                                <path
                                d="M20.5,50c0-1.9-1.5-3.4-3.4-3.4H5.9c-1.9,0-3.4,1.5-3.4,3.4s1.5,3.4,3.4,3.4h11.2C19,53.4,20.5,51.9,20.5,50z" />
                                <path
                                d="M24.3,70.8l-7.9,7.9c-1.3,1.3-1.3,3.5,0,4.8c0.7,0.7,1.5,1,2.4,1s1.7-0.3,2.4-1l7.9-7.9c1.3-1.3,1.3-3.5,0-4.8     S25.7,69.5,24.3,70.8z" />
                                <path
                                d="M50,79.5c-1.9,0-3.4,1.5-3.4,3.4v11.2c0,1.9,1.5,3.4,3.4,3.4s3.4-1.5,3.4-3.4V82.9C53.4,81,51.9,79.5,50,79.5z" />
                                <path
                                d="M94.1,46.6H82.9c-1.9,0-3.4,1.5-3.4,3.4s1.5,3.4,3.4,3.4h11.2c1.9,0,3.4-1.5,3.4-3.4S96,46.6,94.1,46.6z" />
                                <path
                                d="M73.2,30.2c0.9,0,1.7-0.3,2.4-1l7.9-7.9c1.3-1.3,1.3-3.5,0-4.8c-1.3-1.3-3.5-1.3-4.8,0l-7.9,7.9c-1.3,1.3-1.3,3.5,0,4.8     C71.5,29.8,72.4,30.2,73.2,30.2z" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="absolute w-full h-full bg-gray-700 rounded-xl opacity-30">
            </div>
            @endif
            
            <div class="h-full w-fit flex flex-col px-12 text-center text-sm justify-center ">
                <h3 class="font-bold text-lg mb-2">Module 1:</h3>
                <p>Puissance : {{ $productionData ? $productionData->pv1_power.' W' : '??' }}</p>
                <p>Tension : {{ $productionData ? $productionData->pv1_voltage.' V' : '??' }}</p>
                <p>Intensité : {{ $productionData ? $productionData->pv1_current.' A' : '??' }}</p>
            </div>
            
        </div>
        
        <div class="relative flex flex-row items-center w-fit">
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            <x-solar-panel />
            
            @if ($apiStatus == null)
            <div class="absolute w-full h-full grid place-items-center z-20">
                
                <div class="w-fit h-hit bg-gray-300 p-2 rounded-full shadow-lg shadow-gray-600 animate-pulse">
                    <svg class="w-16 h-16" xmlns:x="http://ns.adobe.com/Extensibility/1.0/" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/"
                    xmlns:graph="http://ns.adobe.com/Graphs/1.0/" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                    style="enable-background:new 0 0 100 100;" xml:space="preserve">
                    <switch>
                        <foreignObject requiredExtensions="http://ns.adobe.com/AdobeIllustrator/10.0/" x="0" y="0"
                        width="1" height="1" />
                        <g i:extraneous="self">
                            <g>
                                <path
                                d="M69.5,50c0-10.8-8.7-19.5-19.5-19.5c-2.1,0-4.1,0.3-6,1L68.5,56C69.1,54.1,69.5,52.1,69.5,50z" />
                                <path
                                d="M50,20.5c1.9,0,3.4-1.5,3.4-3.4V5.9c0-1.9-1.5-3.4-3.4-3.4S46.6,4,46.6,5.9v11.2C46.6,19,48.1,20.5,50,20.5z" />
                                <path
                                d="M21.8,17c-1.3-1.3-3.5-1.3-4.8,0s-1.3,3.5,0,4.8L34,38.9c-2.2,3.2-3.5,7-3.5,11.1c0,10.7,8.7,19.5,19.5,19.5     c4.1,0,8-1.3,11.1-3.5l17.6,17.6c0.7,0.7,1.5,1,2.4,1c0.9,0,1.7-0.3,2.4-1c1.3-1.3,1.3-3.5,0-4.8L21.8,17z" />
                                <path
                                d="M20.5,50c0-1.9-1.5-3.4-3.4-3.4H5.9c-1.9,0-3.4,1.5-3.4,3.4s1.5,3.4,3.4,3.4h11.2C19,53.4,20.5,51.9,20.5,50z" />
                                <path
                                d="M24.3,70.8l-7.9,7.9c-1.3,1.3-1.3,3.5,0,4.8c0.7,0.7,1.5,1,2.4,1s1.7-0.3,2.4-1l7.9-7.9c1.3-1.3,1.3-3.5,0-4.8     S25.7,69.5,24.3,70.8z" />
                                <path
                                d="M50,79.5c-1.9,0-3.4,1.5-3.4,3.4v11.2c0,1.9,1.5,3.4,3.4,3.4s3.4-1.5,3.4-3.4V82.9C53.4,81,51.9,79.5,50,79.5z" />
                                <path
                                d="M94.1,46.6H82.9c-1.9,0-3.4,1.5-3.4,3.4s1.5,3.4,3.4,3.4h11.2c1.9,0,3.4-1.5,3.4-3.4S96,46.6,94.1,46.6z" />
                                <path
                                d="M73.2,30.2c0.9,0,1.7-0.3,2.4-1l7.9-7.9c1.3-1.3,1.3-3.5,0-4.8c-1.3-1.3-3.5-1.3-4.8,0l-7.9,7.9c-1.3,1.3-1.3,3.5,0,4.8     C71.5,29.8,72.4,30.2,73.2,30.2z" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="absolute w-full h-full bg-gray-700 rounded-xl opacity-30">
            </div>
            @endif
            
            <div class="h-full w-fit flex flex-col px-12 text-center text-sm justify-center ">
                <h3 class="font-bold text-lg mb-2">Module 2:</h3>
                <p>Puissance : {{ $productionData ? $productionData->pv2_power.' W' : '??' }}</p>
                <span>
                    <p>Tension : {{ $productionData ? $productionData->pv2_voltage.' V' : '??' }}</p>
                    <p>Intensité : {{ $productionData ? $productionData->pv2_current.' A' : '??' }}</p>

                </span>
            </div>
            
        </div> --}}

        <div class="w-fit relative grid grid-cols-[auto,auto,1fr] grid-rows-2 gap-y-12 gap-x-3 p-4 mx-auto rounded-md bg-slate-200 overflow-hidden whitespace-nowrap" wire:poll.10s="updateSolaxLive">
            <div class="col-start-1 h-full w-fit flex flex-col px-8 py-4 text-center text-sm justify-center rounded-xl shadow-md text-black border border-slate-500 bg-slate-400">
                <h3 class="font-bold text-lg mb-2">Module 1</h3>
                <p class="font-semibold text-xl">{{ $productionData ? $productionData->pv1_power.' W' : '??' }}</p>
                <span class="p-2 pt-1 w-fit bg-slate-600 rounded-full font-semibold text-slate-300 text-xs">
                    <p>( {{ $productionData ? $productionData->pv1_voltage.' V' : '??' }} - {{ $productionData ? $productionData->pv1_current.' A' : '??' }} )</p>
                </span>
            </div>

            <div class="col-start-1 h-full w-fit flex flex-col px-8 py-4 text-center text-sm justify-center rounded-xl shadow-md text-black border border-slate-500 bg-slate-400">
                <h3 class="font-bold text-lg mb-2">Module 2</h3>
                <p class="font-semibold text-xl">{{ $productionData ? $productionData->pv2_power.' W' : '??' }}</p>
                <span class="p-2 pt-1 w-fit bg-slate-600 rounded-full font-semibold text-slate-300 text-xs">
                    <p>( {{ $productionData ? $productionData->pv2_voltage.' V' : '??' }} - {{ $productionData ? $productionData->pv2_current.' A' : '??' }} )</p>
                </span>
            </div>

            <div class="col-start-2 row-start-1 row-span-2 flex flex-col justify-around">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 rotate-45">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 -rotate-45">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>  
            </div>

            <div class="col-start-3 row-start-1 row-span-2 h-fit my-auto w-fit flex flex-row px-8 py-4 text-center text-sm justify-center items-center gap-4 rounded-xl shadow-md text-black border border-slate-500 bg-slate-400">
                <p class="font-semibold text-xl">{{ $productionData ? $totalPower.' W' : '??' }}</p >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
                <span class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                    </svg>
                    <p class="text-xs font-semibold">Onduleur</p>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
                <div class="flex flex-col items-center text-center">
                    <p class="font-semibold text-xs">Réseau</p>
                    <p class="font-semibold text-xl">{{ $productionData ? $productionData->grid_power.' W' : '??' }}</p>
                    <span class="p-2 pt-1 w-fit bg-slate-600 rounded-full font-semibold text-slate-300 text-xs">
                        <p>( {{ $productionData ? $productionData->grid_voltage.' V' : '??' }} - {{ $productionData ? $productionData->grid_current.' A' : '??' }} )</p>
                    </span>
                </div>
            </div>

            @if ($apiStatus == null)
            <div class="absolute w-full h-full grid place-items-center z-20">
                
                <div class="w-fit h-hit bg-gray-300 p-2 rounded-full shadow-lg shadow-gray-600 animate-pulse">
                    <svg class="w-16 h-16" xmlns:x="http://ns.adobe.com/Extensibility/1.0/" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/"
                    xmlns:graph="http://ns.adobe.com/Graphs/1.0/" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100"
                    style="enable-background:new 0 0 100 100;" xml:space="preserve">
                    <switch>
                        <foreignObject requiredExtensions="http://ns.adobe.com/AdobeIllustrator/10.0/" x="0" y="0"
                        width="1" height="1" />
                        <g i:extraneous="self">
                            <g>
                                <path
                                d="M69.5,50c0-10.8-8.7-19.5-19.5-19.5c-2.1,0-4.1,0.3-6,1L68.5,56C69.1,54.1,69.5,52.1,69.5,50z" />
                                <path
                                d="M50,20.5c1.9,0,3.4-1.5,3.4-3.4V5.9c0-1.9-1.5-3.4-3.4-3.4S46.6,4,46.6,5.9v11.2C46.6,19,48.1,20.5,50,20.5z" />
                                <path
                                d="M21.8,17c-1.3-1.3-3.5-1.3-4.8,0s-1.3,3.5,0,4.8L34,38.9c-2.2,3.2-3.5,7-3.5,11.1c0,10.7,8.7,19.5,19.5,19.5     c4.1,0,8-1.3,11.1-3.5l17.6,17.6c0.7,0.7,1.5,1,2.4,1c0.9,0,1.7-0.3,2.4-1c1.3-1.3,1.3-3.5,0-4.8L21.8,17z" />
                                <path
                                d="M20.5,50c0-1.9-1.5-3.4-3.4-3.4H5.9c-1.9,0-3.4,1.5-3.4,3.4s1.5,3.4,3.4,3.4h11.2C19,53.4,20.5,51.9,20.5,50z" />
                                <path
                                d="M24.3,70.8l-7.9,7.9c-1.3,1.3-1.3,3.5,0,4.8c0.7,0.7,1.5,1,2.4,1s1.7-0.3,2.4-1l7.9-7.9c1.3-1.3,1.3-3.5,0-4.8     S25.7,69.5,24.3,70.8z" />
                                <path
                                d="M50,79.5c-1.9,0-3.4,1.5-3.4,3.4v11.2c0,1.9,1.5,3.4,3.4,3.4s3.4-1.5,3.4-3.4V82.9C53.4,81,51.9,79.5,50,79.5z" />
                                <path
                                d="M94.1,46.6H82.9c-1.9,0-3.4,1.5-3.4,3.4s1.5,3.4,3.4,3.4h11.2c1.9,0,3.4-1.5,3.4-3.4S96,46.6,94.1,46.6z" />
                                <path
                                d="M73.2,30.2c0.9,0,1.7-0.3,2.4-1l7.9-7.9c1.3-1.3,1.3-3.5,0-4.8c-1.3-1.3-3.5-1.3-4.8,0l-7.9,7.9c-1.3,1.3-1.3,3.5,0,4.8     C71.5,29.8,72.4,30.2,73.2,30.2z" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="absolute w-full h-full bg-gray-700 rounded-xl opacity-30">
            </div>
            @endif
        </div>
    </div>
        
</div>
