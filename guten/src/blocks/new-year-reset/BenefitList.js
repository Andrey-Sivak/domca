import { RichText } from '@wordpress/block-editor';
import Cloud from './Cloud.js';

const BenefitList = ({
	baseClass,
	benefitsTitle,
	benefit1,
	benefit2,
	benefit3,
	setAttributes,
}) => {
	return (
		<div className={`${baseClass}__benefits`}>
			<RichText
				tagName="p"
				className={`${baseClass}__benefits-title`}
				value={benefitsTitle}
				onChange={(newBenefitsTitle) =>
					setAttributes({
						benefitsTitle: newBenefitsTitle,
					})
				}
				placeholder="Benefits Title..."
			/>
			<div className={`${baseClass}__benefits-list`}>
				<div className={`${baseClass}__benefits-item`}>
					<div className={`${baseClass}__benefits-item-num`}>1</div>
					<Cloud baseClass={baseClass} />
					<RichText
						tagName="p"
						className={`${baseClass}__benefits-item-title`}
						value={benefit1}
						onChange={(newBenefit1) =>
							setAttributes({
								benefit1: newBenefit1,
							})
						}
						placeholder="Benefit 1..."
					/>
				</div>
				<div className={`${baseClass}__benefits-item`}>
					<div className={`${baseClass}__benefits-item-num`}>2</div>
					<Cloud baseClass={baseClass} />
					<RichText
						tagName="p"
						className={`${baseClass}__benefits-item-title`}
						value={benefit2}
						onChange={(newBenefit2) =>
							setAttributes({
								benefit2: newBenefit2,
							})
						}
						placeholder="Benefit 2..."
					/>
				</div>
				<div className={`${baseClass}__benefits-item`}>
					<div className={`${baseClass}__benefits-item-num`}>3</div>
					<Cloud baseClass={baseClass} />
					<RichText
						tagName="p"
						className={`${baseClass}__benefits-item-title`}
						value={benefit3}
						onChange={(newBenefit3) =>
							setAttributes({
								benefit3: newBenefit3,
							})
						}
						placeholder="Benefit 3..."
					/>
				</div>
			</div>
		</div>
	);
};

export default BenefitList;
