import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ItemsList from './ItemsList.js';
import QuoteDecor from './QuoteDecor.js';
import ListDecor from './ListDecor.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { quoteTitle, quoteText, bulletPoints, button } = attributes;

	const baseClass = 'wp-block-domca-lead-magnet-optin';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__quote`}>
						<QuoteDecor baseClass={baseClass} />
						<RichText
							tagName="p"
							className={`${baseClass}__quote-title`}
							value={quoteTitle}
							onChange={(newTitle) =>
								setAttributes({ quoteTitle: newTitle })
							}
							placeholder="Input title..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__quote-text`}
							value={quoteText}
							onChange={(newText) =>
								setAttributes({ quoteText: newText })
							}
							placeholder="Input text..."
						/>
					</div>
					<div className={`${baseClass}__bullet-points`}>
						<ListDecor baseClass={baseClass} />
						<ItemsList
							items={bulletPoints}
							baseClass={baseClass}
							setAttributes={setAttributes}
						/>
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
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
