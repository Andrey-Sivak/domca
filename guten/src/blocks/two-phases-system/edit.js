import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import SectionBg from './SectionBg.js';
import Phase1Icon from './Phase1Icon.js';
import Phase2Icon from './Phase2Icon.js';
import './editor.scss';
import PhaseDecor from './PhaseDecor.js';
import DividerIcon from './Dividericon.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const {
		title,
		introText,
		phase1Title,
		phase2Title,
		bonusText,
		bonusTitle,
	} = attributes;

	const baseClass = 'wp-block-domca-two-phases-system';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<SectionBg baseClass={baseClass} />
					<div className={`${baseClass}__content`}>
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
							className={`${baseClass}__intro-text`}
							value={introText}
							onChange={(newIntroText) =>
								setAttributes({ introText: newIntroText })
							}
							placeholder="Intro Text..."
						/>
						<div className={`${baseClass}__phases`}>
							<div className={`${baseClass}__phase left`}>
								<PhaseDecor baseClass={baseClass} />
								<Phase1Icon baseClass={baseClass} />
								<RichText
									tagName="p"
									className={`${baseClass}__phase-title`}
									value={phase1Title}
									onChange={(newPhase1Title) =>
										setAttributes({
											phase1Title: newPhase1Title,
										})
									}
									placeholder="Phase 1 Title..."
								/>
							</div>
							<div className={`${baseClass}__divider`}>
								<DividerIcon baseClass={baseClass} />
							</div>
							<div className={`${baseClass}__phase right`}>
								<PhaseDecor baseClass={baseClass} />
								<Phase2Icon baseClass={baseClass} />
								<RichText
									tagName="p"
									className={`${baseClass}__phase-title`}
									value={phase2Title}
									onChange={(newPhase2Title) =>
										setAttributes({
											phase2Title: newPhase2Title,
										})
									}
									placeholder="Phase 2 Title..."
								/>
							</div>
						</div>

						<RichText
							tagName="p"
							className={`${baseClass}__bonus-text`}
							value={bonusText}
							onChange={(newBonusText) =>
								setAttributes({ bonusText: newBonusText })
							}
							placeholder="Bonus Text..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__bonus-title`}
							value={bonusTitle}
							onChange={(newBonusTitle) =>
								setAttributes({ bonusTitle: newBonusTitle })
							}
							placeholder="Bonus Title..."
						/>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
