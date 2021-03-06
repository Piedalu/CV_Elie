<?php
require 'lessc.inc.php';

try {
     lessc::ccompile('CV_style.less', 'CV.css');
} catch (exception $ex) {
     exit('lessc fatal error:
     '.$ex->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="CV.css">
        <title>Élie Deilhes - Curiculum Vitae</title>
    </head>

    <body>
    
        <header id="titre_principal">
        	<p><img src="images/Photo_Elie.jpg" alt="Photo de Élie Deilhes" id="photo" /></p>
            <h1>Élie Deilhes</h1>
            <h2>Développeur web</h2>
        </header>
        
        <nav>
            <a href="#Competences">Compétences</a>
            <a href="#Experience">Expérience</a>
            <a href="#Formation">Formation</a>
            <a href="#Interets">Intérêts</a>
        </nav>

        <div id="liens">
            <h1>Pour me joindre</h1>
            <address>
                <p>Élie Deilhes</br>
                3049 rue Ratté</br>
                St-Augustin (QC)</br>
                G3A 2M3</p>
            </address>
            <ul>
                <li><img src="images/courriel.jpg" alt="Courriel" class="icone"/><a href="mailto:elie.deilhes.1@ulaval.ca">Courriel</a></li>
                <li><img src="images/linkedin.jpg" alt="LinkedIn" class="icone"/><a href= "http://www.linkedin.com/in/eliedeilhes/"http://>Mon profil LinkedIn</a></li>
                <li><img src="images/tel.png" alt="Téléphone" class="icone"/>Tel: 418-525-9792</li>
                <li><img src="images/cell.png" alt="Cellulaire" class="icone"/>Cell: 418-440-6215</li>
            </ul>
        </div>

        <div id="contenu">
            <section id="Competences">
            	<header>
                	<h1>Compétences</h1>
            	</header>
                
            	<dl>
                	<dt>HTML</dt>
                    <dd>95%</dd>
                    <dt>HTML</dt>
                    <dd>90%</dd>
                    <dt>Javascript</dt>
                    <dd>65%</dd>
                </dl>
                
            </section>
            
            <section id="Experience">
            	<header>
                	<h1>Expérience</h1>
            	</header>

                <article>
                	<div class = "contenu">
                        <h1><img src="images/Artmerik_Logo.png" alt="GSK" class="logo" title="Logo Artmérik"/>Programmeur web</h1>
                        <h2>Artmérik International</h2>
                        <ul>
                            <li>Découper et intégrer des maquettes au format XHTML et CSS</li>
                            <li>S’assurer du respect des normes et de la compatibilité d’affichage pour les  différents navigateurs</li>
                            <li>Administration back-end d'un site Joomla</li>
                        </ul>
                    </div>
                </article>
            
                <article>
                	<div class = "contenu">
                        <h1><img src="images/gskLogo2.png" alt="GSK" class="logo" title="Logo GSK"/>Technicien en Support Industriel</h1>
                        <h2>GSK Vaccins</h2>
                        <h3></h3>
                        <ul>
                        	<li>Réaliser les différentes étapes de production de l'usine pilote</li>
                            <li>Rédiger et réviser des procédures normalisées</li>
                            <li>Participer à des projets d'amélioration continue (LEAN)</li>
                            <li>Former les nouveaux arrivants dans le département</li>
                            <li>Résoudre des problèmes</li>
                        </ul>
                    </div>
                    <aside class="realisation">
                        <h1>Présentation d'accueil SST</h1>
                        <p>Monté une présentation d'accueil du département, incluant des capsules vidéos sur les risques SST spécifiques. Résultat salué par les gestionnaires</p>
                    </aside>
                    <aside class="realisation">
                        <h1>Sas matériel</h1>
                        <p>Réalisé un projet de sas matériel (dans un contexte règlementé) qui a permis de diminuer les déplacements de personnel ainsi que les risques de contamination reliés</p>
                    </aside>
                </article>
                
                <article>
                	<div class = "contenu">
                        <h1><img src="images/gskLogo2.png" alt="GSK" class="logo" title="Logo GSK"/>Technicien de Production</h1>
                        <h2>GSK Vaccins</h2>
                        <ul>
                            <li>Travailler en conditions aseptiques</li>
                            <li>Gérer les étapes de fin de production journalière (vérification, nettoyage, réconciliation)</li>
                            <li>GMP</li>
                        </ul>
                    </div>
                </article>
            </section>
            
            <section id="Formation">
            	<header>
                	<h1>Formation</h1>
            	</header>
            
                <article>
                	<div class = "contenu">
                        <h1><img src="images/ul_logo2.png" alt="U Laval" class="logo" title="Logo Université Laval"/>Certificat en informatique</h1>
                        <h2>Université Laval</h2>
                        <ul>
                            <li>spécialisation en analyse et bases de données</li>
                            <li>projet d'étude Magento</li>
                        </ul>
                    </div>
                    <aside class="cours">
                        <h1>Cours suivis</h1>
                        <ul>
                            <li>Algorithmique et programmation</li>
                            <li>Structure interne des ordinateurs</li>
                            <li>Structures de données</li>
                            <li>Modèles et langages des bases de données</li>
                            <li>Analyse et conception des systèmes orientés objets</li>
                            <li>Systèmes et technologies de l'information</li>
                            <li>Informatique d'enquête</li>
                            <li>Analyse et conception de systèmes d'information</li>
                            <li>Technologie pour les affaires électroniques</li>
                        </ul>
                    </aside>
                </article>
                
            </section>
            
            <section id="Interets">
              <header>
                  <h1>Intérêts</h1>
              </header>
            
              <article>
                  <h1>Intérêts reliés à l'informatique</h1>
                  <ul>
                      <li>Prezi</li>
                      <li>Applications mobile (Cocoa, Android)</li>
                  </ul>
              </article>
                
            </section>
            <div id="vide"></div>
        </div>
        <footer>
            
        </footer>
            
    </body>
</html>