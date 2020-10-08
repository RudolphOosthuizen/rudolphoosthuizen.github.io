<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- css -->
        <link href="css/style.css" rel="stylesheet"/>
        <!-- scripts -->
        <script src="js/scripts.js"></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <title>Rudolph Oosthuizen CV</title>

    </head>

    <body class="body-padding">
        <!-- <div class="loader"></div> -->

        <!-- background animation -->
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>

        <!-- Heading & index -->
        <div class="row border border-info div-padding myBG rounded">
            <div class="col-2 text=left">
                <img src="img/myGesig.PNG">
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-12">
                        <h2>
                            Rudolph Oosthuizen
                        </h2>
                        <h3>
                            Curriculum Vitae
                        </h3>
                    </div>
                </div>
                <div class="row">
                <div class="col-8 text-right ">
                    <div>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button onclick="scrollToId('perLife')" type="button" class="btn btn-secondary btn-outline-primary btn-lg">Personal Life</button>
                                <button onclick="scrollToId('proLife')" type="button" class="btn btn-secondary btn-outline-success btn-lg">Professional Life</button>
                                <button onclick="scrollToId('hobEx')" type="button" class="btn btn-secondary btn-outline-danger btn-lg">Hobbies & Experiences</button>
                                <button onclick="scrollToId('preJob')" type="button" class="btn btn-secondary btn-outline-warning btn-lg">Previous Jobs</button>
                                <button onclick="scrollToId('fun')" type="button" class="btn btn-secondary btn-outline-info btn-lg">Fun Stuff</button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary btn-outline-info btn-lg " href="#" onclick="downloadPDF()">Download PDF here</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-right">
                    <p>
                        <i class="far fa-envelope"></i></i> rudolphoosthuizen42@gmail.com<br>
                        <i class="fas fa-mobile-alt"></i> +27 60 838 9684<br>
                        <i class="fas fa-home"></i> 50 Francois Street<br>
                        Miederpark, Potchefstroom<br>
                        2527
                    </p>
                </div>
            </div>
        </div>

        <br>
        <br>

        <!-- Personal Life -->
        <div id="perLife" class="row border border-primary div-padding pInfo container-fluid rounded myMargins">
            <p id="PI">
                Personal Life
            </p>
            <p>
                I am a self-motivated individual who enjoys taking on a leadership position. I am a fast learner and a creative, critical thinker. I tend to be extremely flexible, and I always welcome environments where I am challenged. I am an excellent collaborator and can confidently say that my calm and composed nature is my predominant attribute. I enjoy working with people and can effortlessly manage conflict. I am neat, well organised, and able to self-manage in a fast-paced environment.
            </p>
        </div>

        <br>
        <br>

        <!-- Professional Life -->
        <div id="proLife" class="row border border-success div-padding proInfo container-fluid rounded myMargins">
            <p id="PI">
                Professional Life
            </p>
            <p>
                CAREER OBJECTIVE<br>
                I am currently a third year B.Sc. Information Technology student studying at North West University, Potchefstroom. I intend to complete my degree by the end of 2020. I am searching for an exacting graduate program that will provide me with an opportunity to master new skills, prove my worth to the industry and gain relevant experience. Therefore, I am searching for a successful company where I can become a part of a dynamic team of employees and make a considerable contribution towards the success of the company.
            </p>
            <p>
                <h class="text-lg-right">PROFESSIONAL SKILLS<br></h>
                ▪ Fluent in English and Afrikaans and can type confidently.<br>
                ▪ Excellent communication skills both written and oral.<br>
                ▪ Able to conduct presentations and facilitation sessions.<br>
                ▪ Very diligent and trustworthy worker with sober habits.<br>
                ▪ Experience in developing effective working relationships with clients and providing indelible services.<br>
                ▪ Excellent interpersonal skills and relevant experience with customer service.<br>
            </p>
        </div>

        <br>
        <br>

        <!-- Hobbies & Experiences -->
        <div id="hobEx" class="row border border-danger div-padding HobEx container-fluid rounded myMargins">
            LIFE EXPERIENCE<br>
                Culture:                        Hombré Single Sêr (2017)<br>
                                                Hombré Culture Committee Band Co-Coach (2016 & 2017)<br>
                                                Hombré Single Sêr Top 5 (2016)<br>
                                                Hombré Bingle Sêr (2016)<br>
                                                Truida Kestell Flute Ensemble (2007-2010)<br>
                                                Truida Kestell Choir (2004-2010)<br>
                Sport:                          First Year Rugby Team Finals Hombré Men’s Hostel (2017)<br>
                                                Jukskei Inter-Provincials (2013)<br>
                Community Activities:           Member of Hombré SJGD committee (2016 & 2017)<br>
                Interests:                      Music, Hiking, Computer Gaming, Squash and Jogging<br>
        </div>

        <br>
        <br>

        <!-- Previous Jobs -->
        <div id="preJob" class="row border border-warning div-padding preJob container-fluid rounded myMargins">
            <p id="PI">
                Previous Jobs
            </p>
            <p>
                I am a self-motivated individual who enjoys taking on a leadership position. I am a fast learner and a creative, critical thinker. I tend to be extremely flexible, and I always welcome environments where I am challenged. I am an excellent collaborator and can confidently say that my calm and composed nature is my predominant attribute. I enjoy working with people and can effortlessly manage conflict. I am neat, well organised, and able to self-manage in a fast-paced environment.
            </p>
        </div>

        <br>
        <br>

        <!-- Fun Stuff -->
        <div id="fun" class="row border border-info div-padding fun container-fluid rounded myMargins">
            <p id="PI">
                Fun Stuff
            </p>
            <p>
                I am a self-motivated individual who enjoys taking on a leadership position. I am a fast learner and a creative, critical thinker. I tend to be extremely flexible, and I always welcome environments where I am challenged. I am an excellent collaborator and can confidently say that my calm and composed nature is my predominant attribute. I enjoy working with people and can effortlessly manage conflict. I am neat, well organised, and able to self-manage in a fast-paced environment.
            </p>
        </div>
            

        <br>
        <br>

        <!-- <script>
            console.log('JS is working');

            // function displayLoader(){
            //     <div class="loader"></div>
            // }

            // funtion hideLoader(){
            //     document.getElementById('loader').hidden = true;
            // }

            // function scrollToPI(){
            //     let personalInfo = document.getElementById('PI');
            //     personalInfo.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
            // }

            // function downloadPDF(){
            //     console.log('Redirecting..');
            //     window.open("pdfDownload.php");
            // }

        </script>  -->
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                                   
    </body>
</html>