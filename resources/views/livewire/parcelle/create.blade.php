<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Parcelle lieu</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title"
            wire:model="emp_lieu">
        @error('emp_lieu')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Parcelle nom </label>
        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="par_nom">
        @error('par_nom')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Parcelle superficie</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="par_superficie">
        @error('par_superficie')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Parcelle prop</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="par_prop">
        @error('par_prop')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
