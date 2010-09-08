var DropMenu = new Class({

	initialize: function(container) {
		// reset drop menus
		this._makeMenu(container.getElement('ul'));
	},

	_makeMenu: function(container) {
		container.getElements('ul').each(function(ul) {
			ul.setStyles({
				//'background-color': 'red',
				//display: 'block',
				//overflow: 'hidden'
			});
		});

		var lis = container.getChildren();
		lis.each(function(li){
			var c = li;
			var ul = c.getElement('ul');
			if (ul != undefined) {
				var toggle = new Fx.Style(ul, 'height', {
					duration: 200,
					transition: Fx.Transition.quadOut
				});
				var height = ul.getSize().size.y;
				var hover = false;
				toggle.set(0);

				c.addEvents({
					mouseenter: function() {
						hover = true;
						toggle.stop();
						toggle.start(height);
					},
					mouseleave: function() {
						hover = false;
						(function() {
							if (!hover) {
								toggle.stop();
								toggle.start(0);
							}
						}).delay(750);
					}
				});
			}
		});
	}
});

window.addEvent('domready', function() {
	var menu = $$('.dropmenu')
	//new DropMenu(menu);
});