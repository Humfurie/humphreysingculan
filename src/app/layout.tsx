import type {Metadata} from 'next'
import {Inter} from 'next/font/google'
import './globals.css'
import Header from "@/components/home/header";
import Footer from "@/components/home/footer";
import IndexPage from "@/components/home/IndexPage";

const inter = Inter({subsets: ['latin']})

export const metadata: Metadata = {
    title: 'Humphrey Singculan',
    description: 'This is the portfolio for Humphrey Singculan. He is a programmer and a HomeLab starter',
}

export default function RootLayout({children}: {
    children: React.ReactNode
}) {
    return (
        <html lang="en">
        <body className={inter.className}>
            <Header/>
            {children}
            <Footer/>
        </body>
        </html>
    )
}
