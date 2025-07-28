<x-layout>
    <div class="relative bg-gray-300 mb-72">

        <!-- Overlay Content -->
        <div class="relative max-w-5xl mx-auto mt-32">
            <h1 class="text-4xl md:text-5xl font-extrabold text-red-700 leading-tight uppercase">
                Taking Libya’s Oilfield<br>
                Services to the Next Level
            </h1>
            <div class="mt-6">
                <a href="#"
                   class="inline-block bg-red-700 text-white hover:bg-red-800 transition px-6 py-3 font-semibold rounded-md uppercase tracking-wider">
                    A Baker Hughes Channel Partner
                </a>
            </div>
        </div>
    </div>


    <div class="relative overflow-hidden w-full  bg-gray-100 px-6 py-36 text-center rounded-2xl mb-12 ">
        <div id="slide-container" class="relative h-full w-full ">
            <!-- Slide 1 -->
            <div id="slide1" class="absolute inset-0 -mt-24 transition-transform duration-700 ease-in-out translate-x-0 z-20">
            <h2 class="px-4 md:px-44 font-bold text-black mb-6">
                    Lorasco is a privately held oil services business focused on Libya. We’re proud to serve the resurgent Libyan oil sector with an outstanding local management
                    team which is strategically supported by international financiers and professional expertise.
                </h2>
                <p class="px-4 md:px-44 text-black mb-6">
                    Lorasco successfully commenced drilling services in 2019. Effective August 20, 2020, Lorasco and Baker Hughes signed strategic,
                    technical and base support agreements to cover all Libya’s onshore activities on an exclusive basis. These ensure that Lorasco is capable and
                    committed to deliver world-class services, and further assures the continuity of service provision for all our customers in Libya.
                </p>
                <p class="px-4 md:px-44 text-black">
                    The company's headquarters are located in Tripoli, Libya, and it is led by CEO Ramadan Mansour, who brings over 24 years of upstream oilfield services management experience.
                </p>
            </div>

            <!-- Slide 2 -->
            <div id="slide2" class="absolute inset-0 -mt-24 transition-transform duration-700 ease-in-out translate-x-full opacity-0 z-10 pointer-events-none">
            <h2 class="px-4 md:px-44 font-bold text-black mb-6">
                    Lorasco's service offerings include:
                </h2>
                <p class="px-4 md:px-44 text-black text-left">
                    RIG FLEET

                    High capacity triple, triple pumps 1300 HP Rig 15 (800 HP):
                    Ultra-reach heavy tele double, triple pumps 1000 HP Rig 25 (1700 HP):
                    Ultra-high capacity triple, SCR, top-drive, triple pumps 1600 HP. Rig 45 (1700 HP):
                </p>
            </div>

            <div class="flex justify-center items-center gap-2 mt-20 -mb-16">
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
                slide1.classList.remove('hidden');
                slide2.classList.add('hidden');
            } else {
                slide1.classList.add('hidden');
                slide2.classList.remove('hidden');
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
        setInterval(toggleSlides, 10000);
    </script>







    <div class="container mx-auto max-w-6xl bg-gray-100 px-10 py-8 text-center border-full rounded-2xl mb-6">
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

                <!-- MENU Section -->
                <div class="space-y-4">
                    <h2 class="text-2xl font-bold uppercase">MENU</h2>
                    <ul class="text-black space-y-2">
                        <li><a href="/drilling-rigs" class="hover:text-red-700 transition">Drilling Rigs</a></li>
                        <li><a href="/wireline" class="hover:text-red-700 transition">Wireline</a></li>
                        <li><a href="/pressure-pumping" class="hover:text-red-700 transition">Pressure Pumping</a></li>
                        <li><a href="#" class="hover:text-red-700 transition">Our Team</a></li>
                        <li><a href="/contact" class="hover:text-red-700 transition">Contact Us</a></li>
                    </ul>
                </div>
            </div>

        </div>

            <footer>

            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-12 pt-6 text-center py-6 px-6 text-gray-300 bg-gray-400">
                <p>© 2025 Lorasco. All Rights Reserved.</p>
            </div>

    </footer>


</x-layout>
