<div style="text-align: center" class = "p-4" >
    <button type="button" wire:click="increment" class="btn btn-outline-primary">+</button>


    @foreach($counts as $count)
    <div class="flex justify-center py-2" wire:key="{{$count}}">
        <input type="text" name="count[]" class="py-1 px-2 border rounded" placeholder="{{'Add experince '.($count+1)}}" />

        <button type="button" wire:click="remove({{$count}})" class="btn btn-outline-secondary">-</button>

    </div>
    @endforeach
</div>