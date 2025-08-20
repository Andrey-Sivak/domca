import {
	useBlockProps,
	InspectorControls,
	RichText,
} from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import { PanelBody, CheckboxControl } from '@wordpress/components';
import ImageUploader from '../../utils/ImageUploader.js';
import ToBottomArrow from './ToBottomArrow.js';
import SectionSeparator from './SectionSeparator.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, text, button, decorImage, useButton, button2, useButton2 } =
		attributes;

	const baseClass = 'wp-block-domca-home-hero-section';

	const blockProps = useBlockProps({
		className: baseClass,
	});

	const onChangeUseButton = (newValue) => {
		setAttributes({ useButton: newValue });
	};

	const onChangeUseButton2 = (newValue) => {
		setAttributes({ useButton2: newValue });
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
						label="Use CTA Second Button"
						help=""
						checked={useButton2}
						onChange={onChangeUseButton2}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps}>
				<SectionSeparator baseClass={baseClass} />
				<ToBottomArrow baseClass={baseClass} />
				<div className={`${baseClass}__inner  dm-wrap`}>
					<div className={`${baseClass}__main-img`}>
						<ImageUploader
							image={decorImage?.url}
							buttonText={`Select Image`}
							onSelect={(media) => {
								setAttributes({
									decorImage: {
										id: media.id,
										url: media.url,
									},
								});
							}}
						/>
					</div>
					<div className={`${baseClass}__wrap dm-container`}>
						<div className={`${baseClass}__content`}>
							<RichText
								tagName="p"
								className={`${baseClass}__title`}
								value={title}
								onChange={(newTitle) =>
									setAttributes({ title: newTitle })
								}
								placeholder="Input section title..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__text`}
								value={text}
								onChange={(newText) =>
									setAttributes({ text: newText })
								}
								placeholder="Input short description text..."
							/>

							<div className={`${baseClass}__buttons`}>
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
										allowedFormats={['core/link']}
									/>
								)}
								{useButton2 && (
									<RichText
										tagName="p"
										className={`${baseClass}__button dm-button dm-button-secondary`}
										value={button2}
										onChange={(newButton2) =>
											setAttributes({
												button2: newButton2,
											})
										}
										placeholder="Button text..."
									/>
								)}
							</div>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
