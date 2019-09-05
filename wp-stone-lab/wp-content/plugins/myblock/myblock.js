wp.blocks.registerBlockType(
	'myblock/stone-lab', {
		title: 'My custom block',
		category: 'common',
		attributes: {
			title: {type: 'string'},
			color: {type: 'string'}
		},

		edit: function (props) {
			function updateTitle(event) {
				props.setAttributes({title: event.target.value})
			}

			function updateColor(value) {
				props.setAttributes({color: value.hex})
			}

			return wp.element.createElement (
				"div",
				null,
				wp.element.createElement(
						"h3",
						null,
						'You title block'
				),
				wp.element.createElement(
					"input", {
						type: "text",
						value: props.attributes.title,
						onChange: updateTitle
					}
				),
				wp.element.createElement(
					wp.components.ColorPicker ,{
						color: props.attributes.color,
						onChangeComplete: updateColor
					}

				)
			)

		},
		save: function (props) {
			return wp.element.createElement(
				"div",
				{style: { 
					color: props.attributes.color 
				}
				},
				props.attributes.title
			);
		}
	}


);