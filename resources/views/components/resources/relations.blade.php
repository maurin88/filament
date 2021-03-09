@props([
    'owner',
    'relations' => [],
])

<div class="space-y-6">
    @foreach ($relations as $manager)
        <x-filament::card>
            @livewire(\Livewire\Livewire::getAlias($manager, $manager::getName()), ['owner' => $owner], key($loop->index))
        </x-filament::card>
    @endforeach
</div>
