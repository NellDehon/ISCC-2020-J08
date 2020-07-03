<nav>
        
    <?php if ($_GET['page'] == 'Accueil'): ?>
        <strong><a href="index.php?page=accueil" style="color: #17c1ff">Accueil</a></strong>
    <?php else: ?>
        <a href="index.php?page=accueil">Accueil</a>
    <?php endif; ?>
</nav>
<nav>
    <?php if ($_GET['page'] == 'Programme'): ?>
        <strong><a href="index.php?page=programme"style="color: #17c1ff">Programme</a></strong>
    <?php else: ?>
        <a href="index.php?page=programme">Programme</a>
    <?php endif; ?>
</nav>
<nav>
    <?php if ($_GET['page']== 'Contacts'): ?>
        <strong><a href="index.php?page=contacts"style="color: #17c1ff">Contacts</a></strong>
    <?php else: ?>
        <a href="index.php?page=contacts">Contacts</a>
    <?php endif; ?>
</nav> 
<nav>
    <?php if ($_GET['page'] == 'contact'): ?>
        <strong><a href="index.php?page=contact-form"style="color: #17c1ff">contact-form</a></strong>
    <?php else: ?>
        <a href="index.php?page=contact-form">Contact</a>
    <?php endif; ?>
</nav> 