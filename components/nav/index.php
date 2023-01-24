<?php
function CheckLink($path)
{
    # 
    $uri=$_SERVER['REQUEST_URI'];
    if(strpos($uri,'?')) $uri=substr($uri,0,strpos($uri,'?'));
    if($uri===$path){
        echo 'class="active-link"';
    }
}
?>
<nav>
    <div class="title">
    <h1 >YASSINE</h1></div>
    <ul>
        <li <?php CheckLink("/") ?>><a   href="/" >home</a></li>
        <li <?php CheckLink("/user") ?>><a href="/user">user</a></li>
        <li <?php CheckLink("/about") ?>><a  href="/about">about</a></li>
        <li <?php CheckLink("/contact") ?>><a  href="/contact">contact</a></li>
    </ul>
</nav>