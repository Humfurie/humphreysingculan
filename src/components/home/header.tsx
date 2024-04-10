import Image from "next/image";
import {NavDropdown} from "@/components/home/mobile/nav-dropdown";
import {MotionLi} from "@/components/home/lib/motion-li";

const links = [
    {id: 1, url: "/", title: "Home"},
    {id: 2, url: "/about", title: "About"},
    {id: 3, url: "/contact", title: "Contact"}
]
export default function Header() {
    return (
        <>
            <header className="absolute top-0 left-0 w-full z-10">
                <nav className="border-r-0 bg-black bg-opacity-20">
                    <div className="w-full flex flex-wrap mx-auto p-4 md:justify-center lg:justify-start">

                        {/*Start of mobile section*/}
                        <section className="flex justify-between sm:hidden w-full">
                            <a href="/" className="flex items-center space-x-3 rtl:space-x-reverse">
                                <Image src="/logo.png" alt="Humfurie" width={40} height={40}/>
                            </a>
                            <NavDropdown/>
                        </section>
                        {/*End of mobile section*/}

                        <section className="hidden w-full md:flex md:w-auto md:order-1 lg:mx-20"
                                 id="navbar-sticky">
                            <ul className="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                                {links.map((link: { id: number, url: string, title: string }) => (
                                    <MotionLi key={link.id} link={link}/>
                                ))}
                            </ul>
                        </section>
                    </div>
                </nav>
            </header>
        </>
    )
}