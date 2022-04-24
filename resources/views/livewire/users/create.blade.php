<form>
   <div calss="form-groupe">
       <label for="exampleFormContreolInput1">name</label>
       <input type="text" class="form-control" id="exampleFormContreolInput1" placeholder="Enter name"
           wire:model="name">
       @error('name')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>
   <div calss="form-groupe mb-2">
       <label for="exampleFormContreolInput2">Email</label>
       <input type="text" class="form-control" id="exampleFormContreolInput2" placeholder="Enter email"
           wire:model="email">
       @error('email')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>
   <button wire:click.prevent="store()" class=" btn btn-success">Save</button>
   <button wire:click.prevent="cancel()" class=" btn btn-success">Cancel</button>
</form>