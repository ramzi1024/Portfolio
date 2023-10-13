import { BrowserRouter } from "react-router-dom"
import {About,Contact,Experience,Feedbacks,Hero,Navbar,Works,StarsCanvas,Tech} from './components'
import { SectionWrapper } from "./hoc"
function App() {
  

  return (
    <BrowserRouter>
      <div className="relative z-0 bg-primary">
    <div className="bg-hero-pattern bg-cover bg-np-repeat bg-center">
    <Navbar/>
    <Hero/>
    </div>
    <About/>
    <Experience/>
    <Tech/>
    <Works/>
    
    <div className="relative z-1">
    <Contact/>
    <StarsCanvas/>
    </div>
      </div>
    </BrowserRouter>
  )
}

export default App
