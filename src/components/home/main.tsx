"use client"
import {motion} from "framer-motion";
import Image from "next/image";


export default function Main() {
    return (
        <>
            <motion.section className="relative h-full w-full min-h-screen pt-16">
                <div className="absolute top-0 left-0 w-full h-full overflow-hidden">
                    <Image
                        src="/humps.png"
                        alt="Humphrey"
                        fill
                        objectFit="cover"
                        className="object-cover lg:hidden"
                    />
                    <Image
                        src="/humps.jpg"
                        alt="Humphrey"
                        fill
                        objectFit="cover"
                        className="object-cover hidden lg:flex"
                    />
                </div>
            </motion.section>
            {/*<motion.section*/}
            {/*    className="w-full h-full"*/}
            {/*    initial={{opacity: 0}}*/}
            {/*    animate={{opacity: 1}}*/}
            {/*    transition={{duration: 0.5, delay: 0.3}}*/}
            {/*>*/}
            {/*    <p>sections</p>*/}
            {/*</motion.section>*/}
        </>
    )
}