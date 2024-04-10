import Image from "next/image";


export default function Main() {
    return (
        <section className="relative h-full w-full min-h-screen pt-16 ">
            <div className="top-0 left-0 w-full h-full overflow-hidden">

                {/*Mobile Image*/}
                <Image
                    src="/humps.png"
                    alt="Humphrey"
                    fill
                    objectFit="cover"
                    className="object-cover shadow-md lg:hidden"
                />
                {/*Mobile Image*/}

                <Image
                    src="/humps.jpg"
                    alt="Humphrey"
                    fill
                    objectFit="cover"
                    className="object-cover hidden shadow-md lg:flex"
                />
            </div>
        </section>
    )
}