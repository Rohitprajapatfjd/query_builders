<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Form</title>
</head>

<body> 
    <div class=" bg-gray-800 bg-opacity-90 w-full h-screen ">
       
        <h1 class="text-center py-7 text-3xl text-white/70 font-bold">Add User Form</h1>

        <form action={{route('adduser')}} method="POST" class=" max-w-sm sm:max-w-md pt-3 mx-auto">
              @csrf
            <div class="relative z-0 w-2/3 mx-auto sm:mx-0 sm:w-full mb-5 group">
                <input type="text" name="fullname" id="fullname"
                    class="block py-2.5 @error('fullname') 'bg-red-50 border border-red-500  placeholder-red-700  rounded-lg focus:ring-red-500'     @enderror px-0 w-full text-sm  bg-transparent border-0  border-b-2 appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0  peer"
                    placeholder=" " value="{{ old('fullname')}}" />
                   
                <label for="fullname"
                    class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4  peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Full Name</label>
                   @error('fullname')
                   <span class="p-4 mb-4 text-sm rounded-lg text-red-400" role="alert">  {{$message}}</span>                       
                   @enderror
                  
            </div>
            <div class="relative z-0  w-2/3 mx-auto sm:mx-0 sm:w-full mb-5 group">
                <input type="email" name="email" id="floating_email"
                    class="@error('email') 'bg-red-50 border border-red-500  placeholder-red-700 rounded-lg focus:ring-red-500'     @enderror   block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer"
                    placeholder=" " value="{{ old('email')}}" />
                <label for="floating_email"
                    class="peer-focus:font-medium absolute text-sm  text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                    address</label>
                    @error('email')
                    <span class="p-4 mb-4 text-sm rounded-lg text-red-400" role="alert">  {{$message}}</span>                       
                    @enderror
            </div>
            
            <div class="relative z-0  w-2/3 mx-auto sm:mx-0 sm:w-full mb-5 group">
                <input type="text" name="mobile_no" id="mobile_no"
                    class=" @error('mobile_no') 'bg-red-50 border border-red-500  placeholder-red-700  rounded-lg focus:ring-red-500'  @enderror block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer"
                    placeholder=" "  value="{{ old('mobile_no')}}" />
                <label for="mobile_no"
                    class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4  peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone No</label>
                    @error('mobile_no')
                    <span class="p-4 mb-4 text-sm rounded-lg text-red-400" role="alert">  {{$message}}</span>                       
                    @enderror
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-2/3 mx-auto sm:mx-0 sm:w-full mb-5 group">
                    <input type="text" name="age" id="age"
                        class="@error('age') 'bg-red-50 border border-red-500  placeholder-red-700 rounded-lg focus:ring-red-500'     @enderror block py-2.5 px-0 w-full text-sm  bg-transparent border-0 border-b-2  appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0  peer"
                        placeholder=" "  value="{{ old('age')}}"  />
                    <label for="age"
                        class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4  peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age
                        </label>
                        @error('age')
                        <span class="p-4 mb-4 text-sm rounded-lg text-red-400" role="alert">  {{$message}}</span>                       
                        @enderror
                </div>
                <div class="relative z-0  w-2/3 mx-auto sm:mx-0 sm:w-full mb-5 group">
                    <input type="text" name="city" id="city"
                        class="block py-2.5 px-0  w-2/3 mx-auto sm:mx-0 sm:w-full text-sm text-gray-400 bg-transparent border-0 border-b-2 appearance-none border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer @error('age') 'bg-red-50 border border-red-500  placeholder-red-700 rounded-lg focus:ring-red-500'     @enderror"
                        placeholder=" "  value="{{ old('city')}}"  />
                    <label for="city"
                        class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4  peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">City
                        </label>
                        @error('city')
                        <span class="p-4 mb-4 text-sm rounded-lg text-red-400" role="alert">  {{$message}}</span>                       
                        @enderror
                </div>
            </div>
            
            <div class="text-center">
                <button type="submit"
                class="text-white   focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-1/4 sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Submit</button>
            </div>
            
        </form>

    </div>
</body>

</html>
