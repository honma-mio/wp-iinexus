<footer>
            <div class="footer_wrap">
                <div class="footer_wrap_top">
                    <div class="footer_wrap_top_list">
                        <div class="footer_wrap_top_list_title"><a href="<?php echo home_url(); ?>/about">会社概要</a></div>
                        <div class="footer_wrap_top_list_text">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/about/about-message">トップメッセージ</a></li>
                                <li><a href="<?php echo home_url(); ?>/about/about-employee">社員紹介</a></li>
                                <li><a href="<?php echo home_url(); ?>/about/about-office">オフィス紹介</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_wrap_top_list">
                        <div class="footer_wrap_top_list_title"><a href="<?php echo home_url(); ?>/service">サービス</a></div>
                        <div class="footer_wrap_top_list_text">
                            <ul>                            
                                <li><a href="<?php echo home_url(); ?>/service/service-ses">SES</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-agency">有料職業紹介</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-infrastructure">インフラ構築事業</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-itsupport">ITサポート事業</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-development">ラボ開発</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/service-freelance">フリーランサー</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_wrap_top_list">
                        <div class="footer_wrap_top_list_title"><a href="<?php echo home_url(); ?>/recruit">採用情報</a></div>
                        <div class="footer_wrap_top_list_text">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/recruit/recruit-schedule">働き方事例</a></li>
                                <li><a href="<?php echo home_url(); ?>/recruit/recruit-qa">FAQ</a></li>
                                <li><a href="<?php echo home_url(); ?>/recruit/recruit-welfare">福利厚生</a></li>
                                <li><a href="<?php echo home_url(); ?>/recruit/recruit-newgraduate">新卒採用</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_wrap_top_list">
                        <div class="footer_wrap_top_list_title"><a href="<?php echo home_url(); ?>/news">ニュース</a></div>
                        <div class="footer_wrap_top_list_text">
                            <ul>
                                <li><a href="https://qiita.com/jinyogi" target="_blank">開発ブログ</a></li>
                            </ul>
                        </div>
                        <div class="footer_wrap_top_list_sub">
                            <p><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></p>
                            <!--<p><a href="">한국어</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="footer_wrap_bottom">
                    <div class="footer_wrap_bottom_sns">
                        <ul>
                            <li><a href="https://www.facebook.com/iinexuscoltd" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a></li>
                            <li><a href="https://twitter.com/iinexus_sns" target="_blank"><i class="fab fa-twitter-square fa-3x"></i></a></li>
                            <li><a href="" target="_blank"><i class="fab fa-line fa-3x"></i></a></li>
                            <li><a href="https://www.instagram.com/iinexus.inc/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer_wrap_bottom_list">
                        <ul>
                            <li><a href="<?php echo home_url(); ?>/footer-policy">個人情報方針</a></li>
                            <li><a href="<?php echo home_url(); ?>/footer-security">セキュリティ方針</a></li>
                            <li><a href="<?php echo home_url(); ?>/footer-partner">パートナー募集</a></li>
                            <li><a href="<?php echo home_url(); ?>/footer-antsocial">反社会的勢力への対応に関する基本方針</a></li>
                        </ul>
                    </div>
                    <div class="footer_wrap_bottom_mark">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SSL.png" height="50" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pmark.png" height="50" alt="">
                    </div>
                    <p>©2020 IINEXUS Co. Ltd. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>