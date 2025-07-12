import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import FeatureList from './FeatureList.js';
import LeftBgSvg from './LeftBgSvg.js';
import RightBgSvg from './RightBgSvg.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const {
		leftProgramTitle,
		leftProgramFeatures,
		rightProgramTitle,
		rightProgramFeatures,
	} = attributes;

	const baseClass = 'wp-block-domca-reset-programs-section';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__program left`}>
						<LeftBgSvg baseClass={baseClass} />
						<div className={`${baseClass}__program-content`}>
							<RichText
								tagName="p"
								value={leftProgramTitle}
								onChange={(newTitle) =>
									setAttributes({
										leftProgramTitle: newTitle,
									})
								}
								placeholder="Left Program Title..."
								className={`${baseClass}__title dm-heading dm-heading-h3`}
							/>
							<FeatureList
								setAttributes={setAttributes}
								features={leftProgramFeatures}
								baseClass={baseClass}
								featuresKey="leftProgramFeatures"
							/>
						</div>
					</div>
					<div className={`${baseClass}__program right`}>
						<RightBgSvg baseClass={baseClass} />
						<div className={`${baseClass}__program-content`}>
							<RichText
								tagName="p"
								value={rightProgramTitle}
								onChange={(newTitle) =>
									setAttributes({
										rightProgramTitle: newTitle,
									})
								}
								placeholder="Right Program Title..."
								className={`${baseClass}__title dm-heading dm-heading-h3`}
							/>
							<FeatureList
								setAttributes={setAttributes}
								features={rightProgramFeatures}
								baseClass={baseClass}
								featuresKey="rightProgramFeatures"
							/>
						</div>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
