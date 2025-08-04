import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import ExclamationMarks from './ExclamationMarks.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, text } = attributes;

	const baseClass = 'wp-block-domca-faq-disclaimer';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
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
					</div>
					<div className={`${baseClass}__image`}>
						<ExclamationMarks baseClass={baseClass} />
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
