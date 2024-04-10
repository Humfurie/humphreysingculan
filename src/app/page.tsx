import Main from "@/components/home/main";
import {SkillSection} from "@/components/home/sections/skill-section";

export default function Home() {
    return (
        <>
            <main className="flex flex-wrap mx-auto justify-center items-center">
                <Main/>
                <SkillSection/>
            </main>
        </>
    )
}
