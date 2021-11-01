// open and close navbar

const menuButton = document.querySelector('.menu');
const navbar = document.querySelector('nav');

menuButton.addEventListener('click', () => document.body.classList.toggle('active-nav'));

// show service detail when click the + button
const service = document.querySelectorAll('.service');

function showService(num,e){
	service[num - 1].classList.toggle('active-service');

	if (service[num - 1].className.includes('active-service')){
		e.textContent = '-';
	} else{
		e.textContent = '+';
	}
}

// object for feature content 

const features = [
	feature = {
		title: 'Fringe Haircut',
		description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur convallis augue, nec ultrices sem vulputate at. Curabitur mollis tincidunt dui at eleifend. Vivamus urna mi, condimentum sit amet nulla quis, sagittis egestas augue. Cras arcu urna, convallis vel euismod quis, placerat a purus. Curabitur a tellus erat. In efficitur volutpat mattis. Mauris iaculis vulputate orci ac tincidunt.',
		image: 'Fringe.jpg'
		
	},
	
	feature = {
		title: 'Taper Fade',
		description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur convallis augue, nec ultrices sem vulputate at. Curabitur mollis tincidunt dui at eleifend. Vivamus urna mi, condimentum sit amet nulla quis, sagittis egestas augue. Cras arcu urna, convallis vel euismod quis, placerat a purus. Curabitur a tellus erat. In efficitur volutpat mattis. Mauris iaculis vulputate orci ac tincidunt.',
		image: 'Taper-fade-with-slick-back-1.jpg'
	},
	
	feature = {
		title: 'Wavy Slick Back',
		description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur convallis augue, nec ultrices sem vulputate at. Curabitur mollis tincidunt dui at eleifend. Vivamus urna mi, condimentum sit amet nulla quis, sagittis egestas augue. Cras arcu urna, convallis vel euismod quis, placerat a purus. Curabitur a tellus erat. In efficitur volutpat mattis. Mauris iaculis vulputate orci ac tincidunt.',
		image: "Wavy-Slick-back.jpg"
	}
	
]

const featureText = document.querySelector('.feature-text');
const featureContainer = document.querySelector('.feature-container');
const featureImage = document.querySelector('.feature-image img');

function showFeature(num,e){
	featureContainer.classList.add('active-feature');
	featureImage.classList.add('active-image');
	
	featureImage.src = 'assets/' + features[num].image;
	featureText.innerHTML = `<h1>${features[num].title}</h1>
									<p>${features[num].description}</p>`;
									
}

// close feature container
const closeFeatureBtn = document.querySelector('.close-feature');

closeFeatureBtn.addEventListener('click', () => {
	featureContainer.classList.remove('active-feature');
	featureImage.classList.remove('active-image');
})	


	
	
// gsap animation

gsap.to(".hero-content h1", {
	y: -10,
	duration: 2,
	stagger: 0.6,
	opacity: 1
});

gsap.registerPlugin('scrollTrigger');

gsap.to('.image-one', {
	scrollTrigger: {
		trigger: '.image-one',
		toggleActions: "restart pause play none",
	},
	opacity: 1,
	delay: 1,
	scaleY: 1,
	scaleX: 1,
	duration: 1
});

gsap.to('.image-two', {
	scrollTrigger: {
		trigger: '.image-one',
		toggleActions: "restart pause play none",
	},
	opacity: 1,
	scaleY: 1,
	delay: 1.5,
	scaleX: 1,
	duration: 1
});

gsap.to('.image-three', {
	scrollTrigger: {
		trigger: '.image-one',
		toggleActions: "restart pause play none",
	},
	opacity: 1,
	scaleY: 1,
	scaleX: 1,
	duration: 1
});

gsap.to('.head-service h1', {
	scrollTrigger: {
		trigger: '.head-service h1',
		toggleActions: "restart pause play none",
	},
	opacity: 1,
	stagger: 1.2,
	y: 5,
	duration: 1
});

gsap.to('.first-about h1', {
	scrollTrigger: {
		trigger: '.first-about h1',
		toggleActions: "play none none pause",
	},
	opacity: 1,
	y: 3,
	stagger: 0.5,
	duration: 2
});

gsap.to('.second-about', {
	scrollTrigger: {
		trigger: '.second-about',
		toggleActions: "play none none pause",
	},
	opacity: 1,
	x: 1,
	duration: 1
});

gsap.to('.third-about', {
	scrollTrigger: {
		trigger: '.third-about',
		toggleActions: "play none none pause",
	},
	opacity: 1,
	x: 1,
	duration: 1
});

gsap.to('.about-image img', {
	scrollTrigger: {
		trigger: '.about-image img',
		toggleActions: "play none none pause",
	},
	opacity: 1,
	scaleY: 1,
	duration: 1
});

gsap.to('.head-contact', {
	scrollTrigger: {
		trigger: '.head-contact',
		toggleActions: "restart play none play",
	},
	opacity: 1,
	y: 5,
	duration: 2,
	stagger: 1
})
