var app = {
	start:function(){
		this.link();
		
	},
	link:function(){

		let button = document.querySelector('.btn');

		button.addEventListener('click',function(e){
			e.preventDefault();
			//alert('click');

			let url = button.href;
			//alert(url);

			if(window.fetch){
				fetch(url)
				.then(function(response){
					return response.text();
				})
				.then(function(view){
					

					var parser = new DOMParser();
					var doc = parser.parseFromString(view,"text/html");
					
					var content_html = doc.querySelector('#Content').innerHTML;
					//Bon là j'ai ce qu'il faut
					app.switch(content_html);
					

				});
			}

		});
	},
	switch:function(content_html){
		console.log('switch!');
	}
}
app.start();