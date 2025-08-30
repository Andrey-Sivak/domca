import {
	useBlockProps,
	InspectorControls,
	RichText,
} from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import { PanelBody, CheckboxControl } from '@wordpress/components';
import ReviewList from './ReviewList.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, useSubtitle, subtitle, items, useButton, button } =
		attributes;

	const baseClass = 'wp-block-domca-reviews-slider';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	const onChangeUseButton = (newValue) => {
		setAttributes({ useButton: newValue });
	};

	const onChangeUseSubtitle = (newValue) => {
		setAttributes({ useSubtitle: newValue });
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
					<CheckboxControl
						label="Use Subtitle"
						help=""
						checked={useSubtitle}
						onChange={onChangeUseSubtitle}
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
					{useSubtitle && (
						<RichText
							tagName="p"
							className={`${baseClass}__subtitle`}
							value={subtitle}
							onChange={(newSubtitle) =>
								setAttributes({ subtitle: newSubtitle })
							}
							placeholder="Input section subtitle..."
						/>
					)}

					<ReviewList
						items={items}
						setAttributes={setAttributes}
						baseClass={baseClass}
					/>
					{useButton && (
						<RichText
							tagName="p"
							className={`${baseClass}__button dm-button dm-button-white`}
							value={button}
							onChange={(newButton) =>
								setAttributes({
									button: newButton,
								})
							}
							placeholder="Button text..."
							allowedFormats={['core/link']}
						/>
					)}
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
