<div>
    <div class="container w-100 align-items-center justify-content-center">
        <div>
            <button wire:click="increment" class="btn">+1</button>
            <button wire:click="decrement" class="btn">-1</button>
            <button wire:click="incrementByAmount" class="btn">+</button>
            <button wire:click="decrementByAmount" class="btn">-</button>
            <button wire:click="resetCount" class="btn">reset</button>
            <p>Count: {{ $count }}</p>
        </div>
    </div>
</div>
