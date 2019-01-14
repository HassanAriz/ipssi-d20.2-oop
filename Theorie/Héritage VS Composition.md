## Héritage VS Composition

	L'héritage est une méthode qui permet, lors de la déclaration d’une 
	nouvelle classe, d'y inclure les caractéristiques d’une autre classe. 
	Pourtant, il est souvent recommandé d'utiliser la comosition à l'instar de 
	l'héritage.  la composition permet de définir une entité comme étant liée 
	à plusieurs entités de classe différentes, il s'agit plus précisément de 
	l'agrégation. La comosition se caractèrise par trois points: la durée de vie, 
	l'exclusivité et la notion d'appartenance.
	La principale différence entre la composition et l'héritage est que la 
	composition permet la réutilisation du code sans hériter la classe mère malgré 
	le fait que l’héritage et la composition permettent de réutilisater du code. 
	Toutefois, pour l’héritage il faut hériter la classe mère pour pouvoir 
	réutilier du code ou des fonctionnalité, ce qui confère un avantage à la 
	composition. De plus la composition permet la réutilisation du code dans une 
	classe finale contarirement à l'héritage. Aussi la composition nous offre la 
	possibilité d'utiliser encore le code de nombreuses classes puisqu'elles sont 
	déclarées comme une simple variable membre. En revanche, l'héritage,ne nous 
	permet de réutiliser le code que d’une seule classe car dans certains langages 
	de programmation comme le Java ou le PHP, on ne peut hériter qu’une seule 
	classe. Il existe d'autres raisons qui poussent à utiliser la composition 
	plutôt que l'héritage. Il est plus naturel de créer des classes de domaine 
	métier à partir de divers composants que d'essayer de trouver des points 
	communs entre elles et de créer un arbre généalogique. Enfin elle évite les 
	soucis généralement liés à des modifications relativement mineures d'un modèle 
	basé sur l'héritage qui inclut plusieurs générations de classes.
	Cependant il y'a certains inconvénients à utiliser la composition. Un example
	 est que les méthodes fournies par les composants individuels doivent parfois 
	 être implémentées dans le type dérivé, même s'il ne s'agit que de méthodes de 
	 transfert tandis que l'héritage n'a pas besoin pas que toutes les méthodes de 
	 la classe de base soient à nouveau implémentées dans la classe dérivée. Au 
	 lieu de cela, la classe dérivée doit seulement implémenter les méthodes ayant 
	 un comportement différent de celui des méthodes de la classe de base, ce qui 
	 demande beaucoup moins d'effort de programation au cas ou la classe de base 
	 contenait beaucoup de méthodes fournissant un comportement par défaut. 
	Il faut conclure que la composition est en effet à privilègier par rapport à 
	l'héritage exepté pour certains cas.
	