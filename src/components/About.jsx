import React from 'react'
import { Tilt } from 'react-tilt'
import { motion } from 'framer-motion'
import {styles} from '../style'
import { services } from '../constants'
import {fadeIn,textVariant} from '../utils/motion'
import {SectionWrapper} from '../hoc'
const ServiceCard= ({index,title,icon}) =>(
  
    <Tilt className="xs:w-[250px] w-full">
      <motion.div variants={fadeIn("right","spring",0.5*index,0.75)} className='w-full green-pink-gradient p-[1px] rounded-[20px] shadow-card'>
        <div options={{
          max:45,scale:1,speed:450
        }} className='bg-tertiary rounded-[20px]
        py-5 px-12 min-h-[280px] flex justify-evenly items-center flex-col'>
          <img src={icon} alt={title} className='w-16 h-16 object-contain' />
        <h3 className='text-white text-[20px] font-bold'>{title}</h3>
        </div>

      </motion.div>
    </Tilt>
  )

const About = () => {
  return (
    <>
    <motion.div className={textVariant()}>
      <p className={styles.sectionSubText}>Introduction</p>
      <h2 className={styles.sectionHeadText}>Overview.</h2>
    </motion.div>
    <motion.p variants={fadeIn("","",0.1,1)} className='
    mt-4 text-secondary text-[17px] max-w-3xl leading-[30px]'>
    Welcome to my portfolio! I'm Ramzi El Badaoui, a passionate and versatile full stack developer with a deep-rooted love for crafting innovative web solutions. With a background in both front-end and back-end technologies, I bring a holistic approach to software development, ensuring seamless user experiences and robust functionality. My journey in the world of coding has been marked by a relentless pursuit of knowledge and a commitment to staying at the forefront of industry trends. As you explore my portfolio, you'll discover a collection of projects that showcase my skills, creativity, and dedication to excellence. Whether it's designing elegant user interfaces, optimizing database performance, or solving complex challenges, I thrive on turning ideas into functional, user-friendly applications. I'm excited to share my work with you and demonstrate how I can contribute to your next web development endeavor.
    </motion.p>
    <div className='mt-20 flex flex-wrap gap-10'>
    {services.map((service,index)=>(
      <ServiceCard key={service.title} index={index} {...service}/>
    ))}
    </div>
    </>
  )
};

export default SectionWrapper(About,"about");