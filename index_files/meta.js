(function() {
	var Realmac = Realmac || {};

	Realmac.meta = {
		
		// Set the browser title
		//
		// @var String text
		setTitle: function(text) {
			return document.title = text;
		},
		
		// Set the content attribute of a meta tag
		//
		// @var String name
		// @var String content
		setTagContent: function(tag, content){
			// If the tag being set is title
			// return the result of setTitle
			if ( tag === 'title' )
			{
				return this.setTitle(content);
			}
			
			// Otherwise try and find the meta tag
			var tag = this.getTag(tag);
			
			// If we have a tag, set the content
			if ( tag !== false )
			{
				return tag.setAttribute('content', content);
			}
			
			return false;
		},
		
		// Find a meta tag
		//
		// @var String name
		getTag: function(name) {
			var meta = document.querySelectorAll('meta');
			
			for ( var i=0; i<meta.length; i++ )
			{
				if (meta[i].name == name){
					return meta[i];
				}
			}
			
			var tag = document.createElement('meta');
			tag.name = name;
			document.getElementsByTagName('head')[0].appendChild(tag);
			
			return tag;
		}
	};
 
	// Object containing all website meta info
	var websiteMeta = {"archive-2017.html":"Archives for 2017","ea26845095deb7b7b29f87832aafd5ce-4.html":"<center>￼\n<b><i>Charge-tagged N-heterocyclic carbenes (NHC): Direct transfer from ionic liquid solutions and long-lived nature in the gas phase<\/b><\/i","tag-fernanda-santos.html":"Posts tagged &ldquo;Fernanda Santos&rdquo;","be0b1363912046f213e39d0534fddd51-2.html":"<center>￼￼\n<b><i>Rovibrational spectroscopic constants of the interaction between ammonia and metallo-phthalocyanines: a theoretical protocol for ammo","beeeb397cd50f7367fe2d3b61cf9269f-8.html":"<p align-\"center\"><b>Title:<\/b> <i>\"Viabilidade Termodinâmica da Modificação do Band Gap de Folhas de Grafeno por Intermédio de Cátions Alcalinos: Uma","0f02de3ed0b3406b082ac20e1319dcce-1.html":"<center>￼￼\n<b><i>Deformed transition-state theory: Deviation from Arrhenius behavior and application to bimolecular hydrogen transfer reaction rates i","category-publications.html":"A list of posts in category &ldquo;Publications&rdquo;","archive-2016.html":"Archives for 2016","b603191105103471a3b5449be5d7bc5e-0.html":"Theme: Desenvolvimento de Métodos Fisicamente Inspirados para Cálculos de Ótica Não-Linear e Efeitos de Solventes nas Propriedades Óticas Não-Lineares","tag-ueslei-vasconcelos.html":"Posts tagged &ldquo;Ueslei Vasconcelos&rdquo;","category-prizes.html":"A list of posts in category &ldquo;Prizes&rdquo;","c73dc42cfab0c49d1da012ba63b5bb8c-9.html":"<p align-\"center\"><b>Title:<\/b> <i>\"Efeito Anomérico em Rearranjos de Hurd Claisen e Investigações Termocinéticas de seus Estados de Transição Early e","f74a6fd6abeb438dd001388d401a4a95-6.html":"<center>￼\n<b><i>A novel analytical potential function for dicationic diatomic molecular systems based on deformed exponential function<\/b><\/i><\/center","b247965af895e1c2e0a9d07782b57e3e-5.html":"<center>￼\n<b><i>Effect of the crystalline environment on the third-order nonlinear optical properties of L-arginine phosphate monohydrate: a theoretic","e320f8dc4f6c630aa4df897cb040221f-7.html":"<center>￼￼\n<b><i><\/I>Strong Solvent Effects on the Nonlinear Optical Properties of Z and E Isomers from Azo-Enaminone Derivatives<\/b><\/center>\n<p alig","category-defenses.html":"A list of posts in category &ldquo;Defenses&rdquo;","tag-thiago-lopes.html":"Posts tagged &ldquo;Thiago Lopes&rdquo;","tag-daniel-machado.html":"Posts tagged &ldquo;Daniel Machado&rdquo;","3824308a201a308c2719b2fbd409ed17-3.html":"<center>￼\n<b><i>Synthesis, structural characterization and computational study of a novel amino chalcone: a potential nonlinear optical material<\/b><\/","tag-heibbe-oliveira.html":"Posts tagged &ldquo;Heibbe Oliveira&rdquo;"};
 
	// pageId must match the key in websiteMeta object
	var url = window.location.pathname;
	var pageId = url.substring(url.lastIndexOf('/')+1);
	if (!pageId || pageId.length == 0){
		pageId = 'index.html';
	}
	pageMeta = websiteMeta[pageId];
 
	// If we have meta for this page
	if (pageMeta){
		Realmac.meta.setTagContent('description', pageMeta);
	}
 
 })();