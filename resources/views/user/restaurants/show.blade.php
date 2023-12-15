<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All restaurants') }}
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
        <h1>view restaurant</h1>
        <table class="table table-hover">
            <tbody>

                <tr>
                    <td><strong> Name </strong> </td>
                    <td>{{ $restaurant->name }}</td>
                </tr>

                <tr>
                    <td><strong> category </strong> </td>
                    <td>{{ $restaurant->category }}</td>
                </tr>

                <tr>
                    <td><strong> description </strong> </td>
                    <td>{{ $restaurant->description }}</td>
                </tr>

                <tr>
                    <td><strong> price </strong> </td>
                    <td>{{ $restaurant->price }}</td>
                </tr>

                <tr>
                    <td><strong> Best before </strong> </td>
                    <td>{{ $restaurant->best_before }}</td>
                </tr>
                <tr>
                    <td>
                <h3 class="font-bold text-1xl"><strong>Supplier name</strong>
                </td>
                    <td>
                    {{ $restaurant->supplier->name }} </h3>
                </td>
                </tr>
                <tr>
                    <td><strong> picture </strong> </td>
                    <td><img src="{{ asset($restaurant->picture) }}" class="img-fluid" alt="restaurant Image"></td>
                </tr>




            </tbody>
        </table>

        </form>
    </div>

    </div>
</x-app-layout>
