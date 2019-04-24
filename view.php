<?php  
    session_start();
    $key = $_GET['viewkey'];
    include 'scripts/user.php';
    include 'scripts/timeformat.php';
    function getPost($key) {
        global $database;
        $page = $database->select('posts', [
            'title', 'content', 'posted_by', 'posted_at', 'comments'
        ], [
            'post_id' => $key
        ]);
        if (count($page) == 0) header('location: 404.php');
        return $page[0];
    }

    function getRandom() {
        global $database;
        $page = $database->query('SELECT title, content, post_id FROM posts ORDER BY RAND() LIMIT 3')->fetchAll();
        return $page;
    }

    function getCover($content) {
        $result = preg_match_all('/<img.*?src\s*=.*?>/', $content, $matches, PREG_SET_ORDER);
        $matches = $matches[0][0];
        preg_match('/src="([^"]+)/i',$matches, $image);
        $origImageSrc = str_ireplace( 'src="', '',  $image[0]);
        return $origImageSrc;
    }
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style/nav.css">
        <link rel="stylesheet" href="style/style2.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
      <?php include 'components/nav.php'; ?>
        <div class="wrap">
          <!-- Navigacije -->
            <!-- Wrap vesti -->
            <div class="wrap-news-page">
               <!-- Naslov vesti -->


               <?php 
                    $page = getPost($_GET['viewkey']);
                    echo '<div class="news-page-name">'.$page['title'].'</div>';
                    echo '<div class="news-page-info"><i class="fas fa-user"></i>&nbsp;'.getUsername($page['posted_by']).'</div>';
                    echo '<div class="news-page-info"><i class="far fa-clock"></i>&nbsp;'.timeformat($page['posted_at']).'</div>';
                    echo '<div class="news-page-info"><i class="fas fa-comments"></i>&nbsp;0</div>';
                    echo '<div class="clear"></div><br>';
                    echo '<div class="wrap-news-page-content">'.$page['content'].'</div>';
               ?>




            <!-- Dodatne vesti -->
            <div class="featured">
                <?php 
                    $posts = getRandom();
                    foreach ($posts as $post) {
                        echo '
                            <a href="?viewkey='.$post['post_id'].'">
                            <div class="featured-news">
                                <div class="featured-pic">
                                    <img src="'.getCover($post['content']).'" alt="">
                                </div>
                                    <div class="featured-subject">
                                    '.$post['title'].'
                                </div>
                            </div></a>
                        ';
                    }
                ?>
            </div>
            <!-- Komentari -->
            <div class="comment-section">
            <?php  
                if (isset($_SESSION['uuid'])) {
                    echo '
                    <div class="add-comment">
                        Dodajte Komentar...
                    </div>
                    <form action="">
                    <input type="text" placeholder="Unesite Komentar" id="value">
                    <i class="material-icons" id="post">send</i>
                    </form>
                    <div id="append"></div>
                    ';
                }
            ?>
            <?php  
                $conn = mysqli_connect('localhost', 'root', '', 'rampage');
                $id = $_GET['viewkey'];
                $comments = $conn->query("SELECT comments FROM posts WHERE post_id = $id")->fetch_assoc();
                $comments = json_decode($comments['comments']);
                for ($i = count($comments)-1; $i >= 0; $i--) {
                    $data = json_decode($comments[$i]);
                    echo '
                        <div class="comment">
                            <div class="comment-icon">
                                <img src="https://europacity.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="">
                            </div>
                            <div class="comment-time">
                                '.timeformat($data->time).'
                            </div>
                            <div class="comment-user">
                                '.getUsername($data->user).'
                            </div>
                            <div class="wrap-comment-info">
                                '.$data->msg.'
                            </div>
                        </div>
                    ';
                }
            ?>
            </div>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="resources/inc/velocity.js"></script>
<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
        $("#post").on('click', function(){
            var val = $("#value").val();
            var user = "<?php echo $_SESSION['uuid'] ?>";
            var id = <?php echo $_GET['viewkey']; ?>;
            $.post("scripts/comment.php", { 
                    id: id,
                    uuid: user,
                    msg: val
                } 
            );
            $("#append").prepend('<div class="comment"><div class="comment-icon"><img src="https://europacity.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt=""></div><div class="comment-time">'+"<?php echo timeformat(time()) ?>"+'</div><div class="comment-user">'+"<?php echo $_SESSION['username']; ?>"+'</div><div class="wrap-comment-info">'+val+'</div></div>');
            $("#comment").slideToggle();
        });
    </script>


    </body>
</html>