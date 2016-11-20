<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CSC174 Project 1">
    <meta name="author" content="Gunnar Zemering, Danny Diaz-Etchevehere, Jake Socolow, Teron Russell, Ruairi Conway">

    <title>Hip Hop</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles-genre.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Dosis|Rock+Salt" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

       <?php

    $page = 'HipHop';

    include('inc/menu.inc');

    ?>

    <!-- Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="images/kanyelive.jpg" alt="Kanye">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4 top-chunk">
                <h1>Hip Hop</h1>
                <p>Hip hop music, also called hip-hop or rap music, is a music genre formed in the United States in the 1970s that consists of a stylized rhythmic music that commonly accompanies rapping, a rhythmic and rhyming speech that is chanted. It developed as part of hip hop culture, a subculture defined by four key stylistic elements: MCing/rapping, DJing/scratching, break dancing, and graffiti writing. Other elements include sampling (or synthesis), and beatboxing. (Content from <a href="https://en.wikipedia.org/wiki/Hip_hop_music">Wikipedia</a>)</p>
                
                <div id = "music">
                    <audio id = "song" src ="audio/audio1.mp3"></audio>
                    <input type = "button" class="btn btn-primary btn-lg outline" onclick="play()" value="Play">
                    <input type = "button" class="btn btn-primary btn-lg outline" onclick="stop()" value="Pause">
            </div> 
                
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well [Removed] -->
       
        <!-- /.row -->

        <!-- Info Row -->
        <div class="row middle-chunk">
            <div class="col-md-6">
                <h2>History of Hip Hop</h2>
                <p>Hip hop as music and culture formed during the 1970s when block parties became increasingly popular in New York City, particularly among African-American youth residing in the Bronx, where DJs played percussive breaks of popular songs using two turntables to extend the breaks. Hip hop's early evolution occurred as sampling technology and drum-machines became widely available and affordable. Turntablist techniques developed along with the breaks and the Jamaican toasting vocal style was used. Rapping developed as a vocal style in which the artist speaks along with an instrumental or synthesized beat. The Sugarhill Gang's 1979 song "Rapper's Delight" is widely regarded to be the first hip hop record to gain widespread popularity in the mainstream. The 1980s marked the diversification of hip hop as the genre developed more complex styles.</p>
                <p> In the 1990s, hip hop began to diversify with other regional styles emerging on the national scene, such as Southern rap and Atlanta hip hop. At the same time, hip hop continued to be assimilated into other genres of popular music. Hip hop became a best-selling music genre in the mid-1990s and the top selling genre by 1999. The popularity of hip hop music continued through the 2000s, with hip hop influences also increasingly finding their way into mainstream pop. During the mid-2000s that alternative hip hop secured a place within the mainstream, due in part to the crossover success of artists such as OutKast and Kanye West. </p>
                
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-6">

                <h2>Characteristics of Hip Hop</h2>
                <p>Rapping, also referred to as MCing or emceeing, is a vocal style in which the artist speaks lyrically, in rhyme and verse, generally to an instrumental or synthesized beat. Beats, almost always in 4/4 time signature, can be created by sampling and/or sequencing portions of other songs by a producer. They also incorporate synthesizers, drum machines, and live bands. Rappers may write, memorize, or improvise their lyrics and perform their works a cappella or to a beat. Some subgenres of hip hop, such as crunk and trap rap, however, emphasize music more than lyrics.</p>

                <p>The roots of rapping are found in African-American music and ultimately African music, particularly that of the griots of West African culture. The African-American traditions of signifyin', the dozens, and jazz poetry all influence hip hop music, as well as the call and response patterns of African and African-American religious ceremonies. Soul singer James Brown, and musical 'comedy' acts such as Rudy Ray Moore and Blowfly are often considered "godfathers" of hip hop music. </p>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Image Row -->
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive center-block img-rounded unveilImg" src="images/placeholder.png" data-src="images/kendrick.png" alt="Kendrick">
                
            </div>
          
        </div>
        <!-- /.row -->

        <hr>

        <!-- Content Row -->
        <div class="row bottom-chunk">
            <div class="col-md-3">
                <div class="hovereffect">
                    <img class="img-circle img-responsive img-center unveilImg" src="images/placeholder.png" data-src="images/kanye.jpg" alt="Kanye West">
                    <div class="overlay">
                        <h2>Kanye West</h2>
                        <a class="info" href="http://www.kanyewest.com/">More Info</a>
                    </div>
                </div>
                <p>Kanye Omari West (born June 8, 1977) is an American recording artist, songwriter, record producer, fashion designer, and entrepreneur. Raised in Chicago, West first became known as a producer for Roc-A-Fella Records in the early 2000s, producing hit singles for artists such as Jay Z and Alicia Keys. Intent on pursuing a solo career as a rapper, West released his debut album <em>The College Dropout </em> in 2004 to widespread critical and commercial success. He went on to pursue a variety of different styles on subsequent albums. In 2010, he released his acclaimed fifth album <em> My Beautiful Dark Twisted Fantasy</em>, and the following year he collaborated with Jay Z on the joint LP <em>Watch the Throne</em> (2011). His seventh album, <em>The Life of Pablo</em>, was released in 2016.</p>
                <a class="btn btn-default" href="https://www.amazon.com/Kanye-West/e/B000APR990/ref=sr_ntt_srch_lnk_1?qid=1479659708&sr=1-1">Buy the Music</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-3">
                <div class="hovereffect">
                    <img class="img-circle img-responsive img-center unveilImg" src="images/placeholder.png" data-src="images/dannybrown.jpg" alt="Danny Brown">
                    <div class="overlay">
                        <h2>Danny Brown</h2>
                        <a class="info" href="http://xdannyxbrownx.com/">More Info</a>
                    </div>
                </div>
                 <p>Daniel Dewan Sewell (born March 16, 1984), better known as Danny Brown, is an American hip hop recording artist from Detroit, Michigan. He is best known for his individuality, being described by MTV as "one of rap's most unique figures in recent memory". In 2010, after amassing several mixtapes, Brown released his debut studio album, <em>The Hybrid</em>. Brown began to gain major recognition after the release of his second studio album, <em>XXX</em>, which received critical acclaim and earned him such accolades as <em>Spin</em> as well as <em>Metro Times</em>' "Artist of the Year".</p>
                <a class="btn btn-default" href="https://www.amazon.com/Danny-Brown/e/B00H8RN7ZI/digital/ref=ntt_mp3_rdr?_encoding=UTF8&sn=d">Buy the Music</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-3">
                <div class="hovereffect">
                    <img class="img-circle img-responsive img-center unveilImg" src="images/placeholder.png" data-src="images/outkast.jpg" alt="Outkast">
                    <div class="overlay">
                        <h2>Outkast</h2>
                        <a class="info" href="http://www.outkast.com/">More Info</a>
                    </div>
                </div>
                <p>OutKast was an American hip hop duo formed in 1992, in East Point, Atlanta, Georgia, composed of Atlanta-based rappers André "André 3000" Benjamin (formerly known as Dré) and Antwan "Big Boi" Patton. Achieving both critical acclaim and commercial success in the 1990s and early 2000s, the duo helped popularize Southern hip hop styles while developing distinctive personas and an idiosyncratic sound that incorporated genres such as funk, psychedelia, techno, and gospel. The duo is one of the most successful and critically acclaimed hip-hop groups of all time, with publications such as <em>Rolling Stone</em> and <em>Pitchfork</em> listing albums such as <em>Aquemini</em> and <em>Stankonia</em> among the best of their era.</p>
                <a class="btn btn-default" href="https://www.amazon.com/OutKast/e/B000ARC59W/digital/ref=ntt_mp3_rdr?_encoding=UTF8&sn=d">Buy the Music</a>
            </div>
            <div class="col-md-3">
                <div class="hovereffect">
                    <img class="img-circle img-responsive img-center unveilImg" src="images/placeholder.png" data-src="images/deathgrips.jpg" alt="Death Grips">
                    <div class="overlay">
                        <h2>Death Grips</h2>
                        <a class="info" href="https://soundcloud.com/deathgrips">More Info</a>
                    </div>
                </div>
               <p>Death Grips is an experimental hip hop group from Sacramento, California, formed in 2010. The group consists of rapper/vocalist Stefan Burnett, known by his stage name MC Ride, drummer and producer Zach Hill, and co-producer Andy Morin. The band has featured guitarist Nick Reinhart of Tera Melos on their albums Fashion Week, Jenny Death and Bottomless Pit. The band's music has been characterized as drawing on hip hop, industrial, punk, electronic and noise music. In 2015, <em>The Skinny</em> called them "the first truly important band of the twenty-first century".</p>
                <a class="btn btn-default" href="https://www.amazon.com/Death-Grips/e/B007R6YITY/digital/ref=ntt_mp3_rdr?_encoding=UTF8&sn=d">Buy the Music</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
    <?php

    $page = 'home';

    include('inc/footer.inc');

    ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src = "js/myscripts.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.unveil.js"></script>

    <script>
   
       $(document).ready(function() {
          
          $(".unveilImg").unveil(0, function() {
              $(this).load(function() {
                this.style.opacity = 1;
              });
            });
        });
    
    </script>

</body>

</html>
