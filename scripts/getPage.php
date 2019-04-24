<?php  
    function getPost($key) {
        include 'database.php';
        $page = $database->select('posts', [
            'title', 'content', 'posted_by', 'posted_at', 'comments'
        ], [
            'post_id' => $key
        ]);
        if (count($page) == 0) header('location: 404.php');
    }
?>
                <div class="news-page-name">
                    "DANAS NEĆE BITI NIŠTA" Vučić o protestima opozicije, Kosovu i "motkama u školi Drinka Pavlović"
                </div>
                <!-- Informacije o vestima -->
                <div class="news-page-info">
                 <i class="fas fa-user"></i>&nbsp;Username
                </div>
                <div class="news-page-info">
                    <i class="far fa-clock"></i>&nbsp;5 mins ago
                </div>
                <div class="news-page-info">
                    <i class="fas fa-comments"></i>&nbsp;23
                </div>
                <div class="clear"></div>
                <!-- Sadrzaj vesti -->
                <div class="wrap-news-page-content">
                <img src="https://s-ec.bstatic.com/images/hotel/max1024x768/400/40031563.jpg" alt="" class="news-page-photo">
                <div class="news-page-content">
                    - Izbacuju odbornike, legalno izabrane predstavnike građana, jer ne mogu da trpe da ti ljudi sede na mestu na kojem su izbrani. Odbornici nikoga nisu ometali niti ugrožavali i ničiju vlast nisu hteli da otmu, samo su sedeli. A onda su došli huligani i batinaši da ih izbace, to je slika i prilika njihove vlasti - poručio je Vučić.
                </div>
                <img src="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="news-page-photo">
                <div class="news-page-content">Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain me be. So landlord by we unlocked sensible it. Fat cannot use denied excuse son law. Wisdom happen suffer common the appear ham beauty her had. Or belonging zealously existence as by resources.
                 </div>
                 <div class="news-page-content">
                     You vexed shy mirth now noise. Talked him people valley add use her depend letter. Allowance too applauded now way something recommend. Mrs age men and trees jokes fancy. Gay pretended engrossed eagerness continued ten. Admitting day him contained unfeeling attention mrs out. 
                 </div>
                 <div class="news-page-content">
                     Far quitting dwelling graceful the likewise received building. An fact so to that show am shed sold cold. Unaffected remarkably get yet introduced excellence terminated led. Result either design saw she esteem and. On ashamed no inhabit ferrars it ye besides resolve. Own judgment directly few trifling. Elderly as pursuit at regular do parlors. Rank what has into fond she. 
                 </div>
                 </div>