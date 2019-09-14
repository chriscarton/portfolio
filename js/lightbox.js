let lightbox = document.querySelector('#Lightbox');
let links = document.querySelectorAll('.lightbox');
links.forEach(function(link){
	let src = link.querySelector('img').src;

	link.addEventListener('click',function(e){
		e.preventDefault();
		lightbox.classList.add('opened');

		let img = lightbox.querySelector('img');
		img.src=src;

		console.log(img.width);
	});

	lightbox.addEventListener('click',function(e){
		lightbox.classList.remove('opened');
	});
});