<!doctype html>
<html lang="en">

    <head>
        <!--charset-->
        <meta charset="utf-8">

        <!--browser seetings-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">

        <!--styles -->
        <link rel="stylesheet" href="/assets/css/styles.css">
        <link rel="stylesheet" href="/assets/css/baguette.css">

        <!--favicon // https://realfavicongenerator.net-->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#515151">
        <meta name="msapplication-TileColor" content="#5930e6">
        <meta name="theme-color" content="#ffffff">

        <!--seo-->
        <meta name="description" content="portfolio website of german photographer jonas pardeyke. see my latest work.">
        <meta name="author" content="Jonas Pardeyke">

        <meta name="google" content="nositelinkssearchbox">
        <meta name="google" content="notranslate">

        <title>pardeyke.com</title>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161830375-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-161830375-1');
        </script>

        <!--jsFrameworks-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="/assets/js/baguetteBox.js" async></script>
    </head>
    
    <body>
        
        <div id="nav">

            <div id="footer-bottom">
            
                <div id="logo-container">
                <img id="logo" src="/assets/logo/logo.svg" alt="jonas pardeyke logo">
                
                 <div id="burger-container">
                    <img id="burger" src="/assets/logo/burger.svg" alt="unfold menu">
                </div>
                
            </div>
            
                <div id="projects">
                    
                    <h1 id="projects-heading">projects</h1>

                    <div class="projects-elements project-1">
                        cape of good hope&ensp;<br class="break-menu"><i class="smaller">&lt;on film 2017&gt;</i>
                    </div>

                    <div class="projects-elements project-2">
                       good ol barna <br class="break-menu"><i class="smaller">&lt;on film 2019&gt;</i>
                    </div>

                    <div class="projects-elements project-3">
                        carl &amp; bob edwards <br class="break-menu"><i class="smaller">&lt; 2020&gt;</i>
                    </div>

                    <div class="projects-elements project-4">
                        early morning in cologne&ensp;<br class="break-menu"><i class="smaller">&lt;on b\w film 2020&gt;</i>
                    </div>

                    <div class="projects-elements project-5">
                       lisbon&ensp;<br class="break-menu"><i class="smaller">&lt;on film 2019&gt;</i>
                    </div>

                    <div class="projects-elements no-padding-bottom project-6">
                        birmingham &amp; manchester <br class="break-menu"><i class="smaller">&lt;on film 2020&gt;</i>
                    </div>

                </div>
                
                <div id="content-resize"></div>
                
            </div>
            
            <div id="footer">
                
                <div class="footer-element">
                    <a href="/login/" target="_blank">login</a>
                    <img src="/assets/logo/external.svg" class="external-link" alt="external link symbol">
                </div>
                
                <div class="footer-element">
                    <span id="about">about</span>
                </div>
                
                <div class="footer-element">
                    <span id="contact">contact</span>
                </div>
                
                <!--
                <div class="footer-element">
                    <span id="prints"> get prints</span>
                </div>-->
                                
                <div class="footer-element">
                    <a href="https://instagram.com/yung_shutterhand/" target="_blank" rel="noreferrer">instagram</a>
                    <img src="/assets/logo/external.svg" class="external-link" alt="external link symbol">
                </div>
                
                <div class="footer-element no-padding-bottom">
                    <span id="impressum">impressum</span>
                </div>
                
            </div>
                
        </div>

        <div id="content-full">
            
            <div id="content" class="content-web">
    
                <div id="content-main" class="content-hide content-show">

                    <div class="foto-column">
                    
                    <div class="category project-1">
                            <img src="assets/projects/1/thumbs/gallery.jpg" class="category-img" alt="project title image">
                            <span class="category-text">cape of good hope<br><i>on film 2017</i></span>
                    </div>
                    
                    <div class="category project-2">    
                            <img src="assets/projects/2/thumbs/gallery.jpg" class="category-img" alt="project title image">
                            <span class="category-text">good ol barna<br><i>on film 2019</i></span>
                    </div>
                    
                    <div class="category project-3">
                            <img src="assets/projects/3/thumbs/gallery.jpg" class="category-img" alt="project title image">
                            <span class="category-text">carl &amp; bob edwards<br><i>2020</i></span>
                    </div>
                    
                    <div class="category project-4">    
                            <img src="assets/projects/4/thumbs/gallery.jpg" class="category-img" alt="project title image">
                            <span class="category-text">early morning in cologne<br><i>on b/w film 2020</i></span>
                    </div>
                    
                    <div class="category project-5">
                            <img src="assets/projects/5/thumbs/gallery.jpg" class="category-img" alt="project title image">
                            <span class="category-text">lisbon<br><i>on film 2018</i></span>
                    </div>
                    
                    <div class="category project-6">   
                            <img src="assets/projects/6/thumbs/gallery.jpg" class="category-img" alt="project title image">
                            <span class="category-text">birmingham &amp; manchester<br><i>on film 2020</i></span>
                    </div>
                        
                    </div>
                    
                </div>
                
                <div class="project-1 content-hide foto-column">
                    
                    <?php

                    $dir_path = "assets/projects/1/";
                    $extensions_array = array('jpg','png','jpeg');

                    if(is_dir($dir_path))
                    {
                        $files = scandir($dir_path);

                        for($i = 0; $i < count($files); $i++)
                        {
                            if($files[$i] !='.' && $files[$i] !='..')
                            {
                                // get file name
                                //echo "File Name -> $files[$i]<br>";

                                // get file extension
                                $file = pathinfo($files[$i]);
                                $extension = $file['extension'];
                                //echo "File Extension-> $extension<br>";

                               // check file extension
                                if(in_array($extension, $extensions_array))
                                {
                                // show image
                                echo "<a href='$dir_path$files[$i]'><img src='$dir_path/thumbs/$files[$i]' alt='gallery image'></a>";
                                }
                            }
                        }
                    }
                    ?>
                
                </div>
                               
                <div class="project-2 content-hide foto-column">
                    
                    <?php

                    $dir_path = "assets/projects/2/";
                    $extensions_array = array('jpg','png','jpeg');

                    if(is_dir($dir_path))
                    {
                        $files = scandir($dir_path);

                        for($i = 0; $i < count($files); $i++)
                        {
                            if($files[$i] !='.' && $files[$i] !='..')
                            {
                                // get file name
                                //echo "File Name -> $files[$i]<br>";

                                // get file extension
                                $file = pathinfo($files[$i]);
                                $extension = $file['extension'];
                                //echo "File Extension-> $extension<br>";

                               // check file extension
                                if(in_array($extension, $extensions_array))
                                {
                                // show image
                                echo "<a href='$dir_path$files[$i]'><img src='$dir_path/thumbs/$files[$i]' alt='gallery image'></a>";
                                }
                            }
                        }
                    }
                    ?>

                </div>
                 
                <div class="project-3 content-hide foto-column">
                
                <?php

                    $dir_path = "assets/projects/3/";
                    $extensions_array = array('jpg','png','jpeg');

                    if(is_dir($dir_path))
                    {
                        $files = scandir($dir_path);

                        for($i = 0; $i < count($files); $i++)
                        {
                            if($files[$i] !='.' && $files[$i] !='..')
                            {
                                // get file name
                                //echo "File Name -> $files[$i]<br>";

                                // get file extension
                                $file = pathinfo($files[$i]);
                                $extension = $file['extension'];
                                //echo "File Extension-> $extension<br>";

                               // check file extension
                                if(in_array($extension, $extensions_array))
                                {
                                // show image
                                echo "<a href='$dir_path$files[$i]'><img src='$dir_path/thumbs/$files[$i]' alt='gallery image'></a>";
                                }
                            }
                        }
                    }
                    ?>
                
                </div>
                    
                <div class="project-4 content-hide foto-column">
                
                <?php

                    $dir_path = "assets/projects/4/";
                    $extensions_array = array('jpg','png','jpeg');

                    if(is_dir($dir_path))
                    {
                        $files = scandir($dir_path);

                        for($i = 0; $i < count($files); $i++)
                        {
                            if($files[$i] !='.' && $files[$i] !='..')
                            {
                                // get file name
                                //echo "File Name -> $files[$i]<br>";

                                // get file extension
                                $file = pathinfo($files[$i]);
                                $extension = $file['extension'];
                                //echo "File Extension-> $extension<br>";

                               // check file extension
                                if(in_array($extension, $extensions_array))
                                {
                                // show image
                                echo "<a href='$dir_path$files[$i]'><img src='$dir_path/thumbs/$files[$i]' alt='gallery image'></a>";
                                }
                            }
                        }
                    }
                    ?>
                
                </div>
                
                <div class="project-5 content-hide foto-column">
                
                <?php

                    $dir_path = "assets/projects/5/";
                    $extensions_array = array('jpg','png','jpeg');

                    if(is_dir($dir_path))
                    {
                        $files = scandir($dir_path);

                        for($i = 0; $i < count($files); $i++)
                        {
                            if($files[$i] !='.' && $files[$i] !='..')
                            {
                                // get file name
                                //echo "File Name -> $files[$i]<br>";

                                // get file extension
                                $file = pathinfo($files[$i]);
                                $extension = $file['extension'];
                                //echo "File Extension-> $extension<br>";

                               // check file extension
                                if(in_array($extension, $extensions_array))
                                {
                                // show image
                                echo "<a href='$dir_path$files[$i]'><img src='$dir_path/thumbs/$files[$i]' alt='gallery image'></a>";
                                }
                            }
                        }
                    }
                    ?>
                    
                </div>
                
                <div class="project-6 content-hide foto-column">
                
                <?php

                    $dir_path = "assets/projects/6/";
                    $extensions_array = array('jpg','png','jpeg');

                    if(is_dir($dir_path))
                    {
                        $files = scandir($dir_path);

                        for($i = 0; $i < count($files); $i++)
                        {
                            if($files[$i] !='.' && $files[$i] !='..')
                            {
                                // get file name
                                //echo "File Name -> $files[$i]<br>";

                                // get file extension
                                $file = pathinfo($files[$i]);
                                $extension = $file['extension'];
                                //echo "File Extension-> $extension<br>";

                               // check file extension
                                if(in_array($extension, $extensions_array))
                                {
                                // show image
                                echo "<a href='$dir_path$files[$i]'><img src='$dir_path/thumbs/$files[$i]' alt='gallery image'></a>";
                                }
                            }
                        }
                    }
                ?>
                
                </div>
                
                <div id="content-about" class="content-hide">
                    
                    <div id="about-center">
                    
                        <img id="about-pic" src="/assets/img/profile.jpg" alt="profile picture">

                        <div id="about-text">

                            <span>shooting analog, shooting digital. founder of <a href="https://kpgbr.com" class="text-link">kubeile &amp; pardeyke gbr</a>. bachelor degree in audio production. currently studing computer science. also working for german television as a sound technician. mixing all types of media from past and future - for more info see backside.</span>

                        </div>
                        
                    </div>
                </div>

                <div id="content-contact" class="content-hide">
                        
                        <div id="contact-center">
                    
                            <img src="/assets/logo/logo.svg" id="contact-logo" alt="jonas pardeyke logo">
                            <img src="/assets/logo/jp.svg" id="contact-logo-min" alt="jonas pardeyke logo">
                            <div id="contact-text">
                                <span>cologne, germany<br><a href="mailto:jonas@pardeyke.de">jonas@pardeyke.de</a><br><a href=tel:+491512331526>+49 151 23315206</a></span>
                            </div>
                    
                        </div>

                </div>

                <div id="content-impressum" class="content-hide">
                    <div class='impressum'><h2>Impressum</h2><p>Angaben gemäß § 5 TMG</p><p>Jonas Pardeyke <br> 
    Venloer Straße 601 B202<br> 
    50827 Köln <br> 
    </p><p> <strong>Vertreten durch: </strong><br>
    Jonas Pardeyke<br>
    </p><p><strong>Haftungsausschluss: </strong><br><br><strong>Haftung für Inhalte</strong><br><br>
    Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.<br><br><strong>Haftung für Links</strong><br><br>
    Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.<br><br><strong>Urheberrecht</strong><br><br>
    Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.<br><br><strong>Datenschutz</strong><br><br>
    Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben. <br>
    Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich. <br>
    Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten durch Dritte zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdrücklich widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.<br>
    <br><br><strong>Google Analytics</strong><br><br>
    Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. (''Google''). Google Analytics verwendet sog. ''Cookies'', Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglicht. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website (einschließlich Ihrer IP-Adresse) wird an einen Server von Google in den USA übertragen und dort gespeichert. Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten der Google in Verbindung bringen. Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website voll umfänglich nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.<br><br><strong>Google AdSense</strong><br><br>
    Diese Website benutzt Google Adsense, einen Webanzeigendienst der Google Inc., USA (''Google''). Google Adsense verwendet sog. ''Cookies'' (Textdateien), die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglicht. Google Adsense verwendet auch sog. ''Web Beacons'' (kleine unsichtbare Grafiken) zur Sammlung von Informationen. Durch die Verwendung des Web Beacons können einfache Aktionen wie der Besucherverkehr auf der Webseite aufgezeichnet und gesammelt werden. Die durch den Cookie und/oder Web Beacon erzeugten Informationen über Ihre Benutzung dieser Website (einschließlich Ihrer IP-Adresse) werden an einen Server von Google in den USA übertragen und dort gespeichert. Google wird diese Informationen benutzen, um Ihre Nutzung der Website im Hinblick auf die Anzeigen auszuwerten, um Reports über die Websiteaktivitäten und Anzeigen für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten der Google in Verbindung bringen. Das Speichern von Cookies auf Ihrer Festplatte und die Anzeige von Web Beacons können Sie verhindern, indem Sie in Ihren Browser-Einstellungen ''keine Cookies akzeptieren'' wählen (Im MS Internet-Explorer unter ''Extras > Internetoptionen > Datenschutz > Einstellung''; im Firefox unter ''Extras > Einstellungen > Datenschutz > Cookies''); wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website voll umfänglich nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.</p><br> 
    Impressum vom <a href="https://www.impressum-generator.de">Impressum Generator</a> der <a href="https://www.kanzlei-hasselbach.de/standorte/bonn/">Kanzlei Hasselbach, Bonn</a> </div>
                </div>
                
                <div id="content-prints" class="content-hide">
                
                    <div id="item-1">
                    
                    <div style="position:relative;">
                        
                        <img class="item-1-img" src="/assets/projects/1/gallery.jpg">
                        <img class="item-1-img" src="/assets/shop/01.jpg">
                        <img class="item-1-img" src="/assets/shop/02.jpg">
                        <img class="item-1-img" src="/assets/shop/03.jpg">
                        
                    </div>
                        
                        
                        <div id="shop-gallery">
                        
                            <img class="shop-gallery-img" src="/assets/projects/1/gallery.jpg">
                            <img class="shop-gallery-img" src="/assets/shop/01.jpg">
                            <img class="shop-gallery-img" src="/assets/shop/02.jpg">
                            <img class="shop-gallery-img" src="/assets/shop/03.jpg">
                        
                        </div>
                        
                        <div id="item-1-text">
                            antlantic <i>2017</i><br>
                            <span style="font-size: 17px;">
                            75x50cm fine art print<br>
                            hahnem&uuml;hle baryta
                            </span>
                            <span class="price">46,80€</span>
                        
                        </div>
                    
                    </div>
                    
                </div>
                
            </div>
            
        </div>

        <script>
        $(document).ready(function(){
            
            $("#burger-container, #projects-heading, .projects-elements").click(function(){
                $("#burger").toggleClass("burger-rotate"),
                $("#projects").toggleClass("projects-show"),
                window.scrollTo(0, 0);
            });
            
            $("#logo, #projects-heading").click(function(){
                $(".content-show").removeClass("content-show"),
                $("#projects").removeClass("projects-show"),
                $("#content-main").toggleClass("content-show"),
                window.scrollTo(0, 0);
            });
            
            
            
            $(".project-1").click(function(){
                $(".content-show").removeClass("content-show"),
                $(".project-1").toggleClass("content-show"),
                window.scrollTo(0, 0);
                
            });
            $(".project-2").click(function(){
                $(".content-show").removeClass("content-show"),
                $(".project-2").toggleClass("content-show"),
                window.scrollTo(0, 0);
                
            });
            $(".project-3").click(function(){
                $(".content-show").removeClass("content-show"),
                $(".project-3").toggleClass("content-show"),
                window.scrollTo(0, 0);
                
            });
            $(".project-4").click(function(){
                $(".content-show").removeClass("content-show"),
                $(".project-4").toggleClass("content-show"),
                window.scrollTo(0, 0);
                
            });
            $(".project-5").click(function(){
                $(".content-show").removeClass("content-show"),
                $(".project-5").toggleClass("content-show"),
                window.scrollTo(0, 0);
                
            });
            $(".project-6").click(function(){
                $(".content-show").removeClass("content-show"),
                $(".project-6").toggleClass("content-show"),
                window.scrollTo(0, 0);
            });
             
            
            
            $("#about").click(function(){
                $(".content-show").removeClass("content-show"),
                $("#content-about").toggleClass("content-show"),
                window.scrollTo(0, 0);
            });
            
            $("#contact").click(function(){
                $(".content-show").removeClass("content-show"),
                $("#content-contact").toggleClass("content-show"),
                window.scrollTo(0, 0);
            });
            
            $("#impressum").click(function(){
                $(".content-show").removeClass("content-show"),
                $("#content-impressum").toggleClass("content-show"),
                window.scrollTo(0, 0);
            });
            
            $("#prints").click(function(){
                $(".content-show").removeClass("content-show"),
                $("#content-prints").toggleClass("content-show"),
                window.scrollTo(0, 0);
            });
            
            
            
            if ($(window).width() <= 900){
                $("#content").prependTo("#content-resize"),
                $("#content").removeClass("content-web"),
                $("#content").addClass("content-mobile");
            }
            else{
                $("#content").prependTo("#content-full"),
                $("#content").removeClass("content-mobile"),
                $("#content").addClass("content-web");
            }
            

        });
        </script>
        
        <script>
        function runBaguette() {
            baguetteBox.run('.foto-column', {
                preload: 2,
                loop: true,
                noScrollbars: true
            });
        }
        window.onload = runBaguette;
        </script>
        
    </body>
    
</html>