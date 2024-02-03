<div>
    <div x-data="{ options: @entangle('options').live, selectedOption: @entangle('selectedOption').live, search: @entangle('search').live }">
        <input type="text" x-model="search" x-on:input.debounce.300ms="fetchOptions()" placeholder="Search...">
        <ul>
            <template x-for="option in options">
                <li>
                    <a href="#" x-text="option.text" x-on:click.prevent="selectOption(option)">a</a>
                </li>
            </template>
            {#each options as option}
                <li>
                    <a href="#" x-text="option.text" x-on:click.prevent="selectOption(option)">a</a>
                </li>    {/each}
        </ul>
        <input type="hidden" name="actor_id" x-model="selectedOption">
    </div>
</div>
