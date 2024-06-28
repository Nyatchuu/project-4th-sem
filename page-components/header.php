<header>
    <nav>
        <h2><a href="/project-4th/pages/index.php">Traveller</a></h2>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="/project-4th/pages/services.php">Services</a></li>
            <li><a href="/project-4th/pages/about-us.php">About Us</a></li>
            <li><a href="/project-4th/pages/packages.php">Packages</a></li>
            <li><a href="/project-4th/pages/contact.php">Contact Us</a></li>
            <li><a href="/project-4th/login_system/logout.php">logout</a></li>
        
        </ul> 
        <ul>
            <li class="hideOnMobile"><a href="/project-4th/pages/services.php">Services</a></li>
            <li class="hideOnMobile"><a href="/project-4th/pages/about-us.php">About Us</a></li>
            <li class="hideOnMobile"><a href="/project-4th/pages/packages.php">Packages</a></li>
            <li class="hideOnMobile"><a href="/project-4th/pages/contact.php">Contact Us</a></li>
            <li class="hideOnMobile"><a href="/project-4th/login_system/logout.php">logout</a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>       
    </nav>
</header>
<script>
    function showSidebar(){
        const sidebar = document.querySelector('.sidebar');
        sidebar.style.display = 'flex';
    }
    function hideSidebar(){
        const sidebar = document.querySelector('.sidebar');
        sidebar.style.display = 'none';
    }
</script>
