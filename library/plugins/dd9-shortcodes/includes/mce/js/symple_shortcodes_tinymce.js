(function() {
	tinymce.PluginManager.add( 'symple_shortcodes_mce_button', function( editor, url ) {
		editor.addButton( 'symple_shortcodes_mce_button', {
			title: 'Symple Shortcodes',
			type: 'menubutton',
			icon: 'icon symple-shortcodes-icon',
			menu: [


				/** Layout **/
				{
					text: 'Layout',
					menu: [

						/* Columns */
						{
							text: 'Column',
							onclick: function() {
								editor.insertContent('[symple_column size="one-half" position="first"]<br />Content<br />[/symple_column]');
							}
						}, // End columns


						/* Dividers */
						{
							text: 'Divider',
							onclick: function() {
								editor.insertContent('[divider]');
							}
						} // End divider

					]
				}, // End Layout Section


				/** Elements **/
				{
					text: 'Elements',
					menu: [

						/* Button */
						{
							text: 'Button',
							onclick: function() {
								editor.insertContent('[button url="http://www.url.com" class="btn-primary" target="self"]Button Text[/button]');
							}
						}, // End button
						
						/* Special Link */
						{
							text: 'Special Link',
							onclick: function() {
								editor.insertContent('[special_link text="Link Text" url="#"]');
							}
						}, // End special link
						
						/* Small */
						{
							text: 'Small',
							onclick: function() {
								editor.insertContent('[small]Text Here[/small]');
							}
						}, // End small
						
						/* Accent Font */
						{
							text: 'Accent Font',
							onclick: function() {
								editor.insertContent('[accent_font]Text[/accent_font]');
							}
						}, // End Accent
						
						/* Lead Text */
						{
							text: 'Lead Text',
							onclick: function() {
								editor.insertContent('[lead]Text[/lead]');
							}
						}, // End Accent
						
						/* Special List */
						{
							text: 'Special List',
							onclick: function() {
								editor.insertContent('[special_list]<br />Add list here<br />[/special_list]');
							}
						}, // End special list

				
						/* Testimonial */
						{
							text: 'Testimonial',
							onclick: function() {
								editor.insertContent('[testimonial by="Author Name"]Content[/testimonial]');
							}
						} // End Testimonial

					]
				}, // End Elements Section


				/** jQuery Start **/
				{
				text: 'jQuery',
				menu: [

						/* Toggle */
						{
							text: 'Toggle',
							onclick: function() {
								editor.insertContent('[toggle title="Toggle Title"]Content[/toggle]');
							}
						} // End toggle

					]
				} // End jQuery section

			]
		});
	});
})();