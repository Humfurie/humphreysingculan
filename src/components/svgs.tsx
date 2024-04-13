import React from 'react';
import { FaLaravel, FaDocker } from "react-icons/fa";
import { IoLogoJavascript } from "react-icons/io5";
import {SiAdonisjs, SiNextdotjs, SiPhp, SiTailwindcss } from "react-icons/si";
import {Filament} from "../../public/Filament_Laravel";
export const svgs: { name: string, icon: JSX.Element }[] = [
    {
        name: "laravel",
        icon: <FaLaravel className="tech"/>
    },
    {
        name: "php",
        icon: <SiPhp  className="tech" />
    },
    {
        name: "javascript",
        icon: <IoLogoJavascript className="tech" />
    },
    {
        name: "docker",
        icon: <FaDocker className="tech" />
    },
    {
        name: "next js",
        icon: <SiNextdotjs className="tech" />
    },
    {
        name: "filament",
        icon: <Filament className="tech" />
    },
    {
        name: "adonis js",
        icon: <SiAdonisjs className="tech"/>
    },
    {
        name: "tailwind css",
        icon: <SiTailwindcss  className="tech"/>
    },
];