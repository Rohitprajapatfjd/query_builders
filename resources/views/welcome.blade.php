<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Data Shows</title>
</head>

<body>
    <div class="bg-gray-800 bg-opacity-90 w-full h-screen text-white/60">
        <div class="flex justify-center flex-col items-center">
            <h1 class="text-3xl font-bold py-1 mt-1 px-2 text-center ">Laravel Form Handling and Crud Operation</h1>
            <h5 class="text-2xl font-semibold py-1">With Query Builder Method</h5>
            <div class="text-center my-4">
                <a href={{ route('form') }}
                    class="px-2 py-[7px] rounded-sm hover:text-white/40 text-base text-white font-medium shadow-slate-300 shadow-sm bg-gradient-to-l from-amber-400 to-red-500 transition-all">Add
                    Data</a>
            </div>

            <div class="mx-2 w-11/12 sm:w-9/12 my-3">


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-400">
                        <thead class="text-xs  uppercase bg-gray-700 text-gray-400">
                            <tr>
                                <th scope="col" class="px-5 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-5 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-5 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-5 py-3">
                                    Phone No
                                </th>
                                <th scope="col" class="px-5 py-3">
                                    Age
                                </th>
                                <th scope="col" class="px-5 py-3">
                                    City
                                </th>
                                <th scope="col" class="px-5 py-3">
                                    <span class="text-center text-gray-400">Edit</span>
                                </th>
                                <th scope="col" class="px-5 py-3">
                                    <span class="text-center text-gray-400">Delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($data as $val)
                                @php
                                    $sno = 1;
                                 
                                @endphp
                                <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                                    <th scope="row" class="px-5 py-4 font-medium whitespace-nowrap text-white">
                                        {{ $val->id }}
                                    </th>
                                    <td class="px-5 py-4">
                                        {{ $val->fullname }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ $val->email }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ $val->phoneno }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ $val->age }}
                                    </td>
                                    <td class="px-5 py-4">
                                        {{ $val->city }}
                                    </td>
                                    <td class="px-5 py-4 ">
                                        <a href={{ route('updateUser', $val->id) }}
                                            class="font-medium text-blue-500 hover:underline">Edit</a>
                                    </td>
                                    <td class="px-5 py-4 ">
                                        <a href={{ route('delete', $val->id) }}
                                            class="font-medium text-red-500 hover:underline">Delete</a>
                                    </td>
                                </tr> 
                              

                            @empty
                                <h1>No data Found</h1>
                            @endforelse



                        </tbody>
                    </table>
                </div>
                <div class=" mx-5 mt-3 text-center">
                   
                    {{ $data->links() }}


                </div>


            </div>
        </div>
    </div>
</body>

</html>
