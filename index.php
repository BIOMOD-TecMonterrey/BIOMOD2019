<?php include('header.php'); ?>

<div id="page-content" display="contents">
        <!--------------------------------------------- Contenido específico de la página ------------------------------------->
        <!-- Header -->
        <header class="masthead" id="page-top"></header>

        <div class="articulo">
            <section id="overview" class="seccion-responsiva">
                <div class="body-title">Overview</div>
                <br>
                CRISPR-Cas technology has the capability of storing information. This year, iGEM team Tec-Monterrey aims to use the CRISPR-Cas system to store specific DNA sequences in the genome of <i>E. coli</i> in order to save information about the environment surrounding the bacteria. To make this possible, Cas1-Cas2 proteins, which create the protospacer acquisition in the CRISPR system, are used to insert a synthetic DNA sequence in the CRISPR array within the genome of the bacteria. This synthetic sequence is produced by a second system, called SCRIBE. The final step of our project is reading out the inserted DNA sequence. Specific primers for polymerase chain reaction (PCR) are used to amplify a section of the CRISPR array where the sequence is inserted. Taking together both systems, our project intends to act as a biological tape recorder capable of sensing external stimuli in the environment and storing their presence in the genome.
            </section>

            <div class="body-title" style="margin: 5%;">System Functionality</div>

            <section id="system" class="container-description">
                <div class="main-info-container-left">
                    <div class="main-info" style="margin-top: 0;"> <!-- Primero -->
                        The construct shown in Figure 1 codes for the SCRIBE system adaptation.
                        <br>
                        This system generates single-stranded DNA inside of living cells in response to gene regulatory signals.
                        <br>
                        It is composed of 3 main components:
                        <ul>
                            <li>
                                A reverse transcriptase protein
                            </li>
                            <li>
                                One <h4 class="azul">msr</h4> RNA moiety which acts as a primer for the RT.
                            </li>
                            <li>
                                A second RNA moiety, called <h4 class="verde">msd</h4>, which represents a template for the reverse transcriptase. This sequence contains the <h4 class="rosa">message of interest</h4>.
                            </li>
                        </ul>
                    </div>
                    <div class="main-info" style="margin-top: 5%;"> <!-- Segundo -->
                        <img class="gif" src="http://2018.igem.org/wiki/images/3/3a/T--Tec-Monterrey--Gif_RT.gif">
                        <div class="leyenda">Figure 2: Retrotranscriptase action</div>
                    </div> 
                    <br>
                    <div class="main-info" style="margin-top:25%;"> <!-- Tercero -->
                        This hybrid <h4 class="azul">RNA-ssDNA</h4> molecule contains the <h4 class="rosa">message of interest</h4>.
                        <br>
                        This message has a PAM sequence, a crucial component for the identification by the CRISPR-Cas complex. (Figure 3)
                    </div>
                    <div class="main-info" style="margin-top: 60%;"> <!-- Cuarto -->
                        <img class="gif" src="http://2018.igem.org/wiki/images/4/43/T--Tec-Monterrey--Gif_Cas1_2.gif">
                        <div class="leyenda">Figure 4: Cas 1 and Cas 2 construct</div>
                    </div>
                    <div class="main-info" style="margin-top:40%;"> <!-- Quinto -->
                        These proteins (Figure 5) have to detect the PAM sequence in order to enable their function as endonucleases, in other words, their activity to work as scissors that cut DNA sequences.
                    </div>
                    <div class="main-info" style="margin-top:20%;"> <!-- Sexto -->
                        <img class="gif" src="http://2018.igem.org/wiki/images/8/8a/T--Tec-Monterrey--Gif_Integration.gif">
                        <div class="leyenda">Figure 6: Message insertion</div>
                    </div>
                </div>
                <div class="main-info-container-right">
                    <div class="main-info" style="margin-top: 1%;"> <!-- Primero -->
                        <img class="gif" src="http://2018.igem.org/wiki/images/d/df/T--Tec-Monterrey--Design_Scribe_System.png">
                        <div class="leyenda">Figure 1: Construct for SCRIBE system</div>
                    </div>
                    <div class="main-info" style="margin-top: 28%;"> <!-- Segundo -->
                        Then, the retrotranscriptase acts on the <h4 class="verde">msd</h4> (RNA) sequence and produces a hybrid RNA-ssDNA molecule called <h4 class="azul">msDNA</h4>, as shown in Figure 2.
                     </div>
                    <div class="main-info" style="margin-top: 35%;"> <!-- Tercero -->
                        <img class="gif" src="http://2018.igem.org/wiki/images/d/d3/T--Tec-Monterrey--Cas_Video.gif">
                        <div class="leyenda">Figure 3: Message acquisition by Cas proteins</div>
                    </div>
                    <div class="main-info" style="margin-top: 28%;"> <!-- Cuarto -->
                        Here is where our beloved <h4 class="celeste">CRISPR-Cas</h4> complex comes into place. (Figure 4)
                        <br>
                        <h4 class="celeste">CRISPR-Cas</h4> is a prokaryotic immune system that protects bacteria from phages and plasmids. With this complex, <b>foreign DNA</b>, in the form of <b><i>spacers</i></b>, is incorporated into the bacteria’s genome, specifically at the  CRISPR locus. This <b><i>acquisition</i></b> of new DNA generates a memory of each “infection”.
                        <br>
                        Several Cas proteins are involved in this system, but Cas1 and Cas2 are the only proteins needed for acquisition of new spacers.
                    </div>
                    <div class="main-info" style="margin-top:20%;"> <!-- Quinto -->
                        <img src="http://2018.igem.org/wiki/images/4/42/T--Tec-Monterrey--Design_Cas1_2.png">
                        <div class="leyenda">Figure 5: Cas 1 and Cas 2 complex</div>
                    </div>
                    <div class="main-info" style="margin-top:35%;"> <!-- Sexto -->
                        Once the PAM sequence is detected, the Cas1-Cas2 complex cuts the target sequence and integrates it into the bacteria’s genome, as shown in Figure 6.
                    </div>
                </div>  
                <br class="clearBoth">       
            </section>

            <section id="references" class="seccion-responsiva">
                <div class="referencias">
                    <div class="body-title">References</div>
                    <br>
                    Sheth, R. U., Yim, S. S., Wu, F. L. & Wang, H. H. <i>Science</i>. 358, 1457–1461 (2017).
                    <br><br>
                    A. Levy et al. <i>Nature</i>. 520, 505–510 (2015).
                    <br><br>
                    S. L. Shipman et al. <i>Science</i>. 353, aaf1175 (2016).
                    <br><br>
                    E. S. Lander. <i>Cell</i>. 164, 18–28 (2016). 
                    <br><br>
                    Nuñez, J. K., Kranzusch, P. J., Noeske, J., Wright, A., Davies, C. & Doudna, J. <i>Nat. Struct. Mol. Biol</i>. 21, 528–534 (2014).
                    <br><br>
                    Díez-Villaseñor, C., Guzmán, N., Almendros, C., García-Martínez, J. & Mojica, F. J. <i>RNA Biology</i>. 10, 792-802 (2013).
                    <br><br>
                    Yosef, I., Goren, M. & Qimron, U. <i>Nucleic Acids Research</i>. 40, 5569–5576 (2012).
                    <br><br>
                    Yosef, I., Shitrit, D., Goren, M., Burstein, D., Pupko, T. & Qimron U. <i>Proceedings of the National Academy of Sciences</i>. 110, 14396-14401 (2013).
                    <br><br>
                    Nuñez, J. K. Mechanism of CRISPR–Cas Immunological Memory. (2016). Doctoral dissertation, UC Berkeley
                    <br><br>
                    Xue, C., Whitis, N., Sashital, D. <i>Molecular Cell</i>. 64, 826–834 (2016).
                    <br><br>
                    Church, G., Gao, Y., Kosuri, S. <i>Science</i>. 337, 1628 (2012).
                    <br><br>
                    Panda, D. et al. <i>3 Biotech</i>. 8, 239 (2018).
                    <br><br>
                    Farzadfard, F., Lu, T. <i>Science</i>. 346 (2014). 
                    <br>
                </div>
            </section>
        </div> <!-- Termina articulo -->
</div> <!-- Termina page-content -->

<?php include('footer.php'); ?>