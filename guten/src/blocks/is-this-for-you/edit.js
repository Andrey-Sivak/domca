import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import CardBgLayerOne from './CardBgLayerOne.js';
import CardBgLayerTwo from './CardBgLayerTwo.js';

const cardsCount = 6;
const cardColor = [
	'#694F52',
	'#DCD0D2',
	'#967376',
	'#CAB9BB',
	'#9F7F83',
	'#B09699',
];

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, card1, card2, card3, card4, card5, card6 } = attributes;

	const baseClass = 'wp-block-domca-is-this-for-you';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

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
					<div className={`${baseClass}__cards`}>
						{Array.from({ length: cardsCount }).map((item, idx) => (
							<div
								className={`${baseClass}__card`}
								key={`card-${idx}`}
							>
								<CardBgLayerTwo
									baseClass={baseClass}
									color={cardColor[idx] || 'white'}
								/>
								<CardBgLayerOne baseClass={baseClass} />
								<RichText
									tagName="p"
									className={`${baseClass}__card-text`}
									value={attributes[`card${idx + 1}`] || ''}
									onChange={(newText) =>
										setAttributes({
											[`card${idx + 1}`]: newText,
										})
									}
									placeholder="Input text..."
								/>
							</div>
						))}
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
