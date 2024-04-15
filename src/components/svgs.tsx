import React from 'react';
import { FaLaravel, FaDocker } from "react-icons/fa";
import { IoLogoJavascript } from "react-icons/io5";
import {SiAdonisjs, SiNextdotjs, SiPhp, SiTailwindcss, SiJquery, SiAxios, SiVuedotjs, SiNginx, SiXampp, SiPostman } from "react-icons/si";
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
    {
        name: "JQuery",
        icon: <SiJquery  className="tech"/>
    },
    {
        name: "APIs",
        icon: <h1 className="text-5xl font-bold text-[#e85b51]">API</h1>
    },
    {
        name: "Axios",
        icon: <SiAxios  className="tech"/>
    },
    {
        name: "Nginx",
        icon: <SiNginx  className="tech"/>
    },
    {
        name: "Xampp",
        icon: <SiXampp  className="tech"/>
    },
    {
        name: "Postman",
        icon: <SiPostman className="tech"/>
    },

    // {
    //     name: "Vue",
    //     icon: <SiVuedotjs  className="tech"/>
    // },
];