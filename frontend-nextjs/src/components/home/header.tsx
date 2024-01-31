import Image from "next/image";

export default function Header(){
    return (
        <>
            <header className="
            h-14
            max-w-full w-full
            ">
                <nav className="bg-white border-2 border-gray-200 ">
                    <div className="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                        <a href="/" className="flex items-center space-x-3 rtl:space-x-reverse">
                            <Image src="/logo.png" alt="Humfurie" width={40} height={40}/>
                            <span className="self-center text-2xl font-semibold whitespace-nowrap">Humfurie</span>
                        </a>
                        <section className="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                            <button data-collapse-toggle="navbar-sticky" type="button"
                                    className="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                                    aria-controls="navbar-sticky" aria-expanded="false">
                                <span className="sr-only">Open main menu</span>
                                <svg className="w-5 h-5">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                                </svg>
                            </button>
                        </section>
                        <section className="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                             id="navbar-sticky">
                            <ul className="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                                <li>
                                    <a href="#"
                                       className="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                                       aria-current="page">Home</a>
                                </li>
                                <li>
                                    <a href="#"
                                       className="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">About</a>
                                </li>
                                <li>
                                    <a href="#"
                                       className="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Services</a>
                                </li>
                                <li>
                                    <a href="#"
                                       className="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </nav>
            </header>
        </>
    )
}