<?php

// Alle zichtbare teksten van de website, verdeeld per taal.
// WesleyPagina.php kiest één taal uit deze lijst en gebruikt daarna de bijbehorende teksten.
return [
    // Nederlandse vertalingen.
    'nl' => [
        // Teksten voor de navigatie, in dezelfde volgorde als de navigatielinks.
        'nav' => ['Over mij', 'Skills', 'Programmeertalen', 'Projecten', 'Rol'],

        // Teksten voor de introductie bovenaan de pagina.
        'hero_tag' => 'Werknemer bij Technical Works Leeuwarden',
        'hero_title' => 'Hoi, ik ben Wesley.',
        'hero_text' => 'Een gemotiveerde student met interesse in ICT, techniek en softwareontwikkeling. Ik leer graag nieuwe dingen, werk netjes en denk mee in oplossingen.',
        'portfolio_button' => 'Bekijk portfolio',
        'photo_alt' => 'Foto van Wesley',

        // Teksten voor het onderdeel 'Over mij'.
        'about_tag' => 'Wie ben ik?',
        'about_title' => 'Over mij',
        'about_text' => 'Mijn naam is Wesley Rinsma, ik ben 21 jaar en tweedejaars student Software Development. Binnen ons schoolbedrijf werk ik aan een professionele website. In dit portfolio laat ik zien wat ik kan, wat ik leer en wat mijn rol is binnen het team.',

        // Teksten voor het onderdeel over de opleidingskeuze.
        'education_tag' => 'Waarom heb ik deze opleiding gekozen?',
        'education_title' => 'Mijn opleidingskeuze',
        'education_text' => "Ik heb voor deze opleiding gekozen omdat het mij een interessante en uitdagende opleiding lijkt. Mijn vriendin volgt dezelfde opleiding en daardoor heb ik een paar keer met haar mee kunnen kijken. Zo kreeg ik een beter beeld van wat de opleiding inhoudt en merkte ik dat het mij echt interesseerde. Dat heeft mij uiteindelijk enthousiast gemaakt om zelf ook voor deze opleiding te kiezen..",

        // Iedere rij hieronder bevat de titel en beschrijving van één vaardigheidskaart.
        'skills_tag' => 'Waar ben ik goed in?',
        'skills_title' => 'Vaardigheden',
        'skills' => [
            ['Samenwerken', 'Duidelijk overleggen, taken verdelen en afspraken nakomen.'],
            ['Problemen oplossen', 'Rustig analyseren, testen en stap voor stap verbeteren.'],
            ['Netjes werken', 'Structuur houden in mijn code en onderdelen verzorgd opleveren.'],
            ['Stressbestendigheid', 'Rustig blijven werken wanneer er druk is of een deadline dichterbij komt.'],
            ['Respectvol', "Op een nette manier omgaan met klasgenoten, collega's en feedback."],
            ['Communicatie', 'Duidelijk uitleggen wat ik doe en goed luisteren naar anderen in het team.'],
        ],

        // Iedere rij hieronder bevat de titel en beschrijving van één technische kaart.
        'languages_tag' => 'Technische kennis',
        'languages_title' => 'Programmeertalen',
        'languages' => [
            ['HTML & CSS', "Webpagina's opbouwen, vormgeven en responsive maken."],
            ['PHP', 'Basis van dynamische websites en werken met server-side code.'],
            ['Python', 'Basiskennis van programmeren, logica en kleine scripts.'],
            ['MySQL', 'Gegevens opslaan, tabellen gebruiken en simpele queries schrijven.'],
            ['JavaScript', "Webpagina's interactiever maken met basisfunctionaliteiten."],
        ],

        // Iedere projectrij bevat een titel, beschrijving en projectnummer.
        'projects_tag' => 'Mijn werk',
        'projects_title' => 'Projecten',
        'projects' => [
            ['Portfolio pagina', 'Een persoonlijke pagina met een moderne uitstraling en duidelijke informatie.', '01'],
            ['Bedrijfswebsite', 'Samen met mijn groep werk ik aan de website voor Technical Works Leeuwarden.', '02'],
            ['Schoolopdrachten', 'Opdrachten waarin ik mijn technische kennis en presentatie verbeter.', '03'],
        ],

        // Teksten voor het onderdeel over de rol binnen het team.
        'role_tag' => 'Binnen het team',
        'role_title' => 'Mijn rol',
        'role_text' => 'Binnen het team ben ik de Scrum Master. Ik zorg ervoor dat we goed samenwerken en dat iedereen weet wat er moet gebeuren. Ik help met het plannen van taken, houd de voortgang bij en bespreek problemen met het team. Ook zorg ik ervoor dat we onze afspraken en deadlines niet vergeten.',
    ],

    // Engelse vertalingen. De sleutels en volgorde zijn gelijk aan de Nederlandse versie.
    'en' => [
        // Teksten voor de navigatie.
        'nav' => ['About me', 'Skills', 'Programming languages', 'Projects', 'Role'],

        // Teksten voor de introductie bovenaan de pagina.
        'hero_tag' => 'Employee at Technical Works Leeuwarden',
        'hero_title' => "Hi, I'm Wesley.",
        'hero_text' => 'A motivated student with an interest in IT, technology and software development. I enjoy learning new things, work neatly and contribute to finding solutions.',
        'portfolio_button' => 'View portfolio',
        'photo_alt' => 'Photo of Wesley',

        // Teksten voor het onderdeel 'About me'.
        'about_tag' => 'Who am I?',
        'about_title' => 'About me',
        'about_text' => 'My name is Wesley Rinsma, I am 21 years old and a second-year Software Development student. I am working on a professional website within our school company. This portfolio shows what I can do, what I am learning and what my role is within the team.',

        // Teksten voor het onderdeel over de opleidingskeuze.
        'education_tag' => 'Why did I choose this programme?',
        'education_title' => 'My choice of study',
        'education_text' => 'I chose this course because it seems interesting and challenging to me. My girlfriend is studying the same course, so I have had the opportunity to see what she is working on a few times. This gave me a better idea of what the course is about, and I noticed that I was genuinely interested in it. That eventually made me excited to choose this course myself.',
        // Engelse titels en beschrijvingen van de vaardigheidskaarten.
        'skills_tag' => 'What am I good at?',
        'skills_title' => 'Skills',
        'skills' => [
            ['Collaboration', 'Communicating clearly, dividing tasks and keeping agreements.'],
            ['Problem-solving', 'Analysing calmly, testing and improving step by step.'],
            ['Working neatly', 'Keeping my code structured and delivering polished work.'],
            ['Working under pressure', 'Staying calm when pressure increases or a deadline approaches.'],
            ['Respectful', 'Treating classmates, colleagues and feedback respectfully.'],
            ['Communication', 'Clearly explaining what I do and listening carefully to others in the team.'],
        ],

        // Engelse titels en beschrijvingen van de technische kaarten.
        'languages_tag' => 'Technical knowledge',
        'languages_title' => 'Programming languages',
        'languages' => [
            ['HTML & CSS', 'Building, styling and making web pages responsive.'],
            ['PHP', 'The basics of dynamic websites and server-side code.'],
            ['Python', 'Basic knowledge of programming, logic and small scripts.'],
            ['MySQL', 'Storing data, using tables and writing simple queries.'],
            ['JavaScript', 'Making web pages more interactive with basic functionality.'],
        ],

        // Engelse projectteksten met hetzelfde projectnummer als de Nederlandse versie.
        'projects_tag' => 'My work',
        'projects_title' => 'Projects',
        'projects' => [
            ['Portfolio page', 'A personal page with a modern appearance and clear information.', '01'],
            ['Company website', 'I am working with my group on the website for Technical Works Leeuwarden.', '02'],
            ['School assignments', 'Assignments that help me improve my technical knowledge and presentation skills.', '03'],
        ],

        // Engelse teksten voor de rol binnen het team.
        'role_tag' => 'Within the team',
        'role_title' => 'My role',
        'role_text' => 'I am the Scrum Master within the team. I make sure we work well together and that everyone knows what needs to be done. I help plan tasks, monitor progress and discuss problems with the team. I also make sure we remember our agreements and deadlines.',
    ],
];
