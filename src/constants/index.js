import {
    mobile,
    backend,
    creator,
    web,
    javascript,
    typescript,
    html,
    css,
    reactjs,
    redux,
    tailwind,
    nodejs,
    mongodb,
    git,
    figma,
    docker,
    meta,
    starbucks,
    tesla,
    shopify,
    carrent,
    jobit,
    tripguide,
    threejs,
    devops,
    probelmsolving,
    QualitAdd,
    Ministere,
    ensamr,
    angular,
    bootstrap,
    java,
    php,
    laravel,
    mysql,
    jquery,
    grocery,
    jobintech,
    tutoring

    
  } from "../assets";
  
  export const navLinks = [
    {
      id: "about",
      title: "About",
    },
    {
      id: "work",
      title: "Work",
    },
    {
      id: "contact",
      title: "Contact",
    },
  ];
  
  const services = [
    {
      title: "Front-end Developer",
      icon: web,
    },
    {
      title: "Back-end Developer",
      icon: backend,
    },
    {
      title: "DevOps Developer",
      icon: devops,
    },
    {
      title: "Problem Solver",
      icon: probelmsolving,
    },
  ];
  
  const technologies = [
    {
      name: "HTML 5",
      icon: html,
    },
    {
      name: "CSS 3",
      icon: css,
    },
    {
      name: "JavaScript",
      icon: javascript,
    },
    {
      name: "TypeScript",
      icon: typescript,
    },
    {
      name: "Angular",
      icon: angular,
    },
    {
      name: "Bootstrap",
      icon: bootstrap,
    },
    {
      name: "Tailwind CSS",
      icon: tailwind,
    },
    {
      name: "Node JS",
      icon: nodejs,
    },
    {
      name: "Java",
      icon: java,
    },
    {
      name: "Three JS",
      icon: threejs,
    },
    {
      name: "git",
      icon: git,
    },
    {
      name: "Php",
      icon: php,
    },
    {
      name: "Laravel",
      icon: laravel,
    },
    {
      name: "MySQL",
      icon: mysql,
    },
    {
      name: "jQuery",
      icon: jquery,
    },
  ];
  
  const experiences = [
    {
      title: "React.js Developer Internship",
      company_name: "QualitAdd",
      icon: QualitAdd,
      iconBg: "#383E56",
      date: "March 2022 - April 2022",
      points: [
        "Developing and maintaining an e-commerce web application using React.js and other related technologies.",
        
        "Implementing responsive design and ensuring cross-browser compatibility.",
        "Participating in code reviews and providing constructive feedback to other developers.",
      ],
    },
    {
      title: "Flutter Developer Internship",
      company_name: "Ministry of Health",
      icon: Ministere,
      iconBg: "#E6DEDD",
      date: "March 2023 - June 2023",
      points: [
        "Developing  a mobile application using Dart,Flutter and PHP.",
        "Creating the whole database of  the division of computer science and methods.",
        "Implementing responsive design and ensuring cross-browser compatibility.",
        
      ],
    },
    {
      title: "Full Stack Developer Internship",
      company_name: "ENSAM Rabat",
      icon: ensamr,
      iconBg: "#383E56",
      date: "August 2023 - September 2023",
      points: [
        "Develop the official website for continuing education within the National School of Arts and Crafts.",
        "Creation of an online tutoring platform that allows students to choose their preferred courses and tutors.",
        
        "Participating in code reviews and providing constructive feedback to other developers.",
      ],
    },
    
  ];
  
  const testimonials = [
    {
      testimonial:
        "I thought it was impossible to make a website as beautiful as our product, but Rick proved me wrong.",
      name: "Sara Lee",
      designation: "CFO",
      company: "Acme Co",
      image: "https://randomuser.me/api/portraits/women/4.jpg",
    },
    {
      testimonial:
        "I've never met a web developer who truly cares about their clients' success like Rick does.",
      name: "Chris Brown",
      designation: "COO",
      company: "DEF Corp",
      image: "https://randomuser.me/api/portraits/men/5.jpg",
    },
    {
      testimonial:
        "After Rick optimized our website, our traffic increased by 50%. We can't thank them enough!",
      name: "Lisa Wang",
      designation: "CTO",
      company: "456 Enterprises",
      image: "https://randomuser.me/api/portraits/women/6.jpg",
    },
  ];
  
  const projects = [
    {
      name: "Grocery Shop",
      description:
        "Web Site that allows users to search and book they prefered organic food.",
      tags: [
        {
          name: "HTML5",
          color: "orange-text-gradient",
        },
        {
          name: "CSS3",
          color: "blue-text-gradient",
        },
        {
          name: "JavaScript",
          color: "text-secondary",
        },
      ],
      image: grocery,
      source_code_link: "https://github.com/ramzi1024",
    },
    {
      name: "JobIntech",
      description:
        "Web application that enables students to enroll a bachelor or master course within the National School of Arts and Crafts .",
      tags: [
        {
          name: "Angular",
          color: "pink-text-gradient",
        },
        {
          name: "restapi",
          color: "green-text-gradient",
        },
        {
          name: "CSS3",
          color: "blue-text-gradient",
        },
      ],
      image: jobintech,
      source_code_link: "https://github.com/ramzi1024",
    },
    {
      name: "Tutoring Platfrom",
      description:
        "A tutoring platform that allows student to book a course in their favourite subject and prefered teacher and allow to teachers to provide their services in any kind of tutoring subjects .",
      tags: [
        {
          name: "Angular",
          color: "pink-text-gradient",
        },
        {
          name: "Laravel",
          color: "orange-text-gradient",
        },
        {
          name: "CSS3",
          color: "blue-text-gradient",
        },
      ],
      image: tutoring,
      source_code_link: "https://github.com/",
    },
  ];
  
  export { services, technologies, experiences, testimonials, projects };