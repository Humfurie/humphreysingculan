import Image from 'next/image'
import Header from "@/components/home/header";
import Main from "@/components/home/main";

export default function Home() {
    return (
        <>
            <main className="max-w-screen max-h-screen flex flex-wrap mx-auto justify-center items-center">
               <Main/>
            </main>
        </>
    )
}
