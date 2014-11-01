/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-clock' : '&#x68;',
			'icon-comments' : '&#x63;',
			'icon-user' : '&#x75;',
			'icon-loading' : '&#x26;',
			'icon-search' : '&#x73;',
			'icon-key' : '&#x28;',
			'icon-cog' : '&#x29;',
			'icon-rating' : '&#x5e;',
			'icon-remove' : '&#x74;',
			'icon-list-view' : '&#x2c;',
			'icon-link' : '&#x2d;',
			'icon-thumbs-up' : '&#x2e;',
			'icon-thumbs-down' : '&#x2f;',
			'icon-info' : '&#x69;',
			'icon-blocked' : '&#x32;',
			'icon-cancel' : '&#x78;',
			'icon-checkmark' : '&#x34;',
			'icon-plus' : '&#x2b;',
			'icon-arrow-right' : '&#x3e;',
			'icon-arrow-left' : '&#x3c;',
			'icon-help' : '&#x3f;',
			'icon-briefcase' : '&#x21;',
			'icon-meter-medium' : '&#x27;',
			'icon-mail' : '&#x65;',
			'icon-pencil' : '&#x70;',
			'icon-out' : '&#x61;',
			'icon-busy' : '&#x25;',
			'icon-copy' : '&#x5f;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c) {
			addIcon(el, icons[c[0]]);
		}
	}
};