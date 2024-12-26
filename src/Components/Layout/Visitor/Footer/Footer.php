<?php
    use App\Config\Config;
?>

<footer class="footer">
    <div>
        <div>
            <div>
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <div>
                    <span><strong>Email</strong>: info@jstemplate.net</span>
                    <span><strong>Phone</strong>: 880 123 456 789</span>
                </div>
            </div>
            <div>
                <div>
                    <h2>Quick Link</h2>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Blog</a>
                    <a href="#">Archived</a>
                    <a href="#">Author</a>
                    <a href="#">Contact</a>
                </div>
                <div>
                    <h2>Category</h2>
                    <a href="#">Lifestyle</a>
                    <a href="#">Technology</a>
                    <a href="#">Travel</a>
                    <a href="#">Business</a>
                    <a href="#">Economy</a>
                    <a href="#">Sports</a>
                </div>
            </div>
            <form>
                <div>
                    <h2>Weekly Newsletter</h2>
                    <p>Get blog articles and offers via email</p>
                </div>
                <div>
                    <label>
                        <input type="text" placeholder="Your Email">
                        <img src="<?php echo Config::getBaseUrl() .  'public/assets/images/email.svg'; ?>" alt="Ícone de email">
                    </label>
                    <button>Subscribe</button>
                </div>
            </form>
        </div>
        <div>
            <div>
                <div>
                    <img src="<?php echo Config::getBaseUrl() . 'public/assets/images/logo.svg'?>" alt="">
                </div>
                <div>
                    <h3>Meta<strong>Blog</strong></h3>
                    <p>© JS Template 2023. All Rights Reserved.</p>
                </div>
            </div>
            <div>
                <a href="">Terms of Use</a>
                <a href="">Privacy Policy</a>
                <a href="">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>
