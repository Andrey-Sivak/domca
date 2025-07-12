import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import Card1BgSvg from './Card1BgSvg.js';
import Card2BgSvg from './Card2BgSvg.js';
import Card3BgSvg from './Card3BgSvg.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { preTitle, title, card1, card2, card3, bottomText } = attributes;

	const baseClass = 'wp-block-domca-three-cards-section';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<RichText
						tagName="p"
						className={`${baseClass}__pretitle`}
						value={preTitle}
						onChange={(newPreTitle) =>
							setAttributes({ preTitle: newPreTitle })
						}
						placeholder="Input section pretitle..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__title`}
						value={title}
						onChange={(newTitle) =>
							setAttributes({ title: newTitle })
						}
						placeholder="Input section title..."
					/>
					<div className={`${baseClass}__cards`}>
						<div className={`${baseClass}__card`}>
							<Card1BgSvg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__card-text`}
								value={card1}
								onChange={(newCard1) =>
									setAttributes({
										card1: newCard1,
									})
								}
								placeholder="Card 1 Text..."
							/>
						</div>
						<div className={`${baseClass}__card`}>
							<Card2BgSvg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__card-text`}
								value={card2}
								onChange={(newCard2) =>
									setAttributes({
										card2: newCard2,
									})
								}
								placeholder="Card 2 Text..."
							/>
						</div>
						<div className={`${baseClass}__card`}>
							<Card3BgSvg baseClass={baseClass} />
							<RichText
								tagName="p"
								className={`${baseClass}__card-text`}
								value={card3}
								onChange={(newCard3) =>
									setAttributes({
										card3: newCard3,
									})
								}
								placeholder="Card 3 Text..."
							/>
						</div>
					</div>
					<RichText
						tagName="p"
						className={`${baseClass}__bottom-text`}
						value={bottomText}
						onChange={(newBottomText) =>
							setAttributes({
								bottomText: newBottomText,
							})
						}
						placeholder="Input section bottom text..."
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
