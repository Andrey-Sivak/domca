import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import QuestionMark from './QuestionMark.js';
import SectionSeparator from '../community-support/SectionSeparator.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, text, button } = attributes;

	const baseClass = 'wp-block-domca-faq-head-info';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<SectionSeparator baseClass={baseClass} />
				<div className={`${baseClass}__wrap dm-container`}>
					<div className={`${baseClass}__image`}>
						<QuestionMark />
					</div>
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
							className={`${baseClass}__text`}
							value={text}
							onChange={(newText) =>
								setAttributes({ text: newText })
							}
							placeholder="Input text..."
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
