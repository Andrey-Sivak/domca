import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, subtitle, text, emphasizedMessage, button } = attributes;

	const baseClass = 'wp-block-domca-dont-have-to-be-ready';

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
					<RichText
						tagName="p"
						className={`${baseClass}__subtitle`}
						value={subtitle}
						onChange={(newSubtitle) =>
							setAttributes({ subtitle: newSubtitle })
						}
						placeholder="Input section subtitle..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__text`}
						value={text}
						onChange={(newText) => setAttributes({ text: newText })}
						placeholder="Input text..."
					/>
					<RichText
						tagName="p"
						className={`${baseClass}__emphasized-message`}
						value={emphasizedMessage}
						onChange={(newEmphasizedMessage) =>
							setAttributes({
								emphasizedMessage: newEmphasizedMessage,
							})
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
		</Fragment>
	);
};

export default Edit;
