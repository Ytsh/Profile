<div style="text-align: center" class = "p-4" >
    <button type="button" wire:click="increment" class="btn btn-outline-primary">+</button>


    @foreach($counts as $count)
    <div class="flex justify-center py-2" wire:key="{{$loop->index}}">
        <input type="text" name="experience[]" class="py-1 px-2 border rounded" placeholder="{{'Add experince '.($loop->index+1)}}" @if(is_array($count)) value = "{{$count['experience']}}" @endif/>
        <input type="hidden" name="experienceId[]" @if(is_array($count)) value="{{$count['id']}}" @endif/>
        <button type="button" wire:click="remove({{$loop->index}})" class="btn btn-outline-secondary">-</button>

    </div>
    @endforeach
</div>