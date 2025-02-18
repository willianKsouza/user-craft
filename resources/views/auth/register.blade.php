@extends('layouts.main')

@section('title', 'Registro')

@section('content')
    <div class="flex items-center justify-center ">
        <div class=" p-8 rounded-lg  w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>
            <form x-data="register" @submit.prevent="createUser">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>


                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    @endif
                </div>


                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">password</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>


                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">address</label>
                    <input type="text" id="address" name="address" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>



                <div class="mb-6">
                    <label for="phone" class="block text-sm font-medium text-gray-700">phone</label>
                    <input type="tel" id="phone" name="phone" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>


                <div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Register
                    </button>
                </div>
            </form>
        </div>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('register', () => ({
                    createUser(event) {
                        const formData = new FormData(event.target);
                        const data = {};
                        let token = '';
                        formData.forEach((value, key) => {
                            if (key === '_token') {
                                token = value;
                            } else {
                                data[key] = value;
                            }
                        });
                        fetch('/auth', {
                                method: 'POST',
                                redirect: 'follow',
                                headers: {
                                    'Content-type': 'application/json',
                                    'X-CSRF-TOKEN': token
                                },
                                body: JSON.stringify(data)
                            }).then(res => {
                                console.log(res);
                                if (res.redirect) {
                                    window.location.href = res.url

                                }
                            })
                            .catch(error => {
                                console.log(error);

                                if (error.errors) {

                                    this.errorMessage = Object.values(error.errors).join(', ');
                                } else {
                                    this.errorMessage = 'Erro na requisição. Tente novamente.';
                                }
                            });


                    }
                }))
            })
        </script>
    </div>
@endsection
