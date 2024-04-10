"use client"
import {motion} from "framer-motion";
import Link from "next/link";
import React from "react";

interface MotionLiProps {
    link: {
        id: number,
        url: string,
        title: string
    }
}

export const MotionLi: React.FC<MotionLiProps> = ({link}) => {
    return (
        <motion.li
            whileHover={{ scale: 1.1 }}
            whileTap={{ scale: 0.9 }}
            key={link.id}>
            <Link href={link.url}
                  className="block text-white py-2 px-3 rounded md:p-0"
                  aria-current="page">
                <span>{link.title}</span>
            </Link>
        </motion.li>
    )
}