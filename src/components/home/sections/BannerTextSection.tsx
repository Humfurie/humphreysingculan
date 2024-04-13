"use client"
import {AccountLinks} from "@/components/home/lib/AccountLinks";

const data = [
    "Junior Software Developer. Laravel Developer. Video Editor",
    ""
]
export const BannerTextSection = () => {

    return (
        <>
            <div className="absolute z-[2] top-[30%] sm:top-[35%]">
                <div className="flex flex-col space-y-8 max-sm:justify-center max-sm:items-center max-sm:text-center">
                    <h1 className="underline-offset-4 underline-5 text-white text-[50px] sm:text-[75px] md:text-[100px] font-bold sm:max-w-[60%] md:max-w-[65%] sm:leading-[80px] md:leading-[100px]">
                        <span className="text-primary-orange">H</span>umphrey Singculan
                    </h1>
                    <p className="text-white text-[20px] sm:text-[30px] md:text-[35px] max-w-[58%] sm:max-w-[60%]">
                        Full-stack Developer. Laravel Developer. DevOps. Video Editor
                    </p>
                    <div className={`group`}>
                        <button className="btn group text-white text-center w-fit">Resume</button>
                    </div>

                </div>
            </div>

            <div className="absolute text-white bottom-[10%] left-1/2 transform -translate-x-1/2 z-10 sm:right-[5%] sm:left-auto sm:transform-none sm:flex sm:items-center">
                <AccountLinks className="primary-fill-white" />
            </div>

        </>
    )
}