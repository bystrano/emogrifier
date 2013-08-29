Emogrifier
==========

Emogrifier permet de "inliniser" du css. On lui donne du html et une feuille de style, et il insère automatiquement des styles inlines dans le html. C\'est utile pour les newsletters, comme certains clients mails ne lisent pas les feuilles de style mais acceptent les styles inline.

Ce plugin fournit un filtre que l'on peut utiliser directement dans les squelettes. P.ex. si l'on termine son template de newsletter par 

    #FILTRE{emogrifier}

Le filtre ira automatiquement chercher le fichier `css/newsletter.css` et l'appliquera à la newsletter. Le deuxième paramètre du filtre permet de choisir un autre fichier css.
