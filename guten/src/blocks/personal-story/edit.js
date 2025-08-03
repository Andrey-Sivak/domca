import { useBlockProps, RichText } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';
import SectionBgSvg from './SectionBgSvg.js';
import './editor.scss';

const Edit = (props) => {
	const { attributes, setAttributes } = props;
	const { title, text } = attributes;

	const baseClass = 'wp-block-domca-personal-story';

	const blockProps = useBlockProps({
		className: baseClass + ' dm-wrap',
	});

	return (
		<Fragment>
			<div {...blockProps}>
				<div className={`${baseClass}__wrap dm-container`}>
					<SectionBgSvg baseClass={baseClass} />
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
						placeholder="Input text..."
					/>
				</div>
			</div>
		</Fragment>
	);
};

export default Edit;
