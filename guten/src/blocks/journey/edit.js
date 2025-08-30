import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import './editor.scss';
import Steps from './Steps.js';
import Decor from './Decor.js';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, text, subtitle, steps, closeTitle, closeText } = attributes;

	const baseClass = 'wp-block-domca-journey';

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
						className={`${baseClass}__text`}
						value={text}
						onChange={(newText) => setAttributes({ text: newText })}
						placeholder="Input section text..."
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
					<Steps
						setAttributes={setAttributes}
						items={steps}
						baseClass={baseClass}
					/>

					<div className={`${baseClass}__close`}>
						<Decor baseClass={baseClass} />
						<RichText
							tagName="p"
							className={`${baseClass}__close-title`}
							value={closeTitle}
							onChange={(newCloseTitle) =>
								setAttributes({ closeTitle: newCloseTitle })
							}
							placeholder="Input close title..."
						/>
						<RichText
							tagName="p"
							className={`${baseClass}__close-text`}
							value={closeText}
							onChange={(newCloseText) =>
								setAttributes({ closeText: newCloseText })
							}
							placeholder="Input close text..."
						/>
					</div>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
