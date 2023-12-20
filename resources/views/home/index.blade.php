@extends('home.homelayout.homebase')
@section('content')
    <div class="w-full mx-auto">
        <img src="{{ asset('home/adi.jpg') }}" class="w-full h-60 md:h-auto" />
    </div>
    <div class="mx-auto w-4/5 md:flex  gap-2 p-2 bg-white">
        <div class="md:w-1/4 md:flex w-full h-24 text-white">
            <div class="lg:ml-10 lg:mt-6">
                <svg class="lg:w-10 lg:h-10 w-6 h-6 mx-auto text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path
                        d="M19.9 6.58c0-.009 0-.019-.006-.027l-2-4A1 1 0 0 0 17 2h-4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.3c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0A3.173 3.173 0 0 0 7.7 12h4.6c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0 3.177 3.177 0 0 0-.049-.5h.3a1 1 0 0 0 1-1V7a.99.99 0 0 0-.1-.42ZM16.382 4l1 2H13V4h3.382ZM4.5 13.75a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Zm11 0a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Z" />
                </svg>
            </div>
            <div class="lg:mt-5 lg:ml-2 text-center">
                <h1 class="lg:mr-11 font-serif lg:text-[16px] text-lg text-black font-semibold">Fast Food Deliver</h1>
                <p class="font-serif lg:text-[16px] text-lg text-slate-600 font-semibold">Food Delivered On Time</p>
            </div>
        </div>
        <div class="md:w-1/4 md:flex w-full h-24 text-white">
            <div class="lg:ml-10 lg:mt-6">
                <svg class="lg:w-10 lg:h-10 mx-auto w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        <path
                            d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                    </g>
                </svg>
            </div>
            <div class="lg:mt-5 lg:ml-2 text-center">
                <h1 class="lg:mr-11 font-serif lg:text-[16px] text-lg text-black font-semibold">Live Order Track</h1>
                <p class="font-serif lg:text-[16px] text-lg text-slate-600 font-semibold">Food Delivered On Time</p>
            </div>
        </div>
        <div class="md:w-1/4 md:flex w-full h-24 text-white">
            <div class="lg:ml-10 lg:mt-6">
                <svg class="lg:w-10 lg:h-10 mx-auto w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 21">
                    <path
                        d="M20.817 9.085a10 10 0 0 0-19.77 2.9A10.108 10.108 0 0 0 6.762 20a9.689 9.689 0 0 0 4.2 1h.012a3.011 3.011 0 0 0 2.144-.884A2.968 2.968 0 0 0 14 18v-.86A1.041 1.041 0 0 1 15 16h2.7a2.976 2.976 0 0 0 2.838-2.024 9.93 9.93 0 0 0 .279-4.891ZM5.5 12a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm2.707-3.793a1 1 0 1 1-1.414-1.414 1 1 0 0 1 1.414 1.414Zm2.872-1.624a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm4.128 1.624a1 1 0 1 1-1.414-1.413 1 1 0 0 1 1.414 1.413Z" />
                </svg>
            </div>
            <div class="lg:mt-5 lg:ml-2 text-center">
                <h1 class="lg:mr-11 font-serif lg:text-[16px] text-lg text-black font-semibold">Best Food Quality</h1>
                <p class="font-serif lg:text-[16px] text-lg text-slate-600 font-semibold">Food Delivered On Time</p>
            </div>
        </div>
        <div class="md:w-1/4 md:flex w-full h-24 text-white">
            <div class="lg:ml-10 lg:mt-6">
                <svg class="w-10 h-10 mx-auto text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path
                        d="M19.9 6.58c0-.009 0-.019-.006-.027l-2-4A1 1 0 0 0 17 2h-4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.3c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0A3.173 3.173 0 0 0 7.7 12h4.6c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0 3.177 3.177 0 0 0-.049-.5h.3a1 1 0 0 0 1-1V7a.99.99 0 0 0-.1-.42ZM16.382 4l1 2H13V4h3.382ZM4.5 13.75a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Zm11 0a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Z" />
                </svg>
            </div>
            <div class="lg:mt-5 lg:ml-2 text-center">
                <h1 class="lg:mr-11 font-serif lg:text-[16px] text-lg text-black font-semibold">Fast Food Deliver</h1>
                <p class="font-serif lg:text-[16px] text-lg text-slate-600 font-semibold">Food Delivered On Time</p>
            </div>
        </div>

    </div>


    {{--  speacial offer --}}

    <div class="w-full bg-white mt-5">
        <h1 class="text-2xl font-extrabold font-serif text-black p-5 w-full text-center"><u>Weekly Deal</u></h1>
    </div>
    <div class="lg:w-4/5 container  mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 px-2 w-full bg-slate-100 mx-auto rounded-sm  shadow-sm">
            <div class="w-full flex mx-auto rounded-lg">
                <div class="lg:flex w-full border p-2 my-2 rounded-md">
                    <div class="h-auto  lg:w-[300px] p-3">
                        <img src="{{ asset('home/fish.jpg') }}" class="rounded-lg  lg:w-[200px] h-[210px] text-center" />
                    </div>
                    <div class="md:p-6 text-center md:text-start">
                        <h1 class="font-serif font-extrabold text-xl ml-2">Fish Spicy</h1>
                        <p class="text-red-500 ml-1">
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                        </p>
                        <p class="font-serif ml-2 text-sm">White Fish, Jalapeno peppers, tomato paste, red bell pepper</p>
                        <p class="lg:text-lg text-base ml-2 font-serif text-orange-600 font-extrabold">$ 110.00</p>
                        <span id="timer0" class="lg:mt-1 text-center justify-center"></span>
                    </div>
                </div>

            </div>
            <div class="w-full flex mx-auto rounded-lg">
                <div class="lg:flex w-full border p-2 my-2 rounded-md">
                    <div class="h-auto  lg:w-[300px] p-3">
                        <img src="{{ asset('home/fish.jpg') }}" class="rounded-lg  lg:w-[200px] h-[210px] text-center" />
                    </div>
                    <div class="md:p-6 text-center md:text-start">
                        <h1 class="font-serif font-extrabold text-xl ml-2">Fish Spicy</h1>
                        <p class="text-red-500 ml-1">
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                        </p>
                        <p class="font-serif ml-2 text-sm">White Fish, Jalapeno peppers, tomato paste, red bell pepper</p>
                        <p class="lg:text-lg text-base ml-2 font-serif text-orange-600 font-extrabold">$ 110.00</p>
                        <span id="timer1" class="lg:mt-1 text-center justify-center"></span>
                    </div>
                </div>

            </div>
            <div class="w-full flex mx-auto rounded-lg">
                <div class="lg:flex w-full border p-2 my-2 rounded-md">
                    <div class="h-auto  lg:w-[300px] p-3">
                        <img src="{{ asset('home/fish.jpg') }}" class="rounded-lg  lg:w-[200px] h-[210px] text-center" />
                    </div>
                    <div class="md:p-6 text-center md:text-start">
                        <h1 class="font-serif font-extrabold text-xl ml-2">Fish Spicy</h1>
                        <p class="text-red-500 ml-1">
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                            <span class="text-orange-500 lg:text-2xl text-xl">&starf;</span>
                        </p>
                        <p class="font-serif ml-2 text-sm">White Fish, Jalapeno peppers, tomato paste, red bell pepper</p>
                        <p class="lg:text-lg text-base ml-2 font-serif text-orange-600 font-extrabold">$ 110.00</p>
                        <span id="timer2" class="lg:mt-1 text-center justify-center"></span>
                    </div>
                </div>

            </div>





        </div>

    </div>

    {{-- buy speacial food  --}}

    

    @foreach ($categories as $cat)
        
        <div class="w-full bg-stone-800 mt-2">
            <h1 class="text-2xl font-extrabold font-serif text-white p-5 w-full ">{{$cat->category_name}}</h1>
        </div>

        <div class="flex flex-col bg-white m-auto p-auto mt-1">
            <div class="flex overflow-x-scroll pb-10 hide-scroll-bar ">
                <div class="flex flex-nowrap scroll-auto scrolling-container">
                    @foreach ($cat->products as $item)
                    <div class="inline-block px-3">
                        <div
                            class="lg:w-64 w-60 h-[350px] lg:h-[340px] max-w-xs overflow-hidden rounded-lg bg-black shadow-2xl hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <div class="h-auto w-ful">
                                <img src="{{asset("storage/".$item->image)}}" alt=""
                                    class="w-full h-[200px] object-cover" />
                            </div>
                            <div class="h-20 w-full p-3">
                                <h1 class="text-xl font-serif text-center text-green-900 font-bold">{{$item->product_name}}</h1>
                                <p class="text-white font-serif font-medium text-base text-center">{{$item->description}}</p>
                                <div class="flex gap-3 md:mt-3">
                                    <div class="text-white">
                                        <p class="font-serif mt-2 text-xl text-green-700 font-bold">{{$item->price}}/- &nbsp; &nbsp; <del
                                                class="font-serif text-red-900 font-bold">{{$item->discount_price}}</del></p>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="bg-green-700 text-white font-normal font-serif py-1 px-1 rounded">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    @endforeach


    
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const countdownDate = new Date();
            countdownDate.setDate(countdownDate.getDate() + 2);
            countdownDate.setHours(countdownDate.getHours() + 5);
            countdownDate.setMinutes(countdownDate.getMinutes() + 10);
            countdownDate.setSeconds(countdownDate.getSeconds() + 20);

            function updateTimer(i) {
                const now = new Date();
                const timeDifference = countdownDate - now;

                const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                document.getElementById(i).innerHTML = `
            <div class="flex w-full md:mt-2 justify-center md:justify-start gap-1">
                <div class="bg-orange-600 text-white px-1 rounded-lg">
                    <p class="lg:text-[12px] text-center text-sm">Days</p>
                    <p class="text-center lg:text-[12px] text-sm">${days}</p>
                </div>
                <div class="bg-orange-600 text-white px-1 rounded-lg">
                    <p class="lg:text-[12px] text-center text-sm">Hours</p>
                    <p class="text-center lg:text-[12px] text-sm">${hours}</p>
                </div>
                <div class="bg-orange-600 text-white px-1 rounded-lg">
                    <p class="lg:text-[12px] text-center text-sm">Mins</p>
                    <p class="text-center lg:text-[12px] text-sm">${minutes}</p>
                </div>
                <div class="bg-orange-600 text-white px-1 rounded-lg">
                    <p class="lg:text-[12px] text-center text-sm">Secs</p>
                    <p class="text-center lg:text-[12px] text-sm">${seconds}</p>
                </div>
                
                
            </div>`;

                if (timeDifference <= 0) {
                    clearInterval(timerInterval);
                    document.getElementById('timer').innerHTML = 'Timer expired!';
                }
            }


            for (let i = 0; i < 3; i++) {
                // Generate the correct timer ID
                const timerId = "timer" + i;
                // Call updateTimer for each timer
                updateTimer(timerId);

            }

            // Initial call to set the timer
            const timerInterval = setInterval(function() {
                for (let i = 0; i < 3; i++) {
                    const timerId = "timer" + i;
                    updateTimer(timerId);
                }
            }, 1000);
            // Update the timer every second
        });
    </script>
@endsection
