<footer id="footer">
    <div class="container">
        <section>
            <article class="col-1">
                <h3>Contact</h3>
                <ul>
                    <li class="address"><a href="#">Jl. Jend. Ahmad Yani No. 52 A<br>Kupang, NTT 85225</a></li>
                    <li class="mail"><a href="#">smpkatolik_sttheresia@yahoo.co.id</a></li>
                    <li class="phone last"><a href="#">0380 825788</a></li>
                </ul>
            </article>
            <article class="col-2">
                <h3>Upcoming Events</h3>
                <ul>
                    <section class="posts-con">
    					<?php
    						if (isset($upcomingEvent)) {
    							foreach ($upcomingEvent as $event) {
    								echo "
    									<li>
    											<a href='events'>$event->eventTitle</a>
    									</li>
    								";
    							}
    						}
    					?>
    				</section>
                </ul>
            </article>
        </article>
        <article class="col-2">
            <h3>Newest News</h3>
            <ul>
                <section class="posts-con">
                    <?php
                        if (isset($upcomingEvent)) {
                            foreach ($upcomingEvent as $event) {
                                echo "
                                    <li>
                                            <a href='events'>$event->eventTitle</a>
                                    </li>
                                ";
                            }
                        }
                    ?>
                </section>
            </ul>
        </article>
            <article class="col-3">
                <h3>Social media</h3>
                <p>Temporibus autem quibusdam et aut debitis aut rerum necessitatibus saepe.</p>
                <ul>
                    <li class="facebook"><a href="https://www.facebook.com/pages/Smpk-St-Theresia/160440924023924?ref=br_rs">Facebook</a></li>
                    <li class="google-plus"><a href="https://plus.google.com/100433186432864202955">Google+</a></li>
                </ul>
            </article>
        </section>
        <p class="copy">Copyright 2018 SMPK ST. THERESIA KUPANG. All rights reserved.</p>
    </div>
    <!-- / container -->
</footer>
<!-- / footer -->
