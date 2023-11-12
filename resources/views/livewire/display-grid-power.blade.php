<div class="bg-slate-200 rounded px-4 py-8">
    <div class="flex flex-col sm:flex-row gap-4 h-fit sm:h-20 text-xs justify-center items-center">
        <div class="h-12 w-fit text-black border border-slate-500 bg-slate-400 p-2 rounded-full  font-bold flex flex-row items-center gap-2">
            <label class="text-lg" for="startDate">Du :</label>
            <input class="h-full rounded-full p-1 text-blue-950" type="date" name="startDate" id="startDate" wire:model="startDate">
        </div>
        <div class="h-12 w-fit text-black border border-slate-500 bg-slate-400 p-2 rounded-full  font-bold flex flex-row items-center gap-2">
            <label class="text-lg" for="startDate">Au :</label>
            <input class="h-full rounded-full p-1 text-blue-950" type="date" name="endDate" id="endDate" wire:model="endDate">
        </div>
        <button class="h-12 w-12 grid place-items-center text-black border border-slate-500 bg-slate-400 rounded-full transition-all hover:rotate-180" type="button" wire:click="changePeriod">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>    
        </button>
    </div>

    <div class="shadow rounded p-4 border bg-white h-96 mt-3">
        <livewire:livewire-line-chart
        key="{{ $chart->reactiveKey() }}"
        :line-chart-model="$chart"
        />
    </div>
</div>
