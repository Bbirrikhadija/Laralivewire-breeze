{{-- @include('layouts.navigation') --}}
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tarifs') }}
        </h2>
    </x-slot>
    {{-- The whole world belongs to you. --}}
    @if ($UpdateMode == 2)
        @include('livewire.users.create')
    @elseif(!$UpdateMode)
        @include('livewire.users.update')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                @if (Auth::user()->role == 'editor' || Auth::user()->role == 'admin')
                <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{$value->role}}</td>

                    <td>
                        <button wire:click="edit({{ $value->id }})" class="btn btn-primary">Edit</button>
                        <button wire:click="delete({{ $value->id }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#sampleTable').DataTable({
                responsive: true,
            });
        });
    </script>
</div>