 <nav class="hidden md:flex items-center justify-between text-xs">
    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li>
            <a wire:click.prevent="setStatus('All')" class="border-b-4 pb-3 border-blue">All ideas(87)</a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('Considering')" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering (6)</a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('In Progress')" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In Progress (1)</a>
        </li>
    </ul>

    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li>
            <a wire:click.prevent="setStatus('Implemented')" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented (10)</a>
        </li>
        <li>
            <a wire:click.prevent="setStatus('Closed')" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed (55)</a>
        </li>
    </ul>
</nav>
