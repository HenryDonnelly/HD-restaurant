<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All foods') }}
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
        <h1>view food</h1>
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td><strong> Name </strong> </td>
                    <td>{{ $food->name }}</td>
                </tr>

                <tr>
                    <td><strong> category </strong> </td>
                    <td>{{ $food->category }}</td>
                </tr>

                <tr>
                    <td><strong> description </strong> </td>
                    <td>{{ $food->description }}</td>
                </tr>

                <tr>
                    <td><strong> price </strong> </td>
                    <td>{{ $food->price }}</td>
                </tr>

                <tr>
                    <td><strong> Best before </strong> </td>
                    <td>{{ $food->best_before }}</td>
                </tr>

                <tr>
                    <td><strong> picture </strong> </td>
                    <td><img src="{{ asset($food->picture) }}" class="img-fluid" alt="food Image"></td>
                </tr>



            </tbody>
        </table>

        </form>
    </div>

    </div>
</x-app-layout>
