<div style="text-align: center" class = "p-4" >
    <button type="button" wire:click="increment" class="btn btn-outline-primary">+</button>


    @foreach($counts as $count)
    <div class="flex justify-center py-2" wire:key="{{$count}}">
        <input type="text" name="equivalent[]" class="py-1 px-2 border rounded" placeholder="{{'Add equivalent '.($count+1)}}" />
        <input type="text" name="grade[]" class="py-1 px-2 border rounded" placeholder="{{'Add grade '.($count+1)}}" />
        <input type="text" name="university[]" class="py-1 px-2 border rounded" placeholder="{{'Add university '.($count+1)}}" />
        <input type="text" name="p_year[]" class="py-1 px-2 border rounded" placeholder="{{'Add passed year '.($count+1)}}" />

        <button type="button" wire:click="remove({{$count}})" class="btn btn-outline-secondary">-</button>

    </div>
    @endforeach
</div>