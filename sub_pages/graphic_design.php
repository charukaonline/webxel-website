<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Company Name</title>
    <link rel="stylesheet" href="syle.css">
</head>
<header>

    <a href="index.html" class="logo">W&#x039E;&#x042;X&#x039E;L</a>

    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="#">Services</a>
        <a href="#">Contact Us</a>
        <a href="#">About Us</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#"><i class="fas fa-user" id="login-icon"></i></a>
    </div>

</header>

    <section id="hero">
        <h1>Welcome to WEBXEL</h1>
        <p>We provide top-notch graphic design services.</p>
        <a href="#contac">
            <button class="cta-button">Get in touch</button>
        </a>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>At WEBEXLL, we are passionate about turning your digital dreams into reality. Established
            with a vision
            to provide cutting-edge web development, photography, and videography services, we pride ourselves on
            delivering stunning, high-quality results that capture the essence of your brand.

            Our web development team specializes in creating modern and responsive websites that not only look great
            but also perform exceptionally well. Whether you need a personal blog, an e-commerce platform, or a
            corporate website, we have the expertise to bring your vision to life.

            Our photography and videography services are designed to capture the beauty and uniqueness of every
            moment. From professional photoshoots to cinematic videos, we have the skills and equipment to make your
            memories truly unforgettable.</p>
    </section>

    <section id="services">
        
            <h2>Our Services</h2>
            <div class="services-container">
                <div class="service-card">
                    <img src="logo_designing 2.jpg" alt="Logo Design">
                    <h3>Logo Design</h3>
                    <p>We create unique and memorable logos tailored to your brand.</p>
                </div>
                <div class="service-card">
                    <img src="download (1).jpeg" alt="Motion Graphic">
                    <h3>Motion Graphics Designer:</h3>
                    <p>We A Motion Graphics Designers needs creativity, proficiency in animation software, a strong understanding of design principles, we will give the all of it.</p>
                </div>
                <div class="service-card">
                    <img src="print-designer-1.png" alt="Print Design">
                    <h3>Print Design</h3>
                    <p>We provide high-quality print design for various marketing materials.</p>
                </div>
                <div class="service-card">
                    <img src="luca-bravo-XJXWbfSo2f0-unsplash.jpg" alt="Website Design">
                    <h3>Website Design</h3>
                    <p>We create responsive and user-friendly websites for your business.</p>
                </div>
                <div class="service-card">
                    <img src="editorial-design-laptop-original.webp" alt="Publication Designer">
                    <h3>Publication Designer</h3>
                    <p> needs layout expertise,attention to detail, and knowledge of printing. We are your guys.</p>
                </div>
                <div class="service-card">
                    <img src="Is-graphic-design-a-requirement-to-be-able-to-work-on-motion-graphics-scaled 2.jpg" alt="Graphic Design">
                    <h3>Graphic Design</h3>
                    <p>We offer comprehensive graphic design solutions for all your needs.</p>
                </div>
            </div>
        </section>
        

        <footer class="footer">
            <div class="footer_wrapper">
                <ul>
                    <li>1. New services coming late 2024.</li>
                    <li>2. We've squashed some pesky bugs to ensure a smoother and more reliable experience for all users.</li>
                    <li>3. Our team has worked on optimizing various aspects of W&#x039E;&#x042;X&#x039E;L, resulting in faster load times and improved efficiency.</li>
                </ul>
    
                <div class="footer_links">
                    <div class="footer_links_column">
                        <div class="footer_links_column_title">Services</div>
                        <a href="#">Graphics & Design</a>
                        <a href="#">Web Development</a>
                        <a href="#">Programming & Tech</a>
                        <a href="#">Video & Animation</a>
                        <a href="#">Photography</a>
                        <a href="#">Music & Audio</a>
                    </div>
    
                    <div class="footer_links_column">
                        <div class="footer_links_column_title">About</div>
                        <a href="#">Our Team</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </div>
    
                    <div class="footer_links_column">
                        <div class="footer_links_column_title">Social Media</div>
                        <a href="#"><i class='bx bxl-github'></i></a>
                        <a href="#"><i class='bx bxl-linkedin'></i></a>
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>
    
                <hr>
                
                <div class="footer-copyright">
                    <p>Copyright © W&#x039E;&#x042;X&#x039E;L 2023</p>
                </div>
    
            </div>

        
    </footer>


<script>
    // Function to handle smooth scrolling on navigation links
    const navLinks = document.querySelectorAll('nav ul li a');

    navLinks.forEach(link => {
        link.addEventListener('click', smoothScroll);
    });

    function smoothScroll(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        document.querySelector(targetId).scrollIntoView({
            behavior: 'smooth'
        });
    }

    // Function to handle form submission
    const form = document.querySelector('form');
    form.addEventListener('submit', submitForm);

    function submitForm(e) {
        e.preventDefault();
        // Add your form submission logic here
        // For example, you can use fetch() to send form data to a server
    }
    const navLinks = document.querySelectorAll('nav ul li a');

navLinks.forEach(link => {
    link.addEventListener('click', smoothScroll);
});

function smoothScroll(e) {
    e.preventDefault();
    const targetId = this.getAttribute('href');
    document.querySelector(targetId).scrollIntoView({
        behavior: 'smooth'
    });
}

// Function to handle form submission
const form = document.querySelector('form');
form.addEventListener('submit', submitForm);

function submitForm(e) {
    e.preventDefault();
    // Add your form submission logic here
    // For example, you can use fetch() to send form data to a server
}
document.querySelector('.button').addEventListener('click', () => {
            document.querySelector('.footer-links').classList.add('active');
            });
        
            document.querySelector('.footer-links').addEventListener('click', (e) => {
            if (e.target.classList.contains('footer-links-column-title')) {
                e.target.nextElementSibling.classList.toggle('active');
            }
            });
    
    <script>
    
<body>
    
</body>
</html>
