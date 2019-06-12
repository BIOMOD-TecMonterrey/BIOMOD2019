<html>
    <head>
        <title>BIOMOD 2019 Tec de Monterrey</title>
        <link href="css/reset.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!--bootstrap core css
        <link href="http://2018.igem.org/Team:Tec-Monterrey/CSS/bootstrapmin?action=raw&amp;ctype=text/css" rel="stylesheet">
        <link href="http://2018.igem.org/Team:Tec-Monterrey/CSS/fontawesomemin?action=raw&ctype=text/css" rel="stylesheet" type="text/css"> -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    </head>
    <body>
            <!------------------------------------------------------- LOADER ------------------------------------------------------->
        <div id="loader-wrapper">
            <div id="loader">
                <img id="videoLoader" src="http://2018.igem.org/wiki/images/e/e3/T--Tec-Monterrey--Page_Loader.gif">
                <div id="loaderMessage"></div>
            </div>
            <div class="loader-section section-top"></div>
            <div class="loader-section section-bottom"></div>
        </div>
        <!-- Navigation Bars-->
        <!------------------------------------------------------- SIDEBAR MENU STARTS ------------------------------------------>
        <div id="sidebar">
            <a class="menu-toggle rounded" id="menuToggle" href="#">
                <i class="fa fa-bars" style="font-size: 20px;"></i>
            </a>
            <nav id="sidebar-wrapper">
                <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <div class="brand-hider"></div>
                    <a href="http://2018.igem.org/Team:Tec-Monterrey">Tec de Monterrey</a>
                </li>
                <li class="sidebar-nav-item" id="menuProject">
                    <a>Project</a>
                    <ul class="sub-sidebar-nav">
                        <li class="sidebar-nav-subitem" id="subProject">
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Description">Description</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Design">Design</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/InterLab">Interlab</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Notebook">Notebook</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Safety">Safety</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Demonstrate">Demonstrate</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Medals">Medals</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-item" id="menuParts">
                    <a>Parts</a>
                    <ul class="sub-sidebar-nav">
                        <li class="sidebar-nav-subitem" id="subParts">
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Parts">Parts</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Improve">Improved parts</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/PartsList">Parts list</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-item" id="menuPeople">
                    <a>People</a>
                    <ul class="sub-sidebar-nav">
                        <li class="sidebar-nav-subitem" id="subPeople">
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Team">Team</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Collaborations">Collaborations</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Attributions">Attribution</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Sponsors">Sponsors</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-item" id="menuHP">
                    <a>Human Practices</a>
                    <ul class="sub-sidebar-nav">
                        <li class="sidebar-nav-subitem" id="subHP">
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Human_Practices">Human Practices</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Public_Engagement">Public & Educational Engagement</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-item" id="menuModeling">
                    <a>Modeling</a>
                    <ul class="sub-sidebar-nav">
                        <li class="sidebar-nav-subitem" id="subModeling">
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Model">Overview</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Model#">D.E. System</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Model">Quasi-Steady State</a>
                            <a href="http://2018.igem.org/Team:Tec-Monterrey/Model">Protein Production</a>
                        </li>
                    </ul>
                </li>
                </ul>
            </nav>
        </div>
        <!----------------------------------------------------- SIDEBAR MENU ENDS ------------------------------------------>
        <!----------------------------------------------------- TOPBAR MENU STARTS ----------------------------------------->
        <div id="topBarWrapper">
            <div class="topBar d-flex">
                <div id="navbar">
                    <div id="navbarLogoWrapper">
                        <img id="navbarLogo" src="http://2018.igem.org/wiki/images/7/76/T--Tec-Monterrey--ECoding_Menu_Logo_Still_200.png"/><img id="navbarGif" src="http://2018.igem.org/wiki/images/c/c3/T--Tec-Monterrey--ECoding_Menu_Gif.gif"/>
                        <h5 id="navbarLogoText">Home</h5>
                    </div>
                    <div id="navContainer">
                        <a> 
                            <div class="navbar-linkContainer" id="linkContainer_Project">
                                <div class="navbar-linkContainerChild" id="linkContainer_ProjectChild">PROJECT</div>
                            </div>
                        </a>
                        <a> 
                            <div class="navbar-linkContainer" id="linkContainer_Parts"> 
                                <div class="navbar-linkContainerChild" id="linkContainer_PartsChild">PARTS</div>
                            </div>
                        </a>
                        <a> 
                            <div class="navbar-linkContainer" id="linkContainer_HP">
                                <div class="navbar-linkContainerChild" id="linkContainer_HPChild">HUMAN PRACTICES</div>
                            </div>
                        </a>
                        <a> 
                            <div class="navbar-linkContainer" id="linkContainer_Modeling">
                                <div class="navbar-linkContainerChild" id="linkContainer_ModelingChild">MODELING</div>
                            </div>
                        </a>
                        <a> 
                            <div class="navbar-linkContainer" id="linkContainer_People">
                                <div class="navbar-linkContainerChild" id="linkContainer_PeopleChild">PEOPLE</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Project collapsed -->
                <div class="collapse collapsed-menu" id="collapseProject">
                    <div class="container-collapse">
                        <div class="height-support">
                        </div>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Description" 
                                class="navbarItemHeader">Description</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Description#overview" class="navbarItemContent">Overview</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Description#system" class="navbarItemContent">System</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Description#references" class="navbarItemContent">References</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Design" class="navbarItemHeader">Design</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Design#background" class="navbarItemContent">Background</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Design#module1" class="navbarItemContent">Module 1</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Design#module2" class="navbarItemContent">Module 2</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Design#system" class="navbarItemContent">System</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Design#adaptation" class="navbarItemContent">Adaptation</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/InterLab" class="navbarItemHeader">InterLab</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/InterLab#procedure-interlab" class="navbarItemContent">Procedure</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/InterLab#results-interlab" class="navbarItemContent">Results</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/InterLab#conclusion-interlab" class="navbarItemContent">Conclusion</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Notebook" class="navbarItemHeader">Notebook</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Notebook#logbook" class="navbarItemContent">Logbook</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Notebook#protocols" class="navbarItemContent">Protocols</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Safety" class="navbarItemHeader">Safety</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Safety#biosafety" class="navbarItemContent">Biosafety</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Safety#our-lab" class="navbarItemContent">Our Lab</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Safety#project-safety" class="navbarItemContent">Project Safety</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Demonstrate" class="navbarItemHeader">Demonstrate</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Medals" class="navbarItemHeader">Medals</a>
                            </li>
                        </ul>
                        <br class="clearBoth"/>
                    </div>
                </div>
                <!-- Parts collapsed -->
                <div class="collapse collapsed-menu" id="collapseParts">
                    <div class="container-collapse">
                        <div class="height-support">
                        </div>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Parts" class="navbarItemHeader">Parts</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Parts#overview" class="navbarItemContent">Overview</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Parts#basic_parts" class="navbarItemContent">Basic Parts</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Parts#composite_parts" class="navbarItemContent">Composite Parts</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Parts#parts_collection" class="navbarItemContent">Collection</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Improve" class="navbarItemHeader">Improved Parts</a>
                                <br>
                                <a href="" class="navbarItemContent">Previous Parts</a>
                                <br>
                                <a href="" class="navbarItemContent">Improved Parts</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/PartsList" class="navbarItemHeader">Parts List</a>
                            </li>
                        </ul>
                        <br class="clearBoth"/>
                    </div>
                </div>
                <!-- People collapsed -->
                <div class="collapse collapsed-menu" id="collapsePeople">
                    <div class="container-collapse">
                        <div class="height-support">
                        </div>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Team" class="navbarItemHeader">Team</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Team#page-top" class="navbarItemContent">Header</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Team#teamMembers" class="navbarItemContent">Team Members</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Team#pi1" class="navbarItemContent">PI 1</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Team#pi2" class="navbarItemContent">PI 2</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Team#instructor" class="navbarItemContent">Instructor</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Team#advisors" class="navbarItemContent">Advisors</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Team#collaborators" class="navbarItemContent">Collaborators</a>
                                <br>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Collaborations" class="navbarItemHeader">Collaborations</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Collaborations#collabs" class="navbarItemContent">Collabs</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Collaborations#meetups" class="navbarItemContent">Meetups</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Attributions" class="navbarItemHeader">Attributions</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Attributions#tec-monterrey-work" class="navbarItemContent">What we have done</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Attributions#general-support" class="navbarItemContent">General Support</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Attributions#HP-support" class="navbarItemContent">HP Support</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Attributions#design-wiki" class="navbarItemContent">Design/Wiki</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Attributions#fund-raising" class="navbarItemContent">Fund raising</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Attributions#thanks" class="navbarItemContent">Thanks</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Sponsors" class="navbarItemHeader">Sponsors</a>
                            </li>
                        </ul>
                        <br class="clearBoth"/>
                    </div>
                </div>
                <!-- HP collapsed -->
                <div class="collapse collapsed-menu" id="collapseHP">
                    <div class="container-collapse">
                        <div class="height-support">
                        </div>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Human_Practices" class="navbarItemHeader">Human Practices</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Human_Practices#page-top" class="navbarItemContent">Header</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Human_Practices#introduction-HP" class="navbarItemContent">Intro</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Human_Practices#action-HP" class="navbarItemContent">Action Plan</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Human_Practices#journey-HP" class="navbarItemContent">Journey</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Human_Practices#integrated-HP" class="navbarItemContent">Integrated</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Human_Practices#world-HP" class="navbarItemContent">World</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList" style="width: 25%;">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Public_Engagement" class="navbarItemHeader">Public & Educational Engagement</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Public_Engagement#magazine" class="navbarItemContent">Magazine articles</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Public_Engagement#presentation" class="navbarItemContent">Presentations</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Public_Engagement#social" class="navbarItemContent">Social Media</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Public_Engagement#congress" class="navbarItemContent">Congress</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Public_Engagement#tour" class="navbarItemContent">Tour</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Public_Engagement#workshops" class="navbarItemContent">Workshops</a>
                                <br>
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Public_Engagement#seminar" class="navbarItemContent">Seminar</a>
                            </li>
                        </ul>
                        <br class="clearBoth"/>
                    </div>
                </div>
                <!-- Modeling collapsed -->
                <div class="collapse collapsed-menu" id="collapseModeling">
                    <div class="container-collapse">
                        <div class="height-support">
                        </div>
                        <ul class="navbar-nav mr-auto navbarList">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Model" class="navbarItemHeader">Overview</a>
                                <br>
                                <a href="#page-top" class="navbarItemContent">Introduction</a>
                                <br>
                                <a href="#page-top" class="navbarItemContent">Biological System</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList" style="width: 25%;">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Model" class="navbarItemHeader">D.E. System</a>
                                <br>
                                <a href="#page-top" class="navbarItemContent">Kinetic Diagram</a>
                                <br>
                                <a href="#page-top" class="navbarItemContent">Equations</a>
                                <br>
                                <a href="#page-top" class="navbarItemContent">Parameters</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList" style="width: 25%;">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Model" class="navbarItemHeader">Quasi-Steady State</a>
                                <br>
                                <a href="#page-top" class="navbarItemContent">Equations</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-auto navbarList" style="width: 25%;">
                            <li class="nav-item navbarItem">
                                <a href="http://2018.igem.org/Team:Tec-Monterrey/Model" class="navbarItemHeader">Protein Production</a>
                                <br>
                                <a href="#page-top" class="navbarItemContent">Equations</a>
                                <br>
                                <a href="#page-top" class="navbarItemContent">Experimentation</a>
                                <br>
                                <a href="#page-top" class="navbarItemContent">Parameters</a>
                            </li>
                        </ul>
                        <br class="clearBoth"/>
                    </div>
                </div>

                <div class="mask"></div>
            </div>
        </div>
        <!------------------------------------------------------ TOPBAR MENU ENDS --------------------------------------------->