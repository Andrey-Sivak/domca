import {
	useBlockProps,
	InspectorControls,
	RichText,
} from '@wordpress/block-editor';
import { PanelBody, CheckboxControl } from '@wordpress/components';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import FAQList from './FAQList.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, items, useButton, button } = attributes;

	const baseClass = 'wp-block-domca-faq-block';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	const onChangeUseButton = (newValue) => {
		setAttributes({ useButton: newValue });
	};

	return (
		<Fragment>
			<InspectorControls>
				<PanelBody title="Block Settings" initialOpen={true}>
					<CheckboxControl
						label="Use CTA Button"
						help=""
						checked={useButton}
						onChange={onChangeUseButton}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<RichText
						tagName="p"
						className={`${baseClass}__title dm-heading dm-heading-h2`}
						value={title}
						onChange={(newTitle) =>
							setAttributes({ title: newTitle })
						}
						placeholder="Input section title..."
					/>
					<FAQList setAttributes={setAttributes} questions={items} />

					{useButton && (
						<RichText
							tagName="p"
							className={`${baseClass}__button dm-button dm-button-primary`}
							value={button}
							onChange={(newButton) =>
								setAttributes({
									button: newButton,
								})
							}
							placeholder="Button text..."
						/>
					)}
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
