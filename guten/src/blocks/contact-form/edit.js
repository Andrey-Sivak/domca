import { useBlockProps, RichText } from '@wordpress/block-editor';
import { TextControl } from '@wordpress/components';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import BlockIdInspectorPanel from '../../common-components/BlockIdInspectorPanel.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, blockId, formShortcode } = attributes;

	const baseClass = 'wp-block-domca-contact-form';

	const blockProps = useBlockProps({
		className: baseClass,
	});

	return (
		<Fragment>
			<BlockIdInspectorPanel
				setAttributes={setAttributes}
				blockId={blockId}
			/>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap`}>
					<RichText
						tagName="p"
						className={`${baseClass}__title dm-heading dm-heading-h2`}
						value={title}
						onChange={(newTitle) =>
							setAttributes({ title: newTitle })
						}
						placeholder="Input section title..."
					/>
					<div className={`${baseClass}__form`}>
						<TextControl
							label="Contact Form 7 Shortcode"
							value={formShortcode}
							onChange={(newShortcode) =>
								setAttributes({ formShortcode: newShortcode })
							}
							placeholder="Enter the form shortcode, for example: [contact-form-7 id='123' title='Contact Form']"
						/>
						<div className={`${baseClass}__form-placeholder`}>
							{formShortcode ? (
								<p>
									The form will be displayed on the website
									using the shortcode: {formShortcode}
								</p>
							) : (
								<p>
									Add the Contact Form 7 shortcode to display
									the form.
								</p>
							)}
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
