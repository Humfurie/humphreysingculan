import Main from "@/components/home/main";
import {SkillSection} from "@/components/home/sections/SkillSection";
import {ExperienceSection} from "@/components/home/sections/ExperienceSection";

export default function Home() {
    return (
        <>
            <main>
                <Main/>
                <SkillSection/>
                <ExperienceSection />
            </main>
        </>
    )
}
