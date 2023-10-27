
@yield('Nav')
<div class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0">
    <div class="bg-[#FFFFFF]   flex flex-col  items-center  px-8 py-4">

            <span class=" font-bold text-xl">salahEddine-Dev</span>
            <div  class="pt-8 flex flex-col gap-4 items-center ">
                <button class="hover:bg-[#F3F4FD] px-12 rounded-r-full py-2"><a href="/home" class="font-semibold " >Home</a></button>
                <button class="hover:bg-[#F3F4FD] px-12 rounded-r-full py-2"><a href="/techStack" class="font-semibold " >Tech Stack</a></button>
                <button class="hover:bg-[#F3F4FD] px-12 rounded-r-full py-2"><a href="/aboutMe" class="font-semibold " >About Me</a></button>

                <button class="hover:bg-[#F3F4FD] px-12 rounded-r-full py-2"><a href="/project" class="font-semibold " >Project</a></button>
            </div>
            <div class=" absolute bottom-4">
                <button class="bg-[#D62828] text-white px-10 rounded-full py-1"><a href="/logOut" class="font-semibold " >Log Out</a></button>
            </div>

        
    </div>
</div>