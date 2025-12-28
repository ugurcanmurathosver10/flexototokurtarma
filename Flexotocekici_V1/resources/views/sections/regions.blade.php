<section class="py-16 bg-black border-y border-white/5">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-2xl font-display font-bold text-white mb-8">Hizmet Bölgelerimiz</h3>
        <div class="flex flex-wrap justify-center gap-3">
            @foreach(config('flex.regions.balikesir') as $district)
                <span class="px-5 py-2 bg-gray-900 border border-gray-800 rounded-lg text-gray-400 hover:text-brand-yellow hover:border-brand-yellow/30 transition cursor-default text-sm font-medium">
                    📍 {{ ucfirst($district) }}
                </span>
            @endforeach
        </div>
    </div>
</section>