"use client"
import {motion, useCycle} from "framer-motion"

export const NavDropdown = () => {
    const [mobileNav, toggleMobileNav] = useCycle(false, true)
    return (
        <nav className="flex items-center">
            <div className="relative z-10">
                <motion.button
                    animate={mobileNav ? "open" : "close"}
                    onClick={() => toggleMobileNav()}
                    className="flex flex-col space-y-1">
                    <motion.span variants={{
                        closed: {rotate: 0, y: 0},
                        open: {rotate: 45, y: 5}
                    }} className="w-5 h-px bg-white block"></motion.span>
                    <motion.span variants={{
                        closed: {opacity: 1},
                        open: {opacity: 0, }
                    }} className="w-5 h-px bg-white block"></motion.span>
                    <motion.span variants={{
                        closed: {rotate: 0, y: 0},
                        open: {rotate: -45, y: -5}
                    }} className="w-5 h-px bg-white block"></motion.span>
                </motion.button>
            </div>
            {mobileNav && (
                <div className="fixed flex flex-col items-center inset-0 w-full bg-black bg-opacity-20 pt-[100px] space-y-10">
                    <div className="">
                        <ul className="text-white text-4xl space-y-5">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/">About</a>
                            </li>
                            <li>
                                <a href="/">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div className="flex justify-center items-center w-full bg-white space-y-5">
                        <ul className="flex space-x-5">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/">About</a>
                            </li>
                            <li>
                                <a href="/">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            )}
        </nav>
    )
}