<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="h-screen">
        <div class="container h-full px-6 py-24">
            <div class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
                <div class="mb-12 md:mb-0 md:w-8/12 lg:w-6/12">
                    <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="w-full" alt="Phone image" />
                </div>
                <div class="md:w-8/12 lg:ml-6 lg:w-5/12">
                    <div class="w-full px-2 py-2 bg-teal-700 text-center text-white rounded-lg">Admin Login</div>
                    <form method="post" action="" class="mt-5">
                        @csrf
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <label for="exampleFormControlInput3"
                                class=" left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Email
                                address
                            </label>
                            <input type="email" name="email" value="{{old('email')}}"
                                class="peer block min-h-[auto] w-full rounded-lg border  px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleFormControlInput3" placeholder="Email address" />
                            
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <label for="exampleFormControlInput33"
                                class=" left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Password
                            </label>
                            <input type="password" name="password" value="{{old('password')}}"
                                class="peer block min-h-[auto] w-full rounded-lg border px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleFormControlInput33" placeholder="Password" />
                            
                        </div>
                        <div class="mb-6 flex items-center justify-between">
                            <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                <input
                                    class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] "
                                    type="checkbox" value="" id="exampleCheck3" checked />
                                <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="exampleCheck3">
                                    Remember me
                                </label>
                            </div>

                            
                            <a href="#!"
                                class="transition duration-150 ease-in-out text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600">Forgot
                                password?
                            </a>
                        </div>

                        <!-- Submit button -->
                        <input type="submit" class="w-full h-auto px-2 py-2 bg-green-500 rounded-lg" value="Submit"/>

                        

                        
                    </form>
                    @if(session('msg'))
                        <div class="w-full bg-red-500 px-2 py-2 rounded-lg">{{session('msg')}}</div>
                    @endif    
                </div>
            </div>
        </div>
    </section>
</body>

</html>
