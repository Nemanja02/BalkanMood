<html>
    <head>
       <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="style/style3.css">
        <link rel="stylesheet" type="text/css" href="style/nav.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
      <?php include 'components/nav.php'; ?>
        <!-- Wrap -->
        <div class="wrap">
          <!-- Navigacija -->
            <!-- Sadrzaj -->
        <div class="wrap-news-making">
           <div class="news-making-name">
               Napravite svoju pricu :
            </div>
           <form action="scripts/post.php" method="POST">
            
           <div class="news-making-info">
               Unesite naslov price :
           </div>
           <input type="text" name="title">
           <div class="news-making-info">Odaberi kategoriju</div>
           <select name="category">
             <option value="stars">Stars</option>
             <option value="sport">Sport</option>
             <option value="hronika">Hronika</option>
             <option value="region">Region</option>
             <option value="planeta">Planeta</option>
             <option value="zabava">Zabava</option>
           </select>
           <div class="news-making-info">
               Unesite sadrzaj price :
           </div>
            <textarea name="content" id="" cols="30" rows="10" placeholder="Unesite sadrzaj" ></textarea>
            <input class="news-confirm" type="submit" value="Napravi">
            </form>
        </div>
        
        </div>
        <!-- Footer -->
         <div class="wrap-footer">
            <div class="footer">
             <div class="footer-nav">
                <a href="#">
                 <div class="footer-tab">
                     Test
                 </div></a>
                 <a href="#">
                 <div class="footer-tab">
                     Test
                     </div></a>
                 <a href="#">
                 <div class="footer-tab">
                     Test
                     </div></a>
                 <a href="#">
                 <div class="footer-tab">
                     Test
                     </div></a>
                 <a href="#">
                 <div class="footer-tab">
                     Test
                     </div></a>
             </div>
              <div class="footer-conntact">
                  Kontaktirajte nas : support@gmail.com
              </div>
               <div class="footer-sc">
                   Pratite nas :
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
               </div>
                <div class="copyright">
                    Balkan-Mood &copy; 2019
                </div>
            </div>
        </div> 

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
             $(document).ready(function() {
    $('select').material_select();
});
        
        </script>
        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    </body>
</html>