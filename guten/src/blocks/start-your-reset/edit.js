import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import Cake from './Cake.js';
import LeftTop from './LeftTop.js';
import LeftBottom from './LeftBottom.js';
import RightTop from './RightTop.js';
import RightBottom from './RightBottom.js';
import Choco from './Choco.js';
import CakeBottom from './CakeBottom.js';
import ContentSmall from './ContentSmall.js';
import DarkSmall from './DarkSmall.js';
import SmallCake from './SmallCake.js';
import Candy from './Candy.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, text, button } = attributes;

	const baseClass = 'wp-block-domca-start-your-reset';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<LeftTop baseClass={baseClass} />
				<LeftBottom baseClass={baseClass} />
				<RightTop baseClass={baseClass} />
				<RightBottom baseClass={baseClass} />
				<CakeBottom baseClass={baseClass} />
				<DarkSmall baseClass={baseClass} />
				<SmallCake baseClass={baseClass} />
				<Candy baseClass={baseClass} />

				<div className={`${baseClass}__wrap dm-container`}>
					<Cake baseClass={baseClass} />
					<div className={`${baseClass}__content`}>
						<Choco baseClass={baseClass} />
						<ContentSmall baseClass={baseClass} />
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
							className={`${baseClass}__text`}
							value={text}
							onChange={(newText) =>
								setAttributes({ text: newText })
							}
							placeholder="Input text..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__button dm-button dm-button-secondary`}
							value={button}
							onChange={(newButton) =>
								setAttributes({
									button: newButton,
								})
							}
							placeholder="Button text..."
							allowedFormats={['core/link']}
						/>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
