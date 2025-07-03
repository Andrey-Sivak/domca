import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import LinkEditor from '../../utils/LinkEditor.js';
import QuoteBgSvg from './QuoteBgSvg.js';
import LeadMagnetBg from './LeadMagnetBg.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const {
		quote,
		leadMagnetTitle,
		leadMagnetSubtitle,
		leadMagnetDescription,
		disclaimerText,
		button,
	} = attributes;

	const baseClass = 'wp-block-domca-home-testimonial-lead-magnet';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__quote`}>
						<QuoteBgSvg baseClass={baseClass} />
						<RichText
							tagName="p"
							className={`${baseClass}__title`}
							value={`${quote}`}
							onChange={(newQuote) =>
								setAttributes({ quote: newQuote })
							}
							placeholder="Testimonial Quote..."
						/>
					</div>
					<div className={`${baseClass}__lead-magnet`}>
						<LeadMagnetBg baseClass={baseClass} />
						<div className={`${baseClass}__lead-magnet-content`}>
							<RichText
								tagName="p"
								className={`${baseClass}__lead-magnet-title`}
								value={leadMagnetTitle}
								onChange={(newTitle) =>
									setAttributes({
										leadMagnetTitle: newTitle,
									})
								}
								placeholder="Title..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__lead-magnet-subtitle`}
								value={leadMagnetSubtitle}
								onChange={(newSubtitle) =>
									setAttributes({
										leadMagnetSubtitle: newSubtitle,
									})
								}
								placeholder="Subtitle..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__lead-magnet-description`}
								value={leadMagnetDescription}
								onChange={(newDescription) =>
									setAttributes({
										leadMagnetDescription: newDescription,
									})
								}
								placeholder="Description..."
							/>
							<RichText
								tagName="p"
								className={`${baseClass}__lead-magnet-text`}
								value={disclaimerText}
								onChange={(newDisclaimerText) =>
									setAttributes({
										disclaimerText: newDisclaimerText,
									})
								}
								placeholder="Short Text..."
							/>
							<LinkEditor
								url={button.url}
								target={button.target}
								onChange={(newValue) =>
									setAttributes({
										button: {
											...newValue,
											text: button.text,
										},
									})
								}
							>
								<RichText
									tagName="span"
									className={`${baseClass}__button dm-button dm-button-primary`}
									value={button.text}
									onChange={(newButtonText) =>
										setAttributes({
											button: {
												...button,
												text: newButtonText,
											},
										})
									}
									placeholder="Button text..."
									allowedFormats={[]}
								/>
							</LinkEditor>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
