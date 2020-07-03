<nav>
        
    <?php if ($_GET ['page']== 'Accueil'): ?>
        <strong><a href="index.php?page=accueil" style="color: #17c1ff">Accueil</a></strong>
    <?php else: ?>
        <a href="index.php?page=accueil">Accueil</a>
    <?php endif; ?>
</nav>
<nav>
    <?php if ($_GET ['page']== 'Programme'): ?>
        <strong><a href="index.php?page=programme"> style="color: #17c1ff">Programme</a></strong>
    <?php else: ?>
        <a href="index.php?page=programme">Programme</a>
    <?php endif; ?>
</nav>
<nav>
    <?php if ($_GET ['page']== 'contacts'): ?>
        <strong><a href="index.php?page=contact"style="color: #17c1ff">Contacts</a></strong>
    <?php else: ?>
        <a href="index.php?page=contact">Contacts</a>
    <?php endif; ?>
    <?php if ($_GET ['page']== 'contact-form'): ?>
        <strong><a href="index.php?page=contact-form"style="color: #17c1ff">Contacts</a></strong>
    <?php else: ?>
        <a href="index.php?page=contact-form">Contacts</a>
    <?php endif; ?>
</nav>