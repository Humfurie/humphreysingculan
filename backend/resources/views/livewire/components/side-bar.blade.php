<aside
    class="fixed bg-white overflow-hidden shadow-xl min-h-[95%] p-4 sm:rounded-lg max-w-96 hidden lg:block lg:w-1/3 xl:w-1/3">
    <!-- Sidebar content goes here -->
    <section>
        <ul class="py-1">
            <li class="py-1">
                <a href="#"
                   class="align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6
                   rounded-lg shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none
                   active:opacity-[0.85] active:shadow-none flex items-center gap-3 hover:bg-orange-200
                   {{url()->current() === 'about_me' ? 'bg-orange-500 text-white' : ''}}">
                    <img src="{{asset('/logo.png')}}" alt="Humphrey" width="50" height="50">
                </a>
            </li>
            <li class="py-1">
                <a href="{{ route('dashboard') }}"
                   class="align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6
                   rounded-lg shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none
                   active:opacity-[0.85] active:shadow-none flex items-center gap-3 hover:bg-orange-200
                   {{url()->current() === route('dashboard') ? 'bg-orange-500 text-white' : ''}}">
                    @svg('eos-role-binding-o', ['height' => '20px', 'width' => '20px'])
                    {{ __('Dashboard') }}
                </a>
            </li>
            <li class="py-1">
                <a href="{{route('menu.index')}}"
                   class="align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6
                   rounded-lg shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none
                   active:opacity-[0.85] active:shadow-none flex items-center gap-3 hover:bg-orange-200
                   {{url()->current() === route('menu.index') ? 'bg-cyan-900 text-white' : ''}}">
                    @svg('eos-role-binding-o', ['height' => '20px', 'width' => '20px'])
                    Menu
                </a>
            </li>
        </ul>
    </section>
    @foreach($menus as $menu)
        <section class="py-1">
            <h2>{{$menu->name}}</h2>
            <ul>
                @foreach($menu->subMenus as $subMenu)
                    <li class="py-1">
                        <a href="{{ url('/'). "/" . $subMenu->slug }}"
                           class="align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6
                           rounded-lg shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none
                           active:opacity-[0.85] active:shadow-none flex items-center gap-3 hover:bg-orange-200
                           {{url()->current() === url('/'). "/" . $subMenu->slug ? 'bg-orange-500' : ''}}">
                            @svg("$subMenu->icon", ['height' => '20px', 'width' => '20px'])
                            {{$subMenu->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endforeach
    <section class="py-1">
        <h2>User</h2>
        <ul>
            <li class="py-1">
                <a href="{{  route('profile.show') }}"
                   class="align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6
                   rounded-lg shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none
                   active:opacity-[0.85] active:shadow-none flex items-center gap-3 hover:bg-orange-200
                   {{url()->current() ===  route('profile.show') ? 'bg-orange-500 text-white' : ''}}">
                    @svg('eos-role-binding-o', ['height' => '20px', 'width' => '20px'])
                    {{ __('Profile') }}
                </a>
            </li>
            <li class="py-1">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-dropdown-link href="{{ route('logout') }}"
                                     @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
    </section>
</aside>
