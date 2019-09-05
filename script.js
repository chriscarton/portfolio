var app = {
	content:null,
	start:function(){
		this.link();
		this.content = document.querySelector('#Content');
	},
	link:function(){

		let button = document.querySelector('.btn');

		button.addEventListener('click',function(e){
			
			e.preventDefault();
			let url = button.href;

			app.content.classList.add('fade-out');
			
			fetch(url)
			.then(function(response){
				return response.text();
			})
			.then(function(view){
				let parser = new DOMParser();
				let doc = parser.parseFromString(view,"text/html");
				
				let content_html = doc.querySelector('#Content').innerHTML;
				
				setTimeout(function(){
					app.content.innerHTML = content_html;
					app.content.classList.add('fade-in');
				},1000);
			});
		});
	}
}
app.start();