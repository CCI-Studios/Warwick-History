var CCI_Slideshow = new Class({
	duration: 1500,
	delay: 3000,

	container: null,

	currentImage: null,
	newImage: null,
	
	scrollers: null,
	scrollLeft: null,
	scrollRight: null,
	
	images: null,
	alts: null,
	
	fx: null,
	timer: null,
	active: null,
	
	initialize: function(element) {
		this.container		= element;
	
		this.currentImage	= element.getElement('.currentImage img');
		this.newImage 		= element.getElement('.newImage img');
		
		this.scrollers		= element.getElement('.scrollers');
		this.scrollLeft		= element.getElement('.scrollLeft');
		this.scrollRight	= element.getElement('.scrollRight');
		
		var images 			= element.getElement('.allImages').getElements('img');
		this.images 		= [];
		this.alts			= [];
		
		for (count = images.length, i=0; i < count; i++) {
			this.images.push(images[i].src);
			this.alts.push(images[i].alt);
		}
		
		if (this.scrollLeft)
			this.scrollLeft.addEvent('click', this.prev.bind(this));
		if (this.scrollRight)
			this.scrollRight.addEvent('click', this.next.bind(this));
		
		this.active 		= 0;
		
		this.fx				= $(this.currentImage.parentNode).effect('opacity', {
			duration: this.duration
		});
		this.fx.addEvent('onComplete', function(e) {
			this.fx.set(1);
			this.currentImage.alt = this.newImage.alt
			this.currentImage.src = this.newImage.src;

			this.timer = this.next.delay(this.delay, this);
		}.bind(this));
		
		this.container.addEvent('mouseenter', function() {
			$clear(this.timer);
		}.bind(this));
			
		this.container.addEvent('mouseleave', function() {
			this.timer = this.next.delay(this.delay, this);
		}.bind(this));
	},

	next: function() {
		this.active++;
		if (this.active == this.images.length)
			this.active = 0;
			
		this._update();
	},
	
	prev: function() {
		this.active--;
		if (this.active == -1)
			this.active = this.images.length-1;
			
		this._update();
	},
	
	_update: function() {
		$clear(this.timer);
		this.timer = null;
	
		this.fx.set(1);
		this.newImage.alt = this.alts[this.active];
		this.newImage.src = this.images[this.active];
		this.fx.start(0);
	},
	
	start: function() {
		if (this.images.length == 1 || this.images.length == 0)
			return;
		
		this.timer = this.next.delay(this.delay, this);
	},
	stop: function() {
		$clear(this.timer)
		this.timer = null;
	}
});

window.addEvent('load', function() {
	var slideshows = $$('.slideshowblock');
	slideshows.each(function(ss) {
		new CCI_Slideshow(ss).start();
	});
});