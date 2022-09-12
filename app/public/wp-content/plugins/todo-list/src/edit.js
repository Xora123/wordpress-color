/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, TextControl, RichText } from '@wordpress/block-editor';

import { RadioControl } from '@wordpress/components';
import { useState } from '@wordpress/element';
/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */



export default function Edit({ attributes, setAttributes, className, props }) {

	const options = [
		{
			label: "Red",
			value: "red",
		},
		{
			label: "Blue",
			value: "blue",
		},
		{
			label: "Yellow",
			value: "yellow",
		},
		{
			label: "Green",
			value: "green",
		},
	];

	const handleSelect = (el) => {
		var c = el.target.value;
		console.log(c)
		return c;
	}

	const MyRadioControl = () => {
		const [ option, setOption ] = useState( 'a' );
	
		return (
			<RadioControl
				label="User type"
				help="The type of the current user"
				selected={ option }
				options={ [
					{ label: 'Author', value: 'a' },
					{ label: 'Editor', value: 'e' },
				] }
				onChange={ ( value ) => setOption( value ) }
			/>
		);
	};
	const blockProps = useBlockProps();
	
	return (
		<h2 {...blockProps}>
			{/* <div className="select-container">
				<select value="" onChange={handleSelect}>
					{options.map((option) => (<option value={option.value}>{option.label}</option>))}
				</select>
			</div> */}
			<RichText
				tagName="p"
				value={attributes.content}
				className ={MyRadioControl()}
				allowedFormats={["core/italic"]}
				onChange={(content) => setAttributes({ content })}
				placeholder={__("Veuillez écrire du texte")}
				/>
				
		</h2>
	);
}

