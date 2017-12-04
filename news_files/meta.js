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
	var websiteMeta = {"category-schedule.html":"A list of posts in category &ldquo;Schedule&rdquo;","tag-mateus-barbosa.html":"Posts tagged &ldquo;Mateus Barbosa&rdquo;","tag-fernanda-santos.html":"Posts tagged &ldquo;Fernanda Santos&rdquo;","archive-may-2016.html":"Archives for May 2016","tag-ueslei-vasconcelos.html":"Posts tagged &ldquo;Ueslei Vasconcelos&rdquo;","3737715c5e07d3e59d44f79e81471efb-3.html":"<center>\n<b><u>MsC. Qualifying Exam Schedule<\/b><\/u><\/center>\n<p align=\"center\">￼\n<b>Ueslei Meira Vasconcelos<\/b>\nLocation: <I>Blue Auditorium of the ","0129d39a2e86c8739fb15b32cee2b8f9-2.html":"<p align=\"justify\">LEEDMOL welcomes the newest students of the Graduate Program in Chemistry of UNB, in the category of MsC. Of the new approved, two ","archive-december-2017.html":"Archives for December 2017","3d193441b452c9c74c6c6c6a8250f04e-6.html":"Launch of the site in two domains:\n\nhttp:\/\/www.leedmol.com\nhttp:\/\/www.heibbegroup.top","archive-september-2017.html":"Archives for September 2017","2767bd7269367b9287a1b82923fb3758-4.html":"<p align=\"justify\">Today, May 22, 2016 was the first day of LEEDMOL activities. We hope that this day will be a milestone for Brazilian Theoretical Ch","tag-lucio-vieira.html":"Posts tagged &ldquo;Lucio Vieira&rdquo;","category-new-members.html":"A list of posts in category &ldquo;New Members&rdquo;"};
 
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