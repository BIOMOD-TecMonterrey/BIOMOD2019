        <!---------------------------------------------------------- Footer --------------------------------------------------->
        <footer class="footer text-center">
            <div class="container row" style="margin: 0px auto;">
                <div class="col-md-3">
                    <h4 class="text-muted">Contact Us</h4>
                    <a class="footer-link no-padding" href="https://www.facebook.com/IgemTecMty" target="_blank">
                        <i class="fa fa-facebook-square social-link"></i>
                    </a>
                    <a class="footer-link no-padding" href="https://twitter.com/igemtecmty" target="_blank">
                        <i class="fa fa-twitter-square social-link"></i>
                    </a>
                    <a class="footer-link no-padding" href="mailto:igemtecmonterrey@gmail.com">
                        <i class="fa fa-envelope-square social-link"></i>
                    </a>
                    <a class="footer-link no-padding" href="https://www.instagram.com/igemtecmty/" target="_blank">
                        <i class="fa fa-instagram social-link"></i>
                    </a>
                    <div class="footer-text">
                        <p class="text-muted" style="margin-bottom: 0;">
                            <i class="fa fa-map-pin"></i> Av. Eugenio Garza Sada 2501
                        </p>
                        <p class="text-muted">
                            64849 Monterrey, Mexico
                        </p>
                    </div>    
                </div>
                <div class="col-md-9">
                    <h4 class="text-muted">Sponsors</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/5/56/T--Tec-Monterrey--CECROPIA.png" alt="CECROPIA">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/a/a2/T--Tec-Monterrey--CONANP.png" alt="CONANP">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/4/43/T--Tec-Monterrey--Concretos.png" alt="Concretos Modernos del Sur">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/8/89/T--Tec-Monterrey--GDX.png" alt="GDX Holdings">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/e/e9/T--Tec-Monterrey--GenScript.png" alt="GenScript">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/3/37/T--Tec-Monterrey--IDT.png" alt="IDT">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/8/8d/T--Tec-Monterrey--Ladesa.png" alt="Ladesa">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/5/5e/T--Tec-Monterrey--NEB.png" alt="NEB">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/3/3c/T--Duesseldorf--snapgene.png" alt="SnapGene">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/2/24/T--Tec-Monterrey--Opentrons.png" alt="Opnetrons">
                        </li>
                        <li class="list-inline-item sponsor">
                            <img class="sponsor-img" src="http://2018.igem.org/wiki/images/f/f2/T--Tec-Monterrey--Amexcid_Logo.png" alt="NEB">
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <!--------------------------------------- Script controls collapsedMenus ------------------------------------------>
        <script>
        /*------------MENU STARTS-----------*/
        //Menu collapsing
        $("#linkContainer_Project").hover(
            function () {
                $('#navbar').css('background','#2A8481');
                $("#linkContainer_Project").addClass("active");
                $("#linkContainer_ProjectChild").addClass("activeChild");
                openMenu('#collapseProject', '#b0e0e4');
            }, function () {
                $("#linkContainer_Project").removeClass("active");
                $("#linkContainer_ProjectChild").removeClass("activeChild");
                closeMenu('#collapseProject');
                colorNavbar();

                $('#collapseProject').mouseenter(function(){
                    $('#navbar').css('background','#2A8481');
                    $("#linkContainer_Project").addClass("active");
                    $("#linkContainer_ProjectChild").addClass("activeChild");
                    openMenu('#collapseProject', '#b0e0e4');
                });
                $('#collapseProject').mouseleave(function(){
                    colorNavbar();
                    $("#linkContainer_Project").removeClass("active");
                    $("#linkContainer_ProjectChild").removeClass("activeChild");
                    closeMenu('#collapseProject');
                });
            }
        );

        $("#linkContainer_Parts").hover(
            function () {
                $('#navbar').css('background','#2A8481');
                $("#linkContainer_Parts").addClass("active");
                $("#linkContainer_PartsChild").addClass("activeChild");
                openMenu('#collapseParts', '#bae4e8');
            }, function () {
                colorNavbar();
                $("#linkContainer_Parts").removeClass("active");
                $("#linkContainer_PartsChild").removeClass("activeChild");
                closeMenu('#collapseParts');

                $('#collapseParts').mouseenter(function(){
                    $('#navbar').css('background','#2A8481');
                    $("#linkContainer_Parts").addClass("active");
                    $("#linkContainer_PartsChild").addClass("activeChild");
                    openMenu('#collapseParts', '#bae4e8');
                });
                $('#collapseParts').mouseleave(function(){
                    colorNavbar();
                    $("#linkContainer_Parts").removeClass("active");
                    $("#linkContainer_PartsChild").removeClass("activeChild");
                    closeMenu('#collapseParts');
                });
            }
        );

        $("#linkContainer_People").hover(
            function () {
                $('#navbar').css('background','#2A8481');
                $("#linkContainer_People").addClass("active");
                $("#linkContainer_PeopleChild").addClass("activeChild");
                openMenu('#collapsePeople', '#caeaed');
            }, function () {
                colorNavbar();
                $("#linkContainer_People").removeClass("active");
                $("#linkContainer_PeopleChild").removeClass("activeChild");
                closeMenu('#collapsePeople');

                $('#collapsePeople').mouseenter(function(){
                    $('#navbar').css('background','#2A8481');
                    $("#linkContainer_People").addClass("active");
                    $("#linkContainer_PeopleChild").addClass("activeChild");
                    openMenu('#collapsePeople', '#caeaed');
                });
                $('#collapsePeople').mouseleave(function(){
                    colorNavbar();
                    $("#linkContainer_People").removeClass("active");
                    $("#linkContainer_PeopleChild").removeClass("activeChild");
                    closeMenu('#collapsePeople');
                });
            }
        );

        $("#linkContainer_HP").hover(
            function () {
                $('#navbar').css('background','#2A8481');
                $("#linkContainer_HP").addClass("active");
                $("#linkContainer_HPChild").addClass("activeChild");
                openMenu('#collapseHP', '#d8f0f2');
            }, function () {
                colorNavbar();
                $("#linkContainer_HP").removeClass("active");
                $("#linkContainer_HPChild").removeClass("activeChild");
                closeMenu('#collapseHP');

                $('#collapseHP').mouseenter(function(){
                    $('#navbar').css('background','#2A8481');
                    $("#linkContainer_HP").addClass("active");
                    $("#linkContainer_HPChild").addClass("activeChild");
                    openMenu('#collapseHP', '#d8f0f2');
                });
                $('#collapseHP').mouseleave(function(){
                    colorNavbar();
                    $("#linkContainer_HP").removeClass("active");
                    $("#linkContainer_HPChild").removeClass("activeChild");
                    closeMenu('#collapseHP');
                });
            }
        );

        $("#linkContainer_Modeling").hover(
            function () {
                $('#navbar').css('background','#2A8481');
                $("#linkContainer_Modeling").addClass("active");
                $("#linkContainer_ModelingChild").addClass("activeChild");
                openMenu('#collapseModeling', '#e7f6f7');
            }, function () {
                colorNavbar();
                $("#linkContainer_Modeling").removeClass("active");
                $("#linkContainer_ModelingChild").removeClass("activeChild");
                closeMenu('#collapseModeling');

                $('#collapseModeling').mouseenter(function(){
                    $('#navbar').css('background','#2A8481');
                    $("#linkContainer_Modeling").addClass("active");
                    $("#linkContainer_ModelingChild").addClass("activeChild");
                    openMenu('#collapseModeling', '#e7f6f7');
                });
                $('#collapseModeling').mouseleave(function(){
                    colorNavbar();
                    $("#linkContainer_Modeling").removeClass("active");
                    $("#linkContainer_ModelingChild").removeClass("activeChild");
                    closeMenu('#collapseModeling');
                });
            }
        );

        $("#navbarLogoWrapper").click(function() {
            window.location.href = "http://2018.igem.org/Team:Tec-Monterrey";
        });

        function openMenu(collapseName, collapseColor) {
            $(".topBar").css({'height':'100%'});
            $(".mask").css({'background':'rgba(0,123,255,0.5)','height':'100%'});
            $(collapseName).css({'background-color': collapseColor});
            if($(".topBar").offset().top < 300){
                $(collapseName).stop().fadeIn(300);
            }else{
                $(collapseName).stop().slideDown(400);
            }
        }

        function colorNavbar(){
            if($(".topBar").offset().top > 300){
                $('#navbar').css('background','#2A8481');
                $('.cd-vertical-nav').css('display','table');
            }else{
                $('#navbar').css('background','linear-gradient(180deg, rgba(0,0,0,0.5) 0%, rgba(255,255,255,0) 100%)');
                $('.cd-vertical-nav').css('display','none');
            }
        }

        function closeMenu(collapseName){
            $(".topBar").css({'height':'8vh'});
            $(".mask").css({'background':'rgba(0,0,0,0)','height':'8vh'});
            if($(".topBar").offset().top < 300){
                $(collapseName).stop().fadeOut(200);
            }else{
                $(collapseName).stop().slideUp(300);
            }
        }

        $(window).scroll(colorNavbar);
        $(document).ready(colorNavbar);

        /*------------MENU ENDS-----------*/

        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
        </script>
        <!-- Custom JavaScript -->
        <script src="http://2018.igem.org/Team:Tec-Monterrey/Javascript/StylishPortfolio?action=raw&ctype=text/javascript" type="text/javascript"></script>
        <script src="http://2018.igem.org/Team:Tec-Monterrey/Javascript/jqueryeasingmin?action=raw&ctype=text/javascript" type="text/javascript"></script>
        <script type="text/javascript" src="http://2018.igem.org/Team:Tec-Monterrey/Javascript/SlideShow?action=raw&ctype=text/javascript"></script>
    </body>
</html>