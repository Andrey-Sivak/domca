import { useBlockProps, RichText } from '@wordpress/block-editor';
import './editor.scss';
import { Fragment } from '@wordpress/element';
import LabelBgSvg from './LabelBgSvg.js';
import ContentBgSvg from './ContentBgSvg.js';
import QuoteBgSvg from './QuoteBgSvg.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const {
		quote,
		title,
		subtitle,
		leftSideLabel,
		leftSideContent,
		rightSideLabel,
		rightSideContent,
	} = attributes;

	const baseClass = 'wp-block-domca-home-comparison-block';

	const blockProps = useBlockProps({
		className: baseClass,
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__quote`}>
						<QuoteBgSvg baseClass={baseClass} />
						<RichText
							tagName="p"
							value={quote}
							onChange={(newQuote) =>
								setAttributes({ quote: newQuote })
							}
							placeholder="Quote..."
						/>
					</div>
					<RichText
						tagName="p"
						className={`${baseClass}__title dm-heading dm-heading-h2`}
						value={title}
						onChange={(newTitle) =>
							setAttributes({ title: newTitle })
						}
						placeholder="Input section title..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__subtitle`}
						value={subtitle}
						onChange={(newSubtitle) =>
							setAttributes({ subtitle: newSubtitle })
						}
						placeholder="Input subtitle..."
					/>
					<div className={`${baseClass}__sides`}>
						<div className={`${baseClass}__side left`}>
							<div className={`${baseClass}__side-label`}>
								<LabelBgSvg baseClass={baseClass} />
								<RichText
									tagName="p"
									value={leftSideLabel}
									onChange={(newLabel) =>
										setAttributes({
											leftSideLabel: newLabel,
										})
									}
									placeholder="Label..."
								/>
							</div>
							<div className={`${baseClass}__side-content`}>
								<ContentBgSvg baseClass={baseClass} />
								<RichText
									tagName="p"
									value={leftSideContent}
									onChange={(newContent) =>
										setAttributes({
											leftSideContent: newContent,
										})
									}
									placeholder="Content..."
								/>
							</div>
						</div>
						<div className={`${baseClass}__side right`}>
							<div className={`${baseClass}__side-label`}>
								<LabelBgSvg baseClass={baseClass} />
								<RichText
									tagName="p"
									value={rightSideLabel}
									onChange={(newLabel) =>
										setAttributes({
											rightSideLabel: newLabel,
										})
									}
									placeholder="Label..."
								/>
							</div>
							<div className={`${baseClass}__side-content`}>
								<ContentBgSvg baseClass={baseClass} />
								<RichText
									tagName="p"
									value={rightSideContent}
									onChange={(newContent) =>
										setAttributes({
											rightSideContent: newContent,
										})
									}
									placeholder="Content..."
								/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
