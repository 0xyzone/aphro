<nav class="bottom-10 bg-white shadow-lg fixed max-w-md z-[999] text-center rounded-full px-4">
    <div class="container mx-auto justify-between flex p-2 items-center h-full">
        {{-- Logo start --}}
        <a href="/">
            <img src="{{ asset('img/aphrodite-logo.png') }}" alt="logo" class="w-20 aspect-auto">
        </a>
        {{-- Logo end --}}
        {{-- menu items start --}}
        <div class="flex gap-4 text-xl font-bold">
            <a href="#hero" class="nav-btn"><i class="fa-duotone fa-calculator-simple"></i><span class="text-xs flex-shrink-0 w-max">BMI Calc</span></a>
            <a href="#about" class="nav-btn"><i class="fa-duotone fa-id-card-clip"></i><span class="text-xs flex-shrink-0 w-max">About Us</span></a>
            <a href="#contact" class="nav-btn"><i class="fa-duotone fa-at"></i><span class="text-xs flex-shrink-0 w-max">Contact</span></a>
        </div>
        {{-- menu items end --}}
    </div>

</nav>
