window.addEvent('domready', function() {
	$$('img').addEvent('contextmenu', function(e) {
		e = new Event(e);
		e.stop();
	});
});