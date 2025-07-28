<x-layout>

    <div class="relative bg-gray-300 mb-64">

        <!-- Overlay Content -->
        <div class="relative max-w-5xl mx-auto mt-32">
            <div class="text-4xl md:text-5xl font-extrabold text-red-700 leading-tight uppercase ml-72">
                <h1 class="-ml-2">Lorasco Rigs Fleet</h1>

            </div>
            <div class="mt-6 ml-32">
                <div class="text-red-700" >
                    <p class="ml-68">LORASCO RIG TYPES 15, 25 AND 45</p>
                    <p class="ml-24">Type 15 and 45 are high capacity Triple rigs, while our Type 25 is a Heavy Tele Double rig.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="px-12 ml-4">

        <div class="relative overflow-hidden w-full  bg-gray-100 px-6 py-15 text-center rounded-2xl mb-12">
            <div id="slide-container" class="relative w-full min-h-[500px]">
            <!-- Slide 1 -->


                <div id="slide1" class="absolute inset-0 transition-transform duration-700 ease-in-out translate-x-0 z-20">

                <h2 class="px-4 md:px-44 font-bold text-black mb-6">
                        LORASCO RIG SERVICES </h2>

                    <div class="space-y-6">

                        <p class="px-4 md:px-44 text-black text-left">
                            LORASCO JSC JV fully owns and operates over 3 on shore Rigs with a variety of drilling, work-over units. Our ambition is to provide first class drilling service to our clients and in order to accomplish this we provides trained and most competent people to do the job effectively and efficiently. Safety is core in LORASCO daily operations, our company applies comprehensive Safety Management Systems in order to assist our employees in running an incident free operation. We continuously work on maintaining our assets through our follow-up using our developed preventative maintenance system (PMS) to mitigate posible risk involved during operations.                    </p>

                        <p class="px-4 md:px-44 text-black text-left" >Our main objective is to expand in the Libyan drilling market while providing standard services to our clients.</p>

                    </div>

                </div>


            <!-- Slide 2 -->
                <div id="slide2" class="absolute inset-0 transition-transform duration-700 ease-in-out translate-x-full opacity-0 z-10 pointer-events-none">


                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <!-- SERVICES Section -->
                    <div class="space-y-4">
                        <h2 class="text-2xl font-bold uppercase">SERVICES</h2>
                        <p class="text-black leading-relaxed">
                            Serving the resurgent Libyan oil sector with an outstanding local management team which is strategically supported by international finances and professional expertise.
                        </p>
                    </div>

                    <!-- CONTACT Section -->
                    <div class="space-y-4">
                        <h2 class="text-2xl font-bold uppercase">CONTACT</h2>
                        <div class="text-black space-y-2">
                            <p><strong class="text-black">E-mail:</strong> info@lorasco.com</p>
                            <div>
                                <p class="font-bold text-black">Tripoli Office:</p>
                                <p>Post Office Street</p>
                                <p>Hai Alandalus District</p>
                                <p>Tripoli, Libya</p>
                            </div>
                        </div>
                    </div>
            </div>

                </div>
            </div>


            </div>

            <div class="flex justify-center items-center gap-2 mt-20 -mb-24">
                <svg id="prevArrow"
                     xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="2"
                     stroke="rgb(209, 213, 219)"
                     class="w-6 h-6">

                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19L8 12l7-7" />
                </svg>
                <span id="dot1" class="w-3 h-3 rounded-full bg-red-700 transition-colors duration-300"></span>
                <span id="dot2" class="w-3 h-3 rounded-full bg-gray-300 transition-colors duration-300"></span>
                <button id="nextBtn">
                    <svg id="nextArrow"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke-width="2"
                         stroke="rgb(209, 213, 219)"
                         class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

        </div>



    <script>
        const slide1 = document.getElementById('slide1');
        const slide2 = document.getElementById('slide2');
        const dot1 = document.getElementById('dot1');
        const dot2 = document.getElementById('dot2');
        const nextArrow = document.getElementById('nextArrow');
        const prevArrow = document.getElementById('prevArrow');

        let showingFirst = true;

        function updateSlides() {
            if (showingFirst) {
                // Show slide1
                slide1.classList.add('translate-x-0', 'opacity-100', 'pointer-events-auto');
                slide1.classList.remove('translate-x-full', 'opacity-0', 'pointer-events-none');

                // Hide slide2
                slide2.classList.add('translate-x-full', 'opacity-0', 'pointer-events-none');
                slide2.classList.remove('translate-x-0', 'opacity-100', 'pointer-events-auto');
            } else {
                // Show slide2
                slide2.classList.add('translate-x-0', 'opacity-100', 'pointer-events-auto');
                slide2.classList.remove('translate-x-full', 'opacity-0', 'pointer-events-none');

                // Hide slide1
                slide1.classList.add('translate-x-full', 'opacity-0', 'pointer-events-none');
                slide1.classList.remove('translate-x-0', 'opacity-100', 'pointer-events-auto');
            }
        }

        function updateIndicators() {
            dot1.classList.toggle('bg-red-700', showingFirst);
            dot1.classList.toggle('bg-gray-300', !showingFirst);
            dot2.classList.toggle('bg-red-700', !showingFirst);
            dot2.classList.toggle('bg-gray-300', showingFirst);
        }

        function toggleSlides() {
            showingFirst = !showingFirst;
            updateSlides();
            updateIndicators();
        }

        nextArrow.addEventListener('click', toggleSlides);
        prevArrow.addEventListener('click', toggleSlides);

        setInterval(toggleSlides, 10000); // Auto slide every 10 seconds
    </script>


</x-layout>
