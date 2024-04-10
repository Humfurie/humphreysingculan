"use client"
import Link from "next/link";
import {motion, useInView} from "framer-motion";
import {useRef} from "react";

export const SkillSection = () => {

    const ref= useRef(null)
    const isInView= useInView(ref);

    return (
        <>
            <section

                className={`flex flex-col h-full w-full relative min-h-screen`}>
                <motion.div
                    ref={ref}
                    initial={{ opacity: 0, y: 50}}
                    animate={isInView ? { opacity: 1, y: 0} : { opacity: 0, y: 50}}
                    transition={{ duration: 0.5 }}
                    className="flex justify-evenly h-20 top-0 w-full">
                    <div className="flex justify-center items-center h-full w-full">
                        <Link href="#">
                            Resume
                        </Link>
                    </div>
                    <div className="flex justify-center items-center h-full w-full">
                        images, images, images
                    </div>
                </motion.div>
                <div className="flex justify-center">
                    Skill Tree
                </div>
            </section>
        </>
    )
}