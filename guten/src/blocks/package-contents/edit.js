import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import RemoveButtonCross from '../../utils/RemoveButtonCross.js';
import ArrowSVG from './ArrowSVG.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const {
		title,
		feature1Title,
		feature1Details,
		feature2Title,
		feature2Details,
		feature3Title,
		feature3Details,
		feature4Title,
		feature4Details,
		bonusTitle,
		bonusDetails,
	} = attributes;

	const baseClass = 'wp-block-domca-package-contents';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	const updateFeatureDetail = (featureKey, index, value) => {
		const newDetails = [...attributes[featureKey]];
		newDetails[index] = value;
		setAttributes({ [featureKey]: newDetails });
	};

	const addFeatureDetail = (featureKey) => {
		const newDetails = [...attributes[featureKey], ''];
		setAttributes({ [featureKey]: newDetails });
	};

	const removeFeatureDetail = (featureKey, index) => {
		const newDetails = attributes[featureKey].filter((_, i) => i !== index);
		setAttributes({ [featureKey]: newDetails });
	};

	const renderFeatureDetails = (featureKey, details) => {
		return details.map((detail, index) => (
			<div key={index} className={`${baseClass}__feature-detail`}>
				<RichText
					tagName="p"
					value={detail}
					onChange={(value) =>
						updateFeatureDetail(featureKey, index, value)
					}
					placeholder="Enter feature detail..."
				/>
				<RemoveButtonCross
					handleClick={() => removeFeatureDetail(featureKey, index)}
				/>
			</div>
		));
	};

	return (
		<Fragment>
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
					<div className={`${baseClass}__features`}>
						<div className={`${baseClass}__feature`}>
							<ArrowSVG baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__feature-title`}
								value={feature1Title}
								onChange={(newFeature1Title) =>
									setAttributes({
										feature1Title: newFeature1Title,
									})
								}
								placeholder="Feature 1 Title..."
							/>
							{renderFeatureDetails(
								'feature1Details',
								feature1Details,
							)}

							<Button
								isPrimary
								className="dm-button dm-admin-button"
								onClick={() =>
									addFeatureDetail('feature1Details')
								}
							>
								{feature1Details.length
									? 'Add Item'
									: 'Add First Item'}
							</Button>
						</div>
						<div className={`${baseClass}__feature`}>
							<ArrowSVG baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__feature-title`}
								value={feature2Title}
								onChange={(newFeature2Title) =>
									setAttributes({
										feature2Title: newFeature2Title,
									})
								}
								placeholder="Feature 2 Title..."
							/>
							{renderFeatureDetails(
								'feature2Details',
								feature2Details,
							)}
							<Button
								isPrimary
								className="dm-button dm-admin-button"
								onClick={() =>
									addFeatureDetail('feature2Details')
								}
							>
								{feature2Details.length
									? 'Add Item'
									: 'Add First Item'}
							</Button>
						</div>
						<div className={`${baseClass}__feature`}>
							<ArrowSVG baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__feature-title`}
								value={feature3Title}
								onChange={(newFeature3Title) =>
									setAttributes({
										feature3Title: newFeature3Title,
									})
								}
								placeholder="Feature 3 Title..."
							/>
							{renderFeatureDetails(
								'feature3Details',
								feature3Details,
							)}
							<Button
								isPrimary
								className="dm-button dm-admin-button"
								onClick={() =>
									addFeatureDetail('feature3Details')
								}
							>
								{feature3Details.length
									? 'Add Item'
									: 'Add First Item'}
							</Button>
						</div>
						<div className={`${baseClass}__feature`}>
							<ArrowSVG baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__feature-title`}
								value={feature4Title}
								onChange={(newFeature4Title) =>
									setAttributes({
										feature4Title: newFeature4Title,
									})
								}
								placeholder="Feature 4 Title..."
							/>
							{renderFeatureDetails(
								'feature4Details',
								feature4Details,
							)}
							<Button
								isPrimary
								className="dm-button dm-admin-button"
								onClick={() =>
									addFeatureDetail('feature4Details')
								}
							>
								{feature4Details.length
									? 'Add Item'
									: 'Add First Item'}
							</Button>
						</div>
						<div className={`${baseClass}__feature`}>
							<ArrowSVG baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__feature-title`}
								value={bonusTitle}
								onChange={(newBonusTitle) =>
									setAttributes({
										bonusTitle: newBonusTitle,
									})
								}
								placeholder="Bonus Title..."
							/>
							{renderFeatureDetails('bonusDetails', bonusDetails)}
							<Button
								isPrimary
								className="dm-button dm-admin-button"
								onClick={() => addFeatureDetail('bonusDetails')}
							>
								{bonusDetails.length
									? 'Add Item'
									: 'Add First Item'}
							</Button>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
