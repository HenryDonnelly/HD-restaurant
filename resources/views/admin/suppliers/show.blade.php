<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All suppliers') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>
        </div>
    </div>
    <div class="container">
        <h1>view supplier</h1>
        <table class="table table-hover">
            <tbody>

                <tr>
                    <td><strong> Name </strong> </td>
                    <td>{{ $supplier->name }}</td>
                </tr>

                <tr>
                    <td><strong> address </strong> </td>
                    <td>{{ $supplier->address }}</td>
                </tr>

                    <td><strong> phone_no </strong> </td>
                    <td>{{ $supplier->phone_no }}</td>
                </tr>



            </tbody>
        </table>
      <x-primary-button>  <a href="{{ route('admin.suppliers.edit', $supplier) }}">Edit</a></x-primary-button>
        <form action="{{ route('admin.suppliers.destroy', $supplier) }}" method="post">
            @method('delete')
            @csrf
            <x-primary-button onclick="return confirm('are you sure you want to delete?')">Delete</x-primary-button>
        </form>
    </div>

    </div>
</x-app-layout>
